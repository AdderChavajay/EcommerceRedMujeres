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
        Schema::create('details_products', function (Blueprint $table) {
            $table->id();
            $table->integer('id_producto');
            $table->integer('precio_unitario');
            $table->timestamps();
            $table->unsignedBigInteger('id_purchase_mades')->nullable();
            
            $table->foreign('id_purchase_mades')->references('id')
                  ->on('purchase_mades')->onDelete('set null');
                  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details_products');
    }
}
