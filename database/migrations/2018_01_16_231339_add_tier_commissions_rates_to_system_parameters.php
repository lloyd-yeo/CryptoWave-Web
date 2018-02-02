<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTierCommissionsRatesToSystemParameters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('system_parameters', function (Blueprint $table) {
		    $table->unsignedDecimal('tier_1_comms_rate')->default(0.2);
		    $table->unsignedDecimal('tier_2_comms_rate')->default(0.1);
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
