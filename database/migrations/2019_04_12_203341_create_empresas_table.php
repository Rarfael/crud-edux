<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CNPJ', 14)->unique();
            $table->string('razao_social');
            $table->string('nome_fantasia');
            $table->integer('CEP');
            $table->integer('logradouro');
            $table->text('numero');
            $table->text('telefone', 11);
            $table->string('email');
            $table->text('complemento')->nullable();
            $table->text('bairro');
            $table->text('cidade');
            $table->string('estado', 2);
            $table->string('segmento');
            $table->text('inscricao_municipal');
            $table->text('incricao_estadual')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
