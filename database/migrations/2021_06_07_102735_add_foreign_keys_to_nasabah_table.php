<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToNasabahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nasabah', function (Blueprint $table) {
            $table->foreign('kelurahan_id_kelurahan', 'nasabah_kelurahan_fk')->references('id_kelurahan')->on('kelurahan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nasabah', function (Blueprint $table) {
            $table->dropForeign('nasabah_kelurahan_fk');
        });
    }
}
