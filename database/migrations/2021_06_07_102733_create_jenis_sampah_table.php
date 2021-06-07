<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisSampahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_sampah', function (Blueprint $table) {
            $table->double('id_sampah')->primary();
            $table->string('nm_sampah', 50);
            $table->string('satuan', 50);
            $table->integer('hrg_jual');
            $table->integer('hrg_beli');
            $table->double('stock');
            $table->string('kategori_id_kategori', 50)->nullable()->index('jenis_sampah_kategori_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenis_sampah');
    }
}
