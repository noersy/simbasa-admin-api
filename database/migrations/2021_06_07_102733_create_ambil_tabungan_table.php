<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbilTabunganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambil_tabungan', function (Blueprint $table) {
            $table->string('id_ambil', 50)->primary();
            $table->dateTime('tgl_ambil');
            $table->integer('jml_ambil');
            $table->string('nasabah_id_nasabah', 50)->nullable()->index('ambil_tabungan_nasabah_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ambil_tabungan');
    }
}
