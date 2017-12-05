<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLegacyHashToUserHashpowerRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_hashpower_records', function (Blueprint $table) {
            $table->integer('hash_2')->default(0)->unsigned();
            $table->integer('hash_3')->default(0)->unsigned();
            $table->integer('hash_4')->default(0)->unsigned();
            $table->integer('hash_5')->default(0)->unsigned();
            $table->integer('hash_6')->default(0)->unsigned();
            $table->integer('hash_7')->default(0)->unsigned();
            $table->integer('hash_8')->default(0)->unsigned();
            $table->integer('hash_9')->default(0)->unsigned();
            $table->integer('hash_10')->default(0)->unsigned();
            $table->integer('hash_11')->default(0)->unsigned();
            $table->integer('hash_12')->default(0)->unsigned();
            $table->integer('hash_pos')->default(2)->unsigned();

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
