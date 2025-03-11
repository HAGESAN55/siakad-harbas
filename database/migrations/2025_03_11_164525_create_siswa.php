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
        Schema::create('siswa', function (Blueprint $table) {
            $table->string('nim')->primary();
            $table->string('nama', 40)->unique();
            $table->string('alamat')->nullable();
            $table->string('no_hp', 14)->nullable();
            $table->string('email')->unique();
            $table->date('tanggal_lahir')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('agama', 20)->nullable();
            $table->string('nama_ortu', 40)->nullable();
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
