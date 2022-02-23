<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('consultation_id')->unsigned();
            $table->string('medicine');
            $table->integer('medicineQuantity');
            $table->string('supply');
            $table->integer('supplyQuantity');
            $table->string('intervention');
            $table->string('ClinicRestNoM')->nullable();
            $table->string('ClinicRestApproved')->nullable();
            $table->string('SentHomeApproved')->nullable();
            $table->string('SentToEmergencyRoomER')->nullable();
            $table->string('SentToEmergencyRoomWitness')->nullable();
            $table->string('SentToEmergencyRoomWaiverName')->nullable();
            $table->string('SentToEmergencyRoomWaiverFile')->nullable();
            $table->timestamps();
            $table->foreign('consultation_id')->references('id')->on('consultations')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interventions');
    }
}
