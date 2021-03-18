<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_member', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_id');
            $table->foreign('car_id')->references('id')->on('car');
            $table->unsignedBigInteger('chat_id');
            $table->foreign('chat_id')->references('id')->on('chat');
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
        Schema::dropIfExists('chat_member');
    }
}
