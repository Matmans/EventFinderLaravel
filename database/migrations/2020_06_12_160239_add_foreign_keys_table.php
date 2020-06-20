<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
            $table->foreign('country_id')->references('id')->on('country')->onDelete('cascade');
        });

        Schema::table('artist', function ($table) {
            $table->foreign('genre_id')->references('id')->on('genre')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('country')->onDelete('cascade');
        });

        Schema::table('concert', function ($table) {
            $table->foreign('artist_id')->references('id')->on('artist')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('country')->onDelete('cascade');
            $table->foreign('ticket_status_id')->references('id')->on('ticket_status')->onDelete('cascade');
        });

        Schema::table('concert_wishlist', function ($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('concert_id')->references('id')->on('concert')->onDelete('cascade');
        });

        Schema::table('fav_artist', function ($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('artist_id')->references('id')->on('artist')->onDelete('cascade');
        });

        Schema::table('song', function ($table) {
            $table->foreign('artist_id')->references('id')->on('artist')->onDelete('cascade');
            $table->foreign('genre_id')->references('id')->on('genre')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
