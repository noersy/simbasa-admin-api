<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKelurahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kelurahan', function (Blueprint $table) {
            $table->foreign('kecamatan_id_kecamatan', 'kelurahan_kecamatan_fk')->references('id_kecamatan')->on('kecamatan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kelurahan', function (Blueprint $table) {
            $table->dropForeign('kelurahan_kecamatan_fk');
        });
    }
}
