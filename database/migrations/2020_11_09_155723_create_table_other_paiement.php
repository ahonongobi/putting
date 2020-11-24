<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOtherPaiement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_other_paiement', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('payment_id');
            $table->integer('userid');
            $table->string('statut');
            $table->string('payer_id');
            $table->string('payer_email');
            $table->float('amount', 10, 2);
            $table->string('currency');
            $table->string('payment_status')->default('actif');
            $table->integer('startTimeSubscription');
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
        Schema::dropIfExists('table_other_paiement');
    }
}
