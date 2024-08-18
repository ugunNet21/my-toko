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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama Pemasok
            $table->string('address')->nullable(); // Alamat
            $table->string('phone')->nullable(); // Nomor Telepon
            $table->string('email')->nullable(); // Email
            $table->string('main_contact')->nullable(); // Kontak Utama
            $table->text('contract_details')->nullable(); // Detail Kontrak
            $table->string('contract_status')->nullable(); // Status Kontrak
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
