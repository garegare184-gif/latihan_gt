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
    Schema::create('iurans', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id'); // warga yang harus bayar
        $table->integer('nominal'); // jumlah iuran
        $table->unsignedBigInteger('petugas_id'); // admin yang input
        $table->timestamps();

        // relasi
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('petugas_id')->references('id')->on('users')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iurans');
    }
};
