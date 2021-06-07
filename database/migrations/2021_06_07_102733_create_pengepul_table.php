<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengepulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengepul', function (Blueprint $table) {
            $table->double('id_pengepul')->primary();
            $table->string('nm_pengepul', 50);
            $table->longText('alamat_pengepul');
            $table->string('telp_pengepul', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengepul');
    }
}
