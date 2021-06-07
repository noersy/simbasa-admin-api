<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAmbilTabunganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ambil_tabungan', function (Blueprint $table) {
            $table->foreign('nasabah_id_nasabah', 'ambil_tabungan_nasabah_fk')->references('id_nasabah')->on('nasabah')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ambil_tabungan', function (Blueprint $table) {
            $table->dropForeign('ambil_tabungan_nasabah_fk');
        });
    }
}
