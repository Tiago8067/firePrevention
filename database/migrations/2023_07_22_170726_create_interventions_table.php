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
        Schema::create('interventions', function (Blueprint $table) {
            $table->id();
            /* $table->string('nome_comercial'); */
            $table->string('nome_cliente');
            $table->date('data_servico');
            $table->string('viatura_ou_loja');
            /* $table->string('tecnico'); */
            $table->text('observacao');
            $table->integer('nr_interno');
            $table->text('nr_serie');
            $table->float('capacidade_kg');
            /* $table->boolean('persao_permanente', 10, 3); */
            $table->boolean('persao_permanente');
            $table->string('nome_fabricante');
            $table->date('ano_fabrico');
            $table->boolean('marcacao_CE')->default(true);
            $table->text('localizacao');
            $table->date('data_ultimo_carregamento');
            $table->date('data_ultima_prova_hidraulica');
            $table->boolean('manutencao_MNT');
            $table->boolean('carregamento_MNT_AD');
            $table->string('tipo');
            // $table->float('peso_CO2_kg', 10, 3);
            $table->float('peso_CO2_kg');
            $table->boolean('prova_hidraulica');
            $table->boolean('selo_seguranca');
            $table->boolean('O_Ring');
            $table->boolean('cavilha');
            $table->boolean('manometro');
            $table->boolean('difusor');
            $table->boolean('base_plastica');
            $table->boolean('rotulo');
            $table->boolean('sparklets_CO2');
            $table->boolean('aprovado');
            $table->boolean('servico');
            $table->boolean('extintor_novo');
            $table->text('motivo_rejeitado');
            /**
             * Associar o Artigo do Programada de Faturação
             * Exportar para PDF
             * Enviar por Email
             * Faturado Sim ou Não
             */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interventions');
    }
};
