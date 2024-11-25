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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('descricao');
            $table->integer('quantidade_ingressos')->comment('0 sem quantidade, n quantidade');
            $table->smallInteger('tipo_evento')->comment('1 presencial, 2 remoto, 3 ambos');
            $table->string('link_transmissao');

            $table->unsignedBigInteger('id_endereco');
            $table->foreign('id_endereco')
                ->references('id')
                ->on('enderecos')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
