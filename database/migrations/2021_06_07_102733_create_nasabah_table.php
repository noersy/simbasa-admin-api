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
        Schema::table('nasabah', function (Blueprint $table) {
            $table->string('nama_nasabah', 50);
            $table->string('username', 50) -> unique();
            $table->longText('almt_nasabah');
            $table->string('no_hp');
            $table->tinyInteger('jenis_kelamin')->nullable();
            $table->string('tmpt_lahir', 50)->nullable();
            $table->string('tgl_lahir', 50)->nullable();
            $table->string('status', 50)->nullable();
            $table->string('agama', 50)->nullable();
            $table->string('pekerjaan');
            $table->double('no_rekening');
            $table->integer('saldo');
            $table->string('password', 200);
            $table->foreignId('kelurahan_id')->references('id')->on('kelurahan')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::dropIfExists('nasabah');
    }
}
