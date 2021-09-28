<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->integer('celular');
            $table->string('contra');
            $table->timestamps();
            $table->unsignedBigInteger('id_usernorm')->nullable();
            $table->unsignedBigInteger('id_useradmin')->nullable();

            $table->foreign('id_usernormls')->references('id')
                  ->on('usernormals')->onDelete('set null');
                  
            $table->foreign('id_useradmin')->references('id')
                  ->on('useradmins')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
