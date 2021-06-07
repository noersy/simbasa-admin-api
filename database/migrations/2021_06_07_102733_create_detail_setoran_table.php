<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSetoranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_setoran', function (Blueprint $table) {
            $table->string('jml_setor', 50);
            $table->string('subtotal_setor', 50);
            $table->double('setor_sampah_id_setor')->index('detail_setoran_setor_sampah_fk');
            $table->double('jenis_sampah_id_sampah')->nullable()->index('detail_setoran_jenis_sampah_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_setoran');
    }
}
