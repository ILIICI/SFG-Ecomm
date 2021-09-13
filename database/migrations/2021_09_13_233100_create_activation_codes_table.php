<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivationCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activation_codes', function (Blueprint $table) {
            $table->id('id_activation_code');
            $table->string('code');
            $table->unsignedBigInteger('belong_To_Product')->nullable();
            $table->unsignedBigInteger('belong_To_User')->nullable();
            $table->boolean('is_Activated')->nullable();
            $table->date('activated_On_Date')->nullable();
            $table->date('expire_On_Date')->nullable();
            $table->date('created_On_Date')->date();
            $table->unsignedBigInteger('created_By_User');

            $table->foreign('belong_To_Product')->references('id')->on('products')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('belong_To_User')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('created_By_User')->references('id')->on('users')
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
        Schema::dropIfExists('activation_codes');
    }
}
