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
            $table->unsignedBigInteger('subreddit_id');
            $table->foreign('subreddit_id')->references('id')->on('subreddits')->onDelete('cascade');
            $table->text('public_description_html')->nullable();
            $table->text('description')->nullable();
            $table->string('banner_img')->nullable();
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
