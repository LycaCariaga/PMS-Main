<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('BP');
            $table->integer('temp');
            $table->integer('RR');
            $table->integer('CR');
            $table->integer('weight');
            $table->integer('PR');
            $table->string('complaint');
            $table->biginteger('patient_id')->unsigned();

            $table->timestamps();
            $table->foreign('patient_id')->references('id')->on('patients')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultations');
    }
}
