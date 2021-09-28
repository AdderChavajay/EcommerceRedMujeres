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
            $table->unsignedBigInteger('id_user_normal')->nullable();
            $table->unsignedBigInteger('id_user_admin')->nullable();

            $table->foreign('id_user_normal')->references('id')
                ->on('user_normals')->onDelete('set null');

            $table->foreign('id_user_admin')->references('id')
                ->on('user_admins')->onDelete('set null');
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
