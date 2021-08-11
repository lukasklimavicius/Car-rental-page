<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->integer('cars_id')->unsigned();
            $table->date('start_date');
            $table->date('finish_date');
            $table->integer('total_sum');
            $table->enum('status', \App\Models\Reservation::STATES);
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('owner_id')->references('owner_id')->on('cars')->onDelete('cascade');
            $table->foreign('cars_id')->references('id')->on('cars')->onDelete('cascade');
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
        Schema::dropIfExists('reservations');
    }
}
