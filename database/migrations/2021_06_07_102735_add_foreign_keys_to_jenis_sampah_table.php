<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToJenisSampahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jenis_sampah', function (Blueprint $table) {
            $table->foreign('kategori_id_kategori', 'jenis_sampah_kategori_fk')->references('id_kategori')->on('kategori')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jenis_sampah', function (Blueprint $table) {
            $table->dropForeign('jenis_sampah_kategori_fk');
        });
    }
}
