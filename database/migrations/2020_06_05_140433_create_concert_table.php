<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concert', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('artist_id');
            $table->string('location');
            $table->integer('country_id');
            $table->dateTime('date');
            $table->boolean('meetandgreet');
            $table->boolean('merchandise');
            $table->string('ticketlink');
            $table->integer('ticket_status_id');
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
        Schema::dropIfExists('concert');
    }
}
