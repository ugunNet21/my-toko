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
        Schema::create('financial_records', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable(); // Tanggal
            $table->string('transaction_type')->nullable(); // Jenis Transaksi (Pemasukan/Pengeluaran)
            $table->string('amount', 255)->nullable(); // Jumlah
            $table->text('description')->nullable(); // Keterangan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financial_records');
    }
};
