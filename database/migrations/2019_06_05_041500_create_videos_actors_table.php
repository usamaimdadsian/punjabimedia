<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos_actors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('video_id')->unsigned();
            $table->bigInteger('actor_id')->unsigned();
            $table->foreign('video_id')->references('id')->on('videos');
            $table->foreign('actor_id')->references('id')->on('actors');
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
        Schema::dropIfExists('videos_actors');
    }
}
