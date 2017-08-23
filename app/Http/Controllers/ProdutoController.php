<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use App\Produto;
use App\Http\Requests\ProdutoRequest;
use Auth;
use App\Categoria;

class ProdutoController extends Controller
{

	public function __construct()
	{
		$this->middleware('autorizador');
	}
	
	public function lista()
	{		
		//$produtos = DB::select('select * from produtos');

		if(Auth::guest())
		{
			return redirect('/login');
		}

		//Fazendo a listagem com a ORM(Eloquent)
		$produtos = Produto::all();
		return view('listagem')->with('produtos', $produtos);
	}

	public function mostra($id)
	{
		//$id = Request::route('id');

		//$produto = DB::select('select * from produtos where id = ?', [$id]);
		$produto = Produto::find($id);

		//return view('detalhes')->with('p', $produto[0]);
		//Agora vai retornar só um produto sem array
		return view('detalhes')->with('p', $produto);
	}
	

	public function remove($id)
	{
		//$id = Request::route('id');
		$produto = Produto::find($id);
		$produto->delete();

		//return redirect('/produtos');
		return redirect()->action('ProdutoController@lista');
	}

	public function novo()
	{
		//vai listar todas as categorias para gente
		return view('formulario')->with('categorias', Categoria::all());
	}

	public function adiciona(ProdutoRequest $request)
	{
		//pegar as informações do formulario
		//$params = Request::all();
		//$produto = new Produto($params);		
		
		//$nome = Request::input('nome');
		//$quantidade = Request::input('quantidade');
		//$valor = Request::input('valor');		
		//$descricao = Request::input('descricao');
		//$produto->nome = Request::input('nome');
		//$produto->quantidade = Request::input('quantidade');
		//$produto->valor = Request::input('valor');		
		//$produto->descricao = Request::input('descricao');

		//salvar no banco de dados
		//DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)', array($nome, $quantidade, $valor, $descricao));
		//$produto->save();

	

		//O validator ajuda a gente a fazer qualquer regra de validação
		/*$validator = Validator::make(
			//qual campo a validar+ qual valor quer validar
			['nome' => Request::input('nome')],
			//campo obrigatorio | no minino 3 caracteres
			['nome' => 'required|min:3']
		); */

		/*
		//validação com mensagens
		if ($validator->fails()) {
			$msg = $validator->messages();
			dd($msg);
			return redirect('/produtos/novo');
		}*/




		Produto::create($request->all());

		//com a função withInput() mantem os parametros da função anterior;
		return redirect('/produtos')->withInput();
	}


}