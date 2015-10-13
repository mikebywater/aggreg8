<?php
use App\Source;
use Illuminate\Database\Seeder;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Source::create([
              "name" => "BBC Gossip",
              "url"  => "https://api.import.io/store/data/db62bf77-6862-49bd-9955-dc26b30cc2c5/_query?input/webpage/url=http%3A%2F%2Fwww.bbc.co.uk%2Fsport%2F0%2Ffootball%2Fgossip%2F&_user=cd943aba-5f7b-4b5f-bbb2-ba32fc0863db&_apikey=cd943aba5f7b4b5fbbb2ba32fc0863dbd8c75ffda5e937cc3bdb2f6a84d151265bd5edfe6f9e0c0d8b41963fa1957a5cf87a354e92f8233af5af9ed023e5319ae206249567f57fb93d8e468838e5549d",
              "url_node" => "external_link",
              "title_node" => "external_link/_text",
              "content_node" => "content",
              "image_node" => ""
        ]);
    }
}
