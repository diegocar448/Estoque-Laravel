<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaRelacionamentoProdutoCategoria extends Migration
{
    
    public function up()
    {
        Schema::table('produtos', function(Blueprint $table)
        {
            //chave estrangeira         //criar com valor 1 por padrão
            $table->integer('categoria_id')->default(1);                        
        });
    }

    
    public function down()
    {
        Schema::table('produtos', function(Blueprint $table)
        {
            //chave estrangeira            
            $table->dropColumn('categoria_id');                        
        });
    }
}
