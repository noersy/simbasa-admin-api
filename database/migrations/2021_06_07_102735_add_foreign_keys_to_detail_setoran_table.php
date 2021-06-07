<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailSetoranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_setoran', function (Blueprint $table) {
            $table->foreign('jenis_sampah_id_sampah', 'detail_setoran_jenis_sampah_fk')->references('id_sampah')->on('jenis_sampah')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('setor_sampah_id_setor', 'detail_setoran_setor_sampah_fk')->references('id_setor')->on('setor_sampah')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_setoran', function (Blueprint $table) {
            $table->dropForeign('detail_setoran_jenis_sampah_fk');
            $table->dropForeign('detail_setoran_setor_sampah_fk');
        });
    }
}
