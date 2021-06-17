<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSetoranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('setor_sampah', function (Blueprint $table) {
            $table->id();
        });

        Schema::create('detail_setoran', function (Blueprint $table) {
            $table->string('jml_setor', 50);
            $table->string('subtotal_setor', 50);
            $table->foreignId('setor_sampah_id')->references('id')
                ->on('jenis_sampah')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreignId('jenis_sampah_id')->references('id')
                ->on('setor_sampah')
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
        Schema::dropIfExists('detail_setoran');
    }
}
