<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('country', 50);
            $table->string('state_dep', 50);
            $table->string('village_city', 50);
            $table->integer('zone');
            $table->string('street', 50);
            $table->string('avenue', 50);
            $table->numbre('postal_code', 10);
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
        Schema::dropIfExists('directions');
    }
}
