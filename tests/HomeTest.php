<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeTest extends TestCase
{
    /**
     * Test that the webpage name is displayed on the homepage
     *
     * @return void
     */
    public function testViewSiteName()
    {
        $this->visit('/')
             ->see('Grappling Ninja');
    }
}
