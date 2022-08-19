<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategorylevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategorylevels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('categoryID')->unsigned();
            $table->foreign('categoryID')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('subcategoryID')->unsigned();
            $table->foreign('subcategoryID')->references('id')->on('subcategories')->onDelete('cascade');
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategorylevels');
    }
}
