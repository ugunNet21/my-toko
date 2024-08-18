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
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama Anggaran
            $table->string('amount', 255)->nullable(); // Jumlah Anggaran
            $table->string('period', 255)->nullable(); // Periode
            $table->string('actual_expense', 255)->nullable(); // Pengeluaran Aktual
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgets');
    }
};
