<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('data',500)->nullable(); 
            $table->bigInteger('replied_to')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('video_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('video_id')->references('id')->on('videos');
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
        Schema::dropIfExists('comments');
    }
}
