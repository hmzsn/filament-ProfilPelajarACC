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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('nokp');
            $table->string('alamat1');
            $table->string('alamat2');
            $table->foreignId('state_id')->constrained();
            $table->foreignId('city_id')->constrained();
            $table->string('poskod');
            $table->dateTime('tarikhlahir', $precision = 0);
            $table->integer('umur');
            $table->string('jantina');
            $table->integer('tinggi');
            $table->integer('berat');
            $table->string('alahan');
            $table->string('sekolah');
            $table->binary('gambar');
            $table->string('namabapa');
            $table->string('pekerjaanbapa');
            $table->string('notelbapa');
            $table->string('emailbapa');
            $table->string('namaibu');
            $table->string('pekerjaanibu');
            $table->string('notelibu');
            $table->string('emailibu');
            $table->date('tarikhpendaftaran', $precision = 0);
            $table->boolean('status');
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
        Schema::dropIfExists('students');
    }
};
