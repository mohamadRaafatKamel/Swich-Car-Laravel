<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('slnder_id');
            $table->string('model')->nullable();
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('agent_id');
            $table->string('elker')->nullable();
            $table->string('machen')->nullable();
            $table->string('body')->nullable();
            $table->string('fuel')->nullable();
            $table->string('description')->nullable();
            $table->double('price',9,2)->nullable();
            $table->string('state',1)->default('0');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('brand_id')->references('id')->on('brand');
            $table->foreign('type_id')->references('id')->on('type');
            $table->foreign('cat_id')->references('id')->on('category');
            $table->foreign('slnder_id')->references('id')->on('slnder');
            $table->foreign('city_id')->references('id')->on('city');
            $table->foreign('color_id')->references('id')->on('color');
            $table->foreign('agent_id')->references('id')->on('agent');
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
        Schema::dropIfExists('car');
    }
}
