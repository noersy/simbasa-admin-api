<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailPenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_penjualan', function (Blueprint $table) {
            $table->foreign('jenis_sampah_id_sampah', 'detail_penjualan_jenis_sampah_fk')->references('id_sampah')->on('jenis_sampah')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('jual_sampah_id_jual', 'detail_penjualan_jual_sampah_fk')->references('id_jual')->on('jual_sampah')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_penjualan', function (Blueprint $table) {
            $table->dropForeign('detail_penjualan_jenis_sampah_fk');
            $table->dropForeign('detail_penjualan_jual_sampah_fk');
        });
    }
}
