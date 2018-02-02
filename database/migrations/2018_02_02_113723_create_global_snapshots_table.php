<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobalSnapshotsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('global_snapshots', function (Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->unsignedBigInteger('total_hash')->default(0);
			$table->unsignedDecimal('total_xmr', 13, 12)->default(0);
	        $table->unsignedInteger('snapshot_instance_id')->nullable();
	        $table->foreign('snapshot_instance_id')->references('id')->on('snapshot_instances');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('global_snapshots');
	}
}
