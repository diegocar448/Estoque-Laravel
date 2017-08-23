@extends('principal')


@section('conteudo')
<div class="container">
	<h1>Detalhes do produtos {{ $p->nome }}</h1>
	
	<ul>
		<li>
			Valor:  {{ $p->valor }}
		</li>
		<li>
			Descrição: {{ $p->descricao or 'não têm descrição'}}
		</li>
		<li>
			Quantidade em estoque: {{ $p->quantidade }}
		</li>
	</ul>
	
	<a class="btn btn-outline-primary" href="/produtos">Voltar a listagem</a>
	
</div>

@stop
