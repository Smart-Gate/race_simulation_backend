<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreakCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('break_cars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('break_simulator_id')->unsigned();
            $table->string('name');
            $table->float('top_speed');
            $table->float('break_acceleration');
            $table->float('dist_until_stop');
            $table->float('time_until_stop');
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
        Schema::dropIfExists('break_cars');
    }
}
