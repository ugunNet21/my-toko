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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->dateTime('transaction_date'); // Tanggal dan Waktu
            $table->foreignId('cashier_id')->constrained()->onDelete('cascade'); // ID Kasir
            $table->foreignId('customer_id')->nullable()->constrained()->onDelete('set null'); // ID Pelanggan (opsional)
            $table->string('total', 255)->nullable(); // Total Transaksi
            $table->string('payment_method')->nullable(); // Metode Pembayaran
            $table->string('discount', 255)->nullable(); // Diskon (jika ada)
            $table->string('tax', 255)->nullable(); // Pajak (jika ada)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
