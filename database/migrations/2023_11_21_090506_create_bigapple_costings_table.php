<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBigappleCostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bigapple_costings', function (Blueprint $table) {
            $table->id();
            $table->string('quantity')->nullable();
            $table->string('first_ratio')->nullable();
            $table->string('second_ratio')->nullable();
            $table->string('third_ratio')->nullable();
            $table->date('date')->nullable();
            $table->string('note')->nullable();
            $table->float('cement_cost_per_bag')->nullable();
            $table->float('sands_cost_per_cft')->nullable();
            $table->float('aggregate_cost_cft')->nullable();

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
        Schema::dropIfExists('bigapple_costings');
    }
}
