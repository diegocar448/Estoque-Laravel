<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	//Caso nome da tabela fosse diferente da classe, $table+nomedatabela
	protected $table = 'produtos';

	//Para evitar os erros do campo data criação e atualização 
    public $timestamps = false;

    //para evitar o erro do massAssignmentException all() do controller
    //o fillable ignora token ou senha e só pega os campos no array
    protected $fillable = 
    	array('nome', 'descricao', 'quantidade', 'valor', 'tamanho', 'categoria_id');


    public function categoria()
    {
    	//mostrar que ele pertence a um categoria
    	return $this->belongsTo('App\Categoria');
    }

}
