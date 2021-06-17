<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisSampahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('kategori', function (Blueprint $table) {
            $table->id();
        });


        Schema::table('jenis_sampah', function (Blueprint $table) {
            $table->string('nm_sampah', 50);
            $table->string('satuan', 50);
            $table->integer('hrg_jual');
            $table->integer('hrg_beli');
            $table->double('stock');
            $table->foreignId('kategori_id')->references('id')->on('kategori')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::dropIfExists('jenis_sampah');
    }
}
