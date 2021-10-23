<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_purchased', function (Blueprint $table) {
            $table->id();
            $table->double('price', 8, 2);
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('purchase_made_id')->nullable();

            $table->foreign('purchase_made_id')->references('id')
                ->on('purchase_mades')->onDelete('cascade');
            $table->foreign('product_id')->references('id')
                ->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details_purchased');
    }
}
