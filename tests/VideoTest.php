<?php
use App\Video;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VideoTest extends TestCase {
    /**
     * Test that we can instantiate the Video class
     *
     * @return void
     */
    public function testVideo()
    {
        $vid = new Video();
    }
}
