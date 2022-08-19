<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequsetshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requsetshops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userID');
            $table->string('userEmail');
            $table->string('semail');
            $table->string('Number');
            $table->string('wNumber')->nullable();
            $table->string('address')->nullable();            
            $table->boolean('action')->default(0);
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('requsetshops');
    }
}
