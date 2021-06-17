<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbilTabunganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabah', function (Blueprint $table) {
            $table->id();
        });


        


        Schema::create('ambil_tabungan', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tgl_ambil');
            $table->integer('jml_ambil');
            $table->foreignId('nasabah_id')
                ->references('id')
                ->on('nasabah')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
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
        Schema::dropIfExists('ambil_tabungan');
    }
}
