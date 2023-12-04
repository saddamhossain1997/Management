<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBricksExtraCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bricks_extra_costs', function (Blueprint $table) {
            $table->id();
            $table->string('TotalSquareFeet')->nullable();
            $table->string('Thickness')->nullable();
            $table->string('TotalBricks')->nullable();
            $table->string('TotalMortars')->nullable();

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
        Schema::dropIfExists('bricks_extra_costs');
    }
}
