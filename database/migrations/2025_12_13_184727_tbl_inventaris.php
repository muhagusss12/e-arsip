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
        //
        Schema::create('tbl_inventaris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_inventaris');
            $table->string('kode_inventaris')->unique();
            $table->string('harga');
            $table->date('tanggal');
            $table->string('ruangan');
            $table->enum('keterangan',['baik','kurang_baik','rusak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
         Schema::dropIfExists('tbl_inventaris');
    }
};
