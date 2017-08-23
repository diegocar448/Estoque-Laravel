@extends('principal')

@section('conteudo')

@if (count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	 </div>
@endif

	


<div class="container">

	<form action="/produtos/adiciona" method="post"> 
		

		<!-- //precise ser o name _token para identificar -->
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />


		<div class="form-group">
			<label>Nome</label>
			<input name="nome" class="form-control" value="{{ old('nome') }}" />
		</div>
		<div class="form-group">
			<label>Valor</label>
			<input name="valor" class="form-control" value="{{ old('valor') }}"/>
		</div>
		<div class="form-group">
			<label>Quantidade</label>
			<input name="quantidade" class="form-control" value="{{ old('quantidade') }}"/>
		</div>
		<div class="form-group">
			<label>Tamanho</label>
			<input name="tamanho" class="form-control" value="{{ old('tamanho') }}"/>
		</div>
		<div class="form-group">
			<label>Categoria</label>
			<select name="categoria_id" class="form-control" id="">
				@foreach($categorias as $c)
				<option value="{{ $c->id }}">{{ $c->nome }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label>Descrição</label>
			<input name="descricao" class="form-control" value="{{ old('descricao') }}"/>
		</div>

		<button class="btn btn-primary" type="submit">Adicionar</button>
		<a href="/produtos/" class="btn btn-primary" type="submit">voltar</a>
	</form>

</div>


@stop
