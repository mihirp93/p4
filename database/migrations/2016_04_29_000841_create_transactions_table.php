<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('transactions', function (Blueprint $table) {
             $table->increments('id');
             $table->string('trans_desc');
             $table->decimal('trans_amount',13,2);
             $table->date('trans_date');
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
         Schema::drop('transactions');
     }
}
