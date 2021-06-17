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

        Schema::create('kecamatan', function (Blueprint $table) {
            $table->id();
        });

        Schema::create('kelurahan', function (Blueprint $table) {
            $table->id();
        });

        Schema::create('bank_sampah', function (Blueprint $table) {
            $table->id();
            $table->string('nm_banksampah', 50);
            $table->string('almt_banksampah', 50);
            $table->string('telp');
            $table->dateTime('tgl_berdiri');
            $table->string('jenis_sampah', 50);
            $table->string('nm_penggurus', 50);
            $table->double('jml_karyawan');
            $table->integer('jml_nasabah');
            $table->double('jml_simpanan');
            $table->string('email', 50);
            $table->string('username', 50);
            $table->string('password', 50);
            $table->foreignId('kelurahan_id')
                ->references('id')
                ->on('kelurahan')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->timestamps();
            $table->softDeletes();
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
