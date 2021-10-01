<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseMadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_mades', function (Blueprint $table) {
            $table->id();
            $table->string('customer',50);
            $table->integer('total_car');
            $table->integer('num_purchase');
            $table->timestamps();
            $table->unsignedBigInteger('id_user')->nullable();

            $table->foreign('id_user')->references('id')
                   ->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_mades');
    }
}
