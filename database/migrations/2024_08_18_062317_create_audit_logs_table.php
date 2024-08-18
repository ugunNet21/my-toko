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
        Schema::create('audit_logs', function (Blueprint $table) {
            $table->id();
            $table->dateTime('activity_date'); // Tanggal dan Waktu
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // ID Pengguna
            $table->string('activity_type'); // Jenis Aktivitas
            $table->text('activity_description'); // Deskripsi Aktivitas
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit_logs');
    }
};
