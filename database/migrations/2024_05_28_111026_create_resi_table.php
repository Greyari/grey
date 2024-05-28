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
        Schema::create('resi', function (Blueprint $table) {
            $table->id('id_resi');
            $table->unsignedBigInteger('id_produk');
            $table->unsignedBigInteger('id_pembeli');
            $table->timestamp('waktu');
            $table->timestamps();

            $table->foreign('id_produk')->references('id_produk')->on('produk');
            $table->foreign('id_pembeli')->references('id_pembeli')->on('pembeli');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resi');
    }
};
