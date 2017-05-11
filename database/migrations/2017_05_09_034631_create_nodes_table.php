<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodesTable extends Migration
{

    public function up()
    {
        Schema::create('nodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->integer('sitemap_id')->unsigned();
            $table->foreign('sitemap_id')->references('id')->on('sitemaps');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nodes');
    }
}
