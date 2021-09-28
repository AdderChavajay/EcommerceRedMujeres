<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUseradminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('useradmins', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->timestamp('fecha_nacimiento');
            $table->char('sexo');
            $table->timestamps();
            $table->unsignedBigInteger('id_socio')->nullable();

            $table->foreign('id_socio')
                  ->references('id')->on('associations')
                  ->onDelete('set null') ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('useradmins');
    }
}
