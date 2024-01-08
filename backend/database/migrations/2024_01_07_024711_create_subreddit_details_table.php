<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subreddit_details', function (Blueprint $table) {
            $table->id();
            $table->string('subreddit_id');
            $table->foreign('subreddit_id')->references('id')->on('subreddits')->onDelete('cascade');
            $table->text('title');
            $table->text('submit_text');
            $table->integer('subscribers');
            $table->text('display_name');
            $table->text('icon_img');
            $table->string('banner_img');
            $table->string('community_icon');
            $table->longText('public_description');
            $table->longText('description');
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
        Schema::dropIfExists('subreddit_details');
    }
};
