<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBankSampahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bank_sampah', function (Blueprint $table) {
            $table->foreign('kelurahan_id_kelurahan', 'bank_sampah_kelurahan_fk')->references('id_kelurahan')->on('kelurahan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bank_sampah', function (Blueprint $table) {
            $table->dropForeign('bank_sampah_kelurahan_fk');
        });
    }
}
