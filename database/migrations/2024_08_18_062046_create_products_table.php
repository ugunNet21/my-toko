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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama Produk
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // ID Kategori
            $table->string('sale_price', 255)->nullable(); // Harga Jual
            $table->string('purchase_price', 255)->nullable(); // Harga Beli (opsional)
            $table->integer('stock'); // Stok
            $table->text('description')->nullable(); // Deskripsi (opsional)
            $table->string('image')->nullable(); // Gambar (opsional)
            $table->string('promotion_price', 255)->nullable(); // Harga Promosi (opsional)
            $table->integer('stock_warning'); // Peringatan Stok
            $table->string('barcode')->nullable(); // Barcode
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
