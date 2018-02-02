<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualSnapshotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_snapshots', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
	        $table->unsignedInteger('snapshot_instance_id')->nullable();
	        $table->foreign('snapshot_instance_id')->references('id')->on('snapshot_instances');
	        $table->unsignedInteger('user_id')->nullable();
	        $table->foreign('user_id')->references('id')->on('users');
	        $table->unsignedBigInteger('monthly_hash')->default(0);
	        $table->unsignedBigInteger('lifetime_hash')->default(0);
	        $table->unsignedDecimal('xmr', 13, 12)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individual_snapshots');
    }
}
