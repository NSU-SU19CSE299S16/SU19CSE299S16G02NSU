<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PaymentsCompleted extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments_completed', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_id');
            $table->decimal('amount', 8, 2);	            
            $table->string('bkash_t_id')->unique();
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
        Schema::dropIfExists('payments_completed');
    }

}
