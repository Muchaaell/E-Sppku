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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->foreignId('PetugasID')->constrained()->references('id_petugas')->on('petugas_tu');
            $table->string('nisn');
            $table->date('tgl_bayar');
            $table->decimal('jumlah_bayar', 10, 2);
            $table->string('tahun_dibayar');
            $table->foreignId('SppID')->constrained()->references('id_spp')->on('spp');
            $table->timestamps();
        });
    }
   
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
