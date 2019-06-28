<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',300)->nullable();
            $table->bigInteger('views')->nullable();
            $table->string('video_link',500)->nullable();
            $table->string('description',500)->nullable();
            $table->string('quality',5)->nullable();
            $table->date('release_date')->nullable();
            $table->string('image_link')->nullable();
            $table->string('video_cover')->nullable();
            $table->string('video_page_link')->nullable();
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
        Schema::dropIfExists('videos');
    }
}
