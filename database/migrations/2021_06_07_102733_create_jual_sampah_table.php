<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJualSampahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengepul', function (Blueprint $table) {
            $table->id();
        });


        Schema::table('jual_sampah', function (Blueprint $table) {
            $table->dateTime('tgl_jual');
            $table->double('total_jual');
            $table->foreignId('pengepul_id_pengepul')->references('id')->on('pengepul')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::dropIfExists('jual_sampah');
    }
}
