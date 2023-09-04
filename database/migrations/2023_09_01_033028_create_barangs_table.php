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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id('id_barang');
            $table->foreignId('id_userlevel')->constrained('userlevels')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_kategori')->constrained('kategoris')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_barang',100);
            $table->integer('stok');
            $table->text('deskripsi')->nullable();
            $table->integer('harga')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
