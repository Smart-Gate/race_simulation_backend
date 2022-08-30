<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaceCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_cars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('race_id')->unsigned();
            $table->string('name');
            $table->float('top_speed');
            $table->float('acceleration');
            $table->float('time_until_top_speed');
            $table->float('dist_until_top_speed');
            $table->float('time_with_top_speed');
            $table->float('dist_with_top_speed');
            $table->float('total_time');
            $table->float('path_length');
            $table->float('total_dist');
            $table->boolean('test_result');
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
        Schema::dropIfExists('race_cars');
    }
}
