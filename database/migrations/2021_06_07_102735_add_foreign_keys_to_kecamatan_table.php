<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKecamatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kecamatan', function (Blueprint $table) {
            $table->foreign('kelurahan_id_kelurahan', 'kecamatan_kelurahan_fk')->references('id_kelurahan')->on('kelurahan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kecamatan', function (Blueprint $table) {
            $table->dropForeign('kecamatan_kelurahan_fk');
        });
    }
}
