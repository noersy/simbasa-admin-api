<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNasabahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabah', function (Blueprint $table) {
            $table->string('id_nasabah', 50)->primary();
            $table->string('nama_nasabah', 50);
            $table->longText('almt_nasabah');
            $table->double('no_hp');
            $table->string('jenis_kelamin', 50);
            $table->string('tmpt_lahir', 50);
            $table->string('tgl_lahir', 50);
            $table->string('status', 50);
            $table->string('agama', 50)->nullable();
            $table->string('pekerjaan', 50);
            $table->double('no_rekening');
            $table->integer('saldo');
            $table->string('password', 50);
            $table->double('kelurahan_id_kelurahan')->nullable()->index('nasabah_kelurahan_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nasabah');
    }
}
