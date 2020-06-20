<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',120);
            $table->year('formation');
            $table->unsignedBigInteger('genre_id');
            $table->string('origin',120);
            $table->unsignedBigInteger('country_id');
            $table->string('facebooklink',120);
            $table->string('twitterlink',120);
            $table->string('youtubelink',120);
            $table->string('spotifylink',120);
            $table->string('piclink');
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
        Schema::dropIfExists('artist');
    }
}
