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
            $table->string('nombre',30);
            $table->integer('cantidad');
            $table->integer('preciodollar');
            $table->string('tamanio',20);
            $table->text('descripcion');
            $table->timestamps();
            $table->unsignedBigInteger('id_usernorm')->nullable();
            $table->unsignedBigInteger('id_useradmin')->nullable();

            $table->foreign('id_usernorm')
                  ->references('id')->on('usernormals')
                  ->onDelete('set null');

            $table->foreign('id_user')
                  ->references('id')->on('useradmins')
                  ->onDelete('set null');
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
