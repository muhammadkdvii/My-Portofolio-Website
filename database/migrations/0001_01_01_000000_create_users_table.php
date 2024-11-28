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
        // Tabel users
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // ID (primary key)
            $table->string('username')->unique(); // username (unik)
            $table->string('password'); // password (string)
            $table->rememberToken(); // remember_token untuk autentikasi
            $table->timestamps(); // created_at dan updated_at
        });

        // Tabel password_reset_tokens (tanpa email, hanya token)
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('token')->primary(); // token sebagai primary key
            $table->string('username'); // username (untuk mengidentifikasi pengguna)
            $table->timestamp('created_at')->nullable(); // created_at (nullable)
        });

        // Tabel sessions (tanpa email, hanya user_id)
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // session ID (primary key)
            $table->foreignId('user_id')->nullable()->index(); // user_id (foreign key ke users)
            $table->string('ip_address', 45)->nullable(); // ip_address (maksimal 45 karakter untuk IPv6)
            $table->text('user_agent')->nullable(); // user_agent (browser info)
            $table->longText('payload'); // payload (data session)
            $table->integer('last_activity')->index(); // last_activity (index untuk kecepatan pencarian)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};