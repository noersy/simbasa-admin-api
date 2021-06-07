<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetorSampahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setor_sampah', function (Blueprint $table) {
            $table->double('id_setor')->primary();
            $table->dateTime('tgl_setor');
            $table->double('total_setor');
            $table->string('nasabah_id_nasabah', 50)->nullable()->index('setor_sampah_nasabah_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setor_sampah');
    }
}
