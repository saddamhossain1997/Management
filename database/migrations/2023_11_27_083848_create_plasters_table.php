<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plasters', function (Blueprint $table) {
            $table->id();
            $table->string('FirstRatio')->nullable();
            $table->string('SecondRatio')->nullable();
            $table->string('FloorQuantity')->nullable();
            $table->string('DryMortar')->nullable();
            $table->date('date')->nullable();
            $table->text('note')->nullable();
            $table->float('CementCostPerBag')->nullable();
            $table->float('SandsCostPerCft')->nullable();
            $table->float('PlasterArea')->nullable();
            $table->float('Side')->nullable();
            $table->float('PlasterThickness')->nullable();
            $table->float('TotalPlasterArea')->nullable();

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
        Schema::dropIfExists('plasters');
    }
}
