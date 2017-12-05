<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLegacyHashUpdateTimeToUserHashpowerRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_hashpower_records', function (Blueprint $table) {
            $table->dateTime('hash_1_date')->nullable();
            $table->dateTime('hash_2_date')->nullable();
            $table->dateTime('hash_3_date')->nullable();
            $table->dateTime('hash_4_date')->nullable();
            $table->dateTime('hash_5_date')->nullable();
            $table->dateTime('hash_6_date')->nullable();
            $table->dateTime('hash_7_date')->nullable();
            $table->dateTime('hash_8_date')->nullable();
            $table->dateTime('hash_9_date')->nullable();
            $table->dateTime('hash_10_date')->nullable();
            $table->dateTime('hash_11_date')->nullable();
            $table->dateTime('hash_12_date')->nullable();

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
