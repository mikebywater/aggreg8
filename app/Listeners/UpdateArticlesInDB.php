<?php

namespace App\Listeners;
use App\Article;
use App\Source;
use App\Events\UpdateArticles;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Hash;

class UpdateArticlesInDB
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  UpdateArticles  $event
     * @return void
     */
    public function handle(UpdateArticles $event)
    {

        $sources = Source::all();


        foreach($sources as $source)
        {



            $client = new \Guzzle\Service\Client($source->url);
            $response = $client->get()->send();
            $results = $response->json()['results'];



            $filters = ["Spurs" , "Kane" , "Tottenham", "Hotspur", "White Hart Lane" , "spurs" , "Dembele" , "Christian Eriksen"];


            foreach ($results as $result)
            {
                $content = isset($result[$source->content_node]) ? $result[$source->content_node] : '#';
                // First check if spurs are mentioned
                $found = false;

                if ($source->filter)
                {
                    foreach($filters as $filter)
                    {
                        $pos = strpos($content, $filter);
                        if($pos !== false){
                            $found = true;
                        }
                    }
                }
                else
                {
                    $found = true;
                }

                // Assuming we got a match check if we already have the story

                if ($found) {
                    $hash = sha1($content);
                    $match = Article::where('hash', '=', $hash)->first();
                    if (!$match) {
                        Article::create([
                            "url" => isset($result[$source->url_node]) ? $result[$source->url_node] : '#',
                            "title" => isset($result[$source->title_node]) ? $result[$source->title_node] : '#',
                            "content" => isset($result[$source->content_node]) ? $result[$source->content_node] : '#',
                            "image" => isset($result[$source->image_node]) ? $result[$source->image_node] : '/img/alt.png',
                            "hash" => $hash,
                            "source_id" => $source->id

                        ]);
                    }
                }

            }

        }

    }
}
