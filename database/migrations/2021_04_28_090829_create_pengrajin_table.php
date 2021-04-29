<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengrajinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengrajin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_pengrajin');
            $table->string('nama');
            $table->string('alamat',100);
            $table->string('kontak');
            $table->string('kerajinan',100);
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('pengrajin');
    }
}
