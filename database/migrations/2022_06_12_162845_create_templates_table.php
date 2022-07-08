<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('image')->nullable();
            $table->string('type');
            $table->bigInteger('harga');
            $table->boolean("col_website");
            $table->boolean("col_linkedin");
            $table->boolean("col_kota");
            $table->boolean("col_kodepos");
            $table->boolean("col_tanggal_lahir");
            $table->boolean("col_tempat_lahir");
            $table->boolean("col_sim");
            $table->boolean("col_jenis_kelamin");
            $table->boolean("col_kebangsaan");
            $table->boolean("col_status_pernikahan");
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
        Schema::dropIfExists('templates');
    }
};
