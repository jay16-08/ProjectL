<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->integer('customerid');
            $table->string('customername');
            $table->text('address');
            $table->string('contactno');
            $table->string('gender');
            $table->string('idproof');
            $table->string('addressproof');
            $table->string('profileimage');
            $table->string('status');
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
