<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('category');
            $table->integer('subcategory');
            $table->integer('subcategorylevel');
            $table->string('condition');
            $table->string('accessoryType')->nullable();
            $table->string('bodyType')->nullable();
            $table->string('chassisCode')->nullable();
            $table->string('partNumber')->nullable();
            $table->string('vehicleModel')->nullable();
            $table->integer('year')->nullable();
            $table->integer('qty')->nullable();
            $table->integer('myear')->nullable();
            $table->string('transmission')->nullable();
            $table->string('fuelType')->nullable();
            $table->string('EngineCapacity')->nullable();
            $table->string('km')->nullable();
            $table->string('option1')->nullable();
            $table->string('option2')->nullable();
            $table->string('option3')->nullable();
            $table->string('option4')->nullable();
            $table->string('option5')->nullable();
            $table->string('option6')->nullable();
            $table->string('option7')->nullable();
            $table->string('option8')->nullable();
            $table->string('option9')->nullable();
            $table->string('option10')->nullable();
            $table->string('option11')->nullable();
            $table->string('option12')->nullable();
            $table->string('option13')->nullable();
            $table->string('option14')->nullable();
            $table->string('option15')->nullable();
            $table->string('option16')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('discription');
            $table->string('salNumber');
            $table->string('district')->nullable();
            $table->string('address');
            $table->float('price', 12,2);
            $table->string('status')->default(0);
            $table->string('action')->default(0);
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
        Schema::dropIfExists('ads');
    }
}
