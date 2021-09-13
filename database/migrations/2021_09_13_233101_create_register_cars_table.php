<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_cars', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('assigned_to_user');
            $table->unsignedBigInteger('assigned_activation_code');
            $table->string('vn');
            $table->string('car_model');
            $table->string('car_brand');
            $table->date('date_assigned');
            $table->timestamps();

            $table->foreign('assigned_to_user')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('assigned_activation_code')->references('id_activation_code')->on('activation_codes')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_cars');
    }
}
