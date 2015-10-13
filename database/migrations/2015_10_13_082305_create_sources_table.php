<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //"url_node", "url", "content_node", "image_node", "title_node", "filter" ,  "name"

        Schema::create('sources', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('url');
            $table->string('url_node');
            $table->string('content_node');
            $table->string('image_node');
            $table->string('title_node');
            $table->boolean('filter');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sources');
    }
}
