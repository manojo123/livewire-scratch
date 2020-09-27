<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users_table');

            $table->string('title');
            $table->string('video_url');
            $table->string('image_url');
            $table->integer('thumbs_up')->default(0);
            $table->integer('thumbs_down')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
