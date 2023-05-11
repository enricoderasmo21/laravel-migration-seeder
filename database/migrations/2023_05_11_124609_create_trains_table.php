<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->string('departure_hour');
            $table->string('arrival_hour');
            $table->string('train_code');
            $table->tinyInteger('carriages_number');
            $table->boolean('is_on_time');
            $table->boolean('is_deleted');

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
        Schema::dropIfExists('trains');
    }
};
