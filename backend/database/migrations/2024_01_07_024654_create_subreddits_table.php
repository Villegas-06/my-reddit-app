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
        Schema::create('subreddits', function (Blueprint $table) {
            $table->string('id')->primary();  // Cambiar a VARCHAR y definir como clave primaria
            $table->text('title');
            $table->string('display_name');
            $table->integer('subscribers');
            $table->text('public_description');
            $table->text('icon_img');
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
        Schema::dropIfExists('subreddits');
    }
};
