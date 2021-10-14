<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle_id')->nullable();
            $table->foreignId('team_id');
            $table->integer('year');
            $table->string('manufacturer');
            $table->string('model');
            $table->string('vin')->nullable();
            $table->string('license_plate')->nullable();
            $table->longText('image')->nullable();
            $table->foreignId('vehicle_type');
            $table->integer('odometer')->nullable();
            $table->integer('engine_hours')->nullable();
            $table->integer('lower_hours')->nullable();
            $table->integer('upper_hours')->nullable();
            $table->tinyInteger('status')->comment('1: active, 0: in active')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('vehicles');
    }
}
