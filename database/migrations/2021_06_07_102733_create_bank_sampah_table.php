<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankSampahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_sampah', function (Blueprint $table) {
            $table->double('id_banksampah')->primary();
            $table->string('nm_banksampah', 50);
            $table->string('almt_banksampah', 50);
            $table->double('telp');
            $table->dateTime('tgl_berdiri');
            $table->string('jenis_sampah', 50);
            $table->string('nm_penggurus', 50);
            $table->double('jml_karyawan');
            $table->integer('jml_nasabah');
            $table->double('jml_simpanan');
            $table->string('email', 50);
            $table->string('username', 50);
            $table->string('password', 50);
            $table->double('kelurahan_id_kelurahan')->nullable()->index('bank_sampah_kelurahan_fk');
            $table->dateTime('createat');
            $table->dateTime('updateat')->nullable();
            $table->dateTime('deleteat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_sampah');
    }
}
