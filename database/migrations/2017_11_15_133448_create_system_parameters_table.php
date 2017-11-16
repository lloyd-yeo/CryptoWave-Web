<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_parameters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('binary_download_link')->nullable();
            $table->decimal('sgd_multiplier', 14, 8);
            $table->decimal('buffer_multiplier', 14, 2);
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
        Schema::dropIfExists('system_parameters');
    }
}
