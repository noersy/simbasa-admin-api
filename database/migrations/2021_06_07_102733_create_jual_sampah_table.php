<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJualSampahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jual_sampah', function (Blueprint $table) {
            $table->double('id_jual')->primary();
            $table->dateTime('tgl_jual');
            $table->double('total_jual');
            $table->double('pengepul_id_pengepul')->nullable()->index('jual_sampah_pengepul_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jual_sampah');
    }
}
