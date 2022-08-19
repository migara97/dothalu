<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shop_Id');          
            $table->string('shopName');
            $table->string('shopType');
            $table->string('street');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('pNumber1');
            $table->string('pNumber2')->nullable();
            $table->string('wNumber');
            $table->string('about');
            $table->string('logo');
            $table->string('banner');
            $table->string('banner2');
            $table->string('banner3');
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
