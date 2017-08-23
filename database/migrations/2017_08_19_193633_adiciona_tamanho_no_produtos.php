<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaTamanhoNoProdutos extends Migration
{   
    public function up()
    {
        //adicionamos table pq a tabela já existe
        Schema::table('produtos', function($table){
            //adiciona campo tamanho do tipo string, no maximo 100 caracteres
            $table->string('tamanho', '100');
        });
    }
    
    public function down()
    {
        Schema::table('produtos', function($table){
            //desfazer a alteração e apagar a coluna tamanho
            $table->dropColumn('tamanho');
        });
    }
}
