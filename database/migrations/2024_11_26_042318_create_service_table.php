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
        Schema::create('service', function (Blueprint $table) {
            $table->id(); // ID (primary key)
            $table->string('nama_service'); // nama_service (string)
            $table->string('sub_nama_service'); // sub_nama_service (string)
            $table->text('deskripsi'); // deskripsi (text)
            $table->decimal('harga', 15, 2); // harga (decimal, 10 digit total, 2 digit setelah koma)
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};