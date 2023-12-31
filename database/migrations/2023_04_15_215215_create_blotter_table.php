<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlotterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blotter', function (Blueprint $table) {
            $table->id();
            $table->string('complainant');
            $table->string('respondent');
            $table->string('victim');
            $table->string('type');
            $table->string('location');
            $table->string('date');
            $table->string('time');
            $table->string('details');
            $table->string('status');
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
        Schema::dropIfExists('blotter');
    }
}
