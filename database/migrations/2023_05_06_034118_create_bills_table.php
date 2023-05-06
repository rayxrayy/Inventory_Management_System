<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('client_name')->nullable(true);
            $table->string('client_address')->nullable(true);
            $table->string('client_phone')->nullable(true);
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('rate');
            $table->integer('quantity');
            $table->float('gross_amount')->nullable(true);
            $table->float('vat')->nullable(true);
            $table->float('s_charge')->nullable(true);
            $table->float('discount')->nullable(true);
            $table->float('net_amount')->nullable(true);
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
        Schema::dropIfExists('bills');
    }
}
