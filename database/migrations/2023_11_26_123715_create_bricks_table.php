<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBricksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bricks', function (Blueprint $table) {
            $table->id();
            $table->string('FloorQuantity')->nullable();
            $table->float('BrickSize')->nullable();
            $table->string('Mortar')->nullable();
            $table->string('DryMortar')->nullable();
            $table->string('FirstRatio')->nullable();
            $table->string('SecondRatio')->nullable();
            $table->date('date')->nullable();
            $table->text('note')->nullable();
            $table->string('BricksCostPerPcs')->nullable();
            $table->string('CementCostPerBag')->nullable();
            $table->string('SandsCostPerCft')->nullable();
            $table->float('TotalSquareFeet')->nullable();
            $table->float('TotalBricks')->nullable();
            $table->float('Thickness')->nullable();
            $table->float('TotalMortars')->nullable();
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
        Schema::dropIfExists('bricks');
    }
}
