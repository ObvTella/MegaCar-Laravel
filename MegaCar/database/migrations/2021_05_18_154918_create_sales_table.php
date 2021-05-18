<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id('id');
            $table->string('user_email');
            $table->unsignedBigInteger('engine_id');
            $table->decimal('price', 19, 2);
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
        Schema::dropIfExists('sales');
    }
}
