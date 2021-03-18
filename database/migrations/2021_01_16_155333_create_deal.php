<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mycar_id');
            $table->foreign('mycar_id')->references('id')->on('car');
            $table->unsignedBigInteger('hiscar_id');
            $table->foreign('hiscar_id')->references('id')->on('car');
            $table->string('pay_or_take');
            $table->double('price',9,2);
            $table->text('service')->nullable();
            $table->string('state',1);
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
        Schema::dropIfExists('deal');
    }
}
