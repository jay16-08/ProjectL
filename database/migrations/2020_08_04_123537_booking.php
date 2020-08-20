<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Booking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->integer('bookid');
            $table->integer('roomid');//->unsigned();
        //    $table->foreign('roomid')->references('roomid')->on('room');
            $table->integer('customerid');
            $table->date('bookingdate');
            $table->datetime('checkin');
            $table->datetime('checkout');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
