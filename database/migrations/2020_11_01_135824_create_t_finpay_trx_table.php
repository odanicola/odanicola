<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTFinpayTrxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_finpay_trx', function (Blueprint $table) {
            $table->id();
            $table->string('merchant_id')->default(null)->nullable(true);
            $table->string('pay_date')->default(null)->nullable(true);
            $table->string('invoice')->default(null)->nullable(true);
            $table->string('amount')->default(null)->nullable(true);
            $table->string('sof_id')->default(null)->nullable(true);
            $table->string('sof_type')->default(null)->nullable(true);
            $table->string('payment_code')->default(null)->nullable(true);
            $table->string('ref_no')->default(null)->nullable(true);
            $table->string('result_code')->default(null)->nullable(true);
            $table->string('result_desc')->default(null)->nullable(true);
            $table->string('add_info1')->default(null)->nullable(true);
            $table->string('add_info2')->default(null)->nullable(true);
            $table->string('add_info3')->default(null)->nullable(true);
            $table->string('add_info4')->default(null)->nullable(true);
            $table->string('add_info5')->default(null)->nullable(true);
            $table->string('payment_source')->default(null)->nullable(true);
            $table->string('mer_signature')->default(null)->nullable(true);
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
        Schema::dropIfExists('t_finpay_trx');
    }
}
