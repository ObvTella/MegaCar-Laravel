<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrenotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prenotations', function (Blueprint $table) {
            $table->id('id');
            $table->string('user_email');
            $table->unsignedBigInteger('engine_id');
            $table->date('date');
            $table->timestamps();
            $table->foreign('user_email')->references('email')->on('users');
            $table->foreign('engine_id')->references('id')->on('engines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prenotations');
    }
}
