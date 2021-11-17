<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapelSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapel_siswas', function (Blueprint $table) {
            $table->id();

            
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('mapel_id');

            $table->foreign('siswa_id')->references('id')->on('siswas');
            $table->foreign('mapel_id')->references('id')->on('mapels');
            
            $table->integer('nilai');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mapel_siswas');
    }
}
