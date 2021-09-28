<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUseranormalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('useranormals', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('apellido',40);
            $table->timestamps('fecha_nacimiento');
            $table->char('sexo');
            $table->timestamps();
            $table->unsignedBigInteger('id_contact');
            $table->unsignedBigInteger('id_product');

            $table->foreign('id_contact')->references('id')
                  ->on('contacts')->onDelete('set null');
                  
            $table->foreign('id_product')->references('id')
                  ->on('products')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('useranormals');
    }
}
