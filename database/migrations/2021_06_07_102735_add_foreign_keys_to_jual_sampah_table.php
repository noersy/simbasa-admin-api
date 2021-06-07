<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToJualSampahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jual_sampah', function (Blueprint $table) {
            $table->foreign('pengepul_id_pengepul', 'jual_sampah_pengepul_fk')->references('id_pengepul')->on('pengepul')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jual_sampah', function (Blueprint $table) {
            $table->dropForeign('jual_sampah_pengepul_fk');
        });
    }
}
