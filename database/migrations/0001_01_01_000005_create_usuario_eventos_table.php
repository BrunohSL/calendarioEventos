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
        Schema::create('usuario_eventos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_evento');
            $table->foreign('id_evento')
                ->references('id')
                ->on('eventos')
                ->onDelete('cascade');

            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamp('data_inscricao');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_eventos');
    }
};
