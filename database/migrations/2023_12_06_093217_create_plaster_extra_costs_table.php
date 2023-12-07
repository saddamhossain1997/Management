<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlasterExtraCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plaster_extra_costs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plaster_id')->nullable();
            $table->string('PlasterArea')->nullable();
            $table->string('Side')->nullable();
            $table->string('PlasterThickness')->nullable();
            $table->string('TotalPlasterArea')->nullable();
            $table->string('TotalPlaster')->nullable();
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
        Schema::dropIfExists('plaster_extra_costs');
    }
}
