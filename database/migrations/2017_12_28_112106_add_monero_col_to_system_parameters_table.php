<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoneroColToSystemParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('system_parameters', function (Blueprint $table) {
		    $table->bigInteger('total_hashes')->default(0);
			$table->integer('fees')->default(20);
			$table->unsignedDecimal('min_xmr_withdrawal')->default(0.1);
		    $table->unsignedDecimal('total_xmr_mined', 13, 12)->default(0.2936161384);
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
