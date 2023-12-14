<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_banks', function (Blueprint $table) {
            $table->id();
            $table->string('mobile_name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('mobile_opening_balance')->nullable();
            $table->string('total')->nullable();
            $table->string('mobile_status')->nullable();
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
        Schema::dropIfExists('mobile_banks');
    }
}
