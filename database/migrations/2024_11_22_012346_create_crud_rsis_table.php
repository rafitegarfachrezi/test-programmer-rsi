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
        Schema::create('crud_rsis', function (Blueprint $table) {
            $table->id(); // Big integer dan primary key otomatis
            $table->string('todo', 30); // Kolom string dengan panjang maksimal 30 karakter
            $table->date('tanggal'); // Kolom tanggal
            $table->time('jam'); // Kolom waktu
            $table->enum('status', ['belum', 'sedang', 'sudah']); // Kolom enum dengan nilai tetap
            $table->timestamps(); // Kolom created_at dan updated_at
        });

            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crud_rsis');
    }
};
