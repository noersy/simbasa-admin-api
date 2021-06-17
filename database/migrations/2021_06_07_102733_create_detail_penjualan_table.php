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

        Schema::create('jenis_sampah', function (Blueprint $table) {
            $table->id();
        });

        Schema::create('jual_sampah', function (Blueprint $table) {
            $table->id();
        });

        
        Schema::create('detail_penjualan', function (Blueprint $table) {
            $table->string('jml_jual', 50);
            $table->string('subtotal_jual', 50);
            $table->foreignId('jenis_sampah_id')->references('id')
                ->on('jenis_sampah')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreignId('jual_sampah_id')->references('id')
                ->on('jual_sampah')
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
        Schema::dropIfExists('detail_penjualan');
    }
}
