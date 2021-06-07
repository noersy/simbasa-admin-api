<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSetorSampahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('setor_sampah', function (Blueprint $table) {
            $table->foreign('nasabah_id_nasabah', 'setor_sampah_nasabah_fk')->references('id_nasabah')->on('nasabah')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('setor_sampah', function (Blueprint $table) {
            $table->dropForeign('setor_sampah_nasabah_fk');
        });
    }
}
