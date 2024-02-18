<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('angkatan', 8);
            $table->string('jalur', 20);
            $table->string('beasiswa', 128)->nullable();
            $table->string('prodi', 128);
            $table->string('kelas', 128);
            $table->string('nisn', 20);
            $table->string('nik', 20);
            $table->string('nama', 128);
            $table->string('tptLahir', 128);
            $table->string('tglLahir', 8);
            $table->string('blnLahir', 20);
            $table->string('thnLahir', 8);
            $table->string('jk', 8);
            $table->string('anak', 8)->nullable();
            $table->string('saudara', 8)->nullable();
            $table->string('berat', 8)->nullable();
            $table->string('tinggi', 8)->nullable();
            $table->string('jas', 8);
            $table->string('jalan', 128)->nullable();
            $table->string('rt', 8);
            $table->string('rw', 8);
            $table->string('desa', 128);
            $table->string('kecamatan', 128);
            $table->string('kabupaten', 128);
            $table->string('provinsi', 128);
            $table->string('kodepos', 8);
            $table->string('nohp', 20);
            $table->string('email', 128);
            $table->string('sekolah', 128);
            $table->string('skhun', 128)->nullable();
            $table->string('lulus', 8);
            $table->string('kk', 20);
            $table->string('nikAyah', 20);
            $table->string('namaAyah', 128);
            $table->string('pekerjaanA', 128);
            $table->string('pendidikanA', 128);
            $table->string('nikIbu', 20);
            $table->string('namaIbu', 128);
            $table->string('pekerjaanI', 128);
            $table->string('pendidikanI', 128);
            $table->string('penghasilan', 128);
            $table->string('lomba', 128)->nullable();
            $table->string('tingkat', 128)->nullable();
            $table->string('peringkat', 128)->nullable();
            $table->string('tahun', 8)->nullable();
            $table->string('organisasi', 128);
            $table->string('keadaan', 128);
            $table->string('sumber', 128)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
