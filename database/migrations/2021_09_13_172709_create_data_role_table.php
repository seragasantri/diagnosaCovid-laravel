<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_role', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('kode_gejala1')->nullable();
            $table->string('kode_gejala2')->nullable();
            $table->string('kode_gejala3')->nullable();
            $table->string('kode_gejala4')->nullable();
            $table->string('kode_gejala5')->nullable();
            $table->string('kode_gejala6')->nullable();
            $table->string('kode_gejala7')->nullable();
            $table->string('kode_gejala8')->nullable();
            $table->string('kode_gejala9')->nullable();
            $table->string('kode_gejala10')->nullable();
            $table->string('kode_diagnosis');
            $table->string('tanggal');
            $table->string('hasil')->nullable();
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
        Schema::dropIfExists('data_role');
    }
}
