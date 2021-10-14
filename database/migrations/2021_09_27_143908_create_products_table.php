<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->integer('quantity');
            $table->integer('price');
            $table->string('size', 20);
            $table->text('description')->nullable();
            $table->string('images');
            $table->integer('selled')->default(0);
            $table->timestamps();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('association_id');
            $table->foreign('user_id')->references('id')
                ->on('users')->onDelete('set null');
            $table->foreign('association_id')->references('id')
                ->on('associations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
