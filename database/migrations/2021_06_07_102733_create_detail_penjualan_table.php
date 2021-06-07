<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_penjualan', function (Blueprint $table) {
            $table->string('jml_jual', 50);
            $table->string('subtotal_jual', 50);
            $table->double('jenis_sampah_id_sampah')->index('detail_penjualan_jenis_sampah_fk');
            $table->double('jual_sampah_id_jual')->nullable()->index('detail_penjualan_jual_sampah_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_penjualan');
    }
}
