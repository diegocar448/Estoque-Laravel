<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Controle de estoque</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

</head>
<body>

<!-- Image and text -->
<nav class="navbar navbar-light fixed-top" style="background-color: rgba(77,88,193,1);">
  <span class="navbar-brand">
    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgaGVpZ2h0PSIyNTZweCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ieE1pbllNaW4gbWVldCIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAgMjU2IDI1NiIgd2lkdGg9IjI1NnB4IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZyBmaWxsPSIjRjM1MDQ1Ij48cGF0aCBkPSJNMTYwLjQ0NDY2NywyMDggQzE2Mi40NDQ2NjcsMjEwLjg4ODY2NyAxNjMuNjY2NjY3LDIxMC42NjY2NjcgMTY1LjIyMiwyMTAgQzE2Ni43NzczMzMsMjA5LjMzMzMzMyAyNDYuNzc4LDE4Mi4zMzMzMzMgMjQ5LjIyMiwxODEuNDQ0NjY3IEMyNTEuNjY2LDE4MC41NTYgMjUwLjg4ODY2NywxNzkuNzc4IDI1MC4xMTEzMzMsMTc4LjU1NTMzMyBDMjQ5LjMzNCwxNzcuMzMyNjY3IDIyMi42NjY2NjcsMTQxLjExMTMzMyAyMjEuMzMzMzMzLDEzOSBDMjIwLDEzNi44ODg2NjcgMjE5LjMzMzMzMywxMzcuMzMzMzMzIDIxNy4yMjIsMTM4IEwxMzIuNDE2NjY3LDE2MC4wNjY2NjcgQzEzMi40MTY2NjcsMTYwLjA2NjY2NyAxNTguNDQ0NjY3LDIwNS4xMTEzMzMgMTYwLjQ0NDY2NywyMDggTDE2MC40NDQ2NjcsMjA4IFoiLz48cGF0aCBkPSJNMjU2LDE3MS4xMTUzMzMgTDI1NiwxMjguNzE2NjY3IEMyNDYuNDU4NjY3LDEzMS4yNTkzMzMgMjM0LjM5MTMzMywxMzQuNDcyNjY3IDIyOS42MjczMzMsMTM1Ljc0IEMyMzYuODE0LDE0NS4zNTYgMjQ4LjA1LDE2MC40MDQ2NjcgMjU2LDE3MS4xMTUzMzMgTDI1NiwxNzEuMTE1MzMzIFoiLz48cGF0aCBkPSJNMjI5LjU0NTMzMyw4My41MjEzMzMzIEMyMjguMjM4LDgzLjgxOCAxOTkuMjk4LDg5LjA0OCAxOTcuNTE1MzMzLDg5LjI4NTMzMzMgQzE5NS43MzI2NjcsODkuNTIyNjY2NyAxOTYuMzI2NjY3LDkwLjUzMzMzMzMgMTk3LjA0LDkxLjU0MzMzMzMgTDIyMi41MDczMzMsMTI2LjQ4NiBDMjIyLjUwNzMzMywxMjYuNDg2IDI1My42NDYsMTE4Ljc2MDY2NyAyNTUuNTQ4LDExOC4zNDQ2NjcgQzI1NS43MDIsMTE4LjMxMDY2NyAyNTUuODUyNjY3LDExOC4yNzQ2NjcgMjU2LDExOC4yMzggTDI1NiwxMTMuNjExMzMzIEMyNTAuMzQsMTA2LjQzNCAyMzQuOTE5MzMzLDg2Ljg5MzMzMzMgMjMzLjU4NjY2Nyw4NS4wNjczMzMzIEMyMzEuOTgyNjY3LDgyLjg2OCAyMzAuODUyNjY3LDgzLjIyNDY2NjcgMjI5LjU0NTMzMyw4My41MjEzMzMzIEwyMjkuNTQ1MzMzLDgzLjUyMTMzMzMgWiIvPjxwYXRoIGQ9Ik00Ny40NTYsMjguNjM0IEM1My43MjI2NjY3LDI4LjM0OTMzMzMgNTQuMjk0NjY2NywyOS43NzUzMzMzIDU3LjA0OCwzMy44NTggTDEyNi4yMTg2NjcsMTQ5LjUgTDIxMy4xOTIsMTI4LjY2NDY2NyBDMjA4LjM3MzMzMywxMjEuODM0IDE4Ni40OTY2NjcsOTAuODE4NjY2NyAxODQuMzgyNjY3LDg3Ljg1OTMzMzMgQzE4Mi4wMDYsODQuNTMxMzMzMyAxODQuNDQyLDgyLjk4NiAxODguMzA0NjY3LDgyLjMzMjY2NjcgQzE5Mi4xNjczMzMsODEuNjc5MzMzMyAyMjUuNDQ0NjY3LDc2LjA5MzMzMzMgMjI4LjI5NzMzMyw3NS42NzczMzMzIEMyMzEuMTUsNzUuMjYxMzMzMyAyMzMuNDA4NjY3LDc0LjI1MTMzMzMgMjM4LjA0MzMzMyw3OS44MzczMzMzIEMyNDAuNDE0NjY3LDgyLjY5NTMzMzMgMjQ4LjQ1NTMzMyw5Mi43MDczMzMzIDI1NiwxMDIuMDkyIEwyNTYsNDggQzI1NiwzNC43NzggMjUxLjMwNTMzMywyMy40NzIgMjQxLjkxNjY2NywxNC4wODMzMzMzIEMyMzIuNTI4LDQuNjk0NjY2NjcgMjIxLjIyMiwwIDIwOCwwIEw0OCwwIEMzNC43NzgsMCAyMy40NzIsNC42OTQ2NjY2NyAxNC4wODMzMzMzLDE0LjA4MzMzMzMgQzguNjk4LDE5LjQ2ODY2NjcgNC44NjUzMzMzMywyNS40ODczMzMzIDIuNTY4NjY2NjcsMzIuMTM0IEMxOC4yNDY2NjY3LDMwLjg0NiA0My4wNywyOC44MzMzMzMzIDQ3LjQ1NiwyOC42MzQgTDQ3LjQ1NiwyOC42MzQgWiIvPjxwYXRoIGQ9Ik0xNjguMjg4NjY3LDIyMy41NjQgQzE2MC45NTQ2NjcsMjI1Ljc4NiAxNTcuNjY2LDIyNi44ODg2NjcgMTUyLjg4ODY2NywyMjAuMjIyIEMxNDkuMzEwNjY3LDIxNS4yMjg2NjcgMTI5Ljk2MiwxODAuMzc4NjY3IDEyMC40NzQ2NjcsMTYzLjE5ODY2NyBDMTAyLjUyLDE2Ny45MDEzMzMgNjkuNjYwNjY2NywxNzYuNDc3MzMzIDYwLjE4NTMzMzMsMTc4Ljc1NCBDNTAuOTM2NjY2NywxODAuOTc2IDQ2Ljk4NzMzMzMsMTc1LjQzMTMzMyA0NS40NjgsMTcyLjAxMzMzMyBDNDQuNDAyNjY2NywxNjkuNjE2NjY3IDE3LjI4OTMzMzMsMTExLjE1OTMzMyAwLDczLjY1MDY2NjcgTDAsMjA4IEMwLDIyMS4yMjI2NjcgNC42OTQ2NjY2NywyMzIuNTI3MzMzIDE0LjA4MzMzMzMsMjQxLjkxNjY2NyBDMjMuNDcyLDI1MS4zMDUzMzMgMzQuNzc4LDI1NiA0OCwyNTYgTDIwOCwyNTYgQzIyMS4yMjIsMjU2IDIzMi41MjgsMjUxLjMwNTMzMyAyNDEuOTE2NjY3LDI0MS45MTY2NjcgQzI1MS4zMDUzMzMsMjMyLjUyNzMzMyAyNTYsMjIxLjIyMjY2NyAyNTYsMjA4IEwyNTYsMTkyLjIxODY2NyBDMjM2LjM1OTMzMywxOTkuNDAyNjY3IDE3My4yMywyMjIuMDY2NjY3IDE2OC4yODg2NjcsMjIzLjU2NCBMMTY4LjI4ODY2NywyMjMuNTY0IFoiLz48cGF0aCBkPSJNNjAuNDEyLDE2NS4yODggQzYzLjAxMTMzMzMsMTY0LjY5MzMzMyAxMTEuNzI0NjY3LDE1My4wMzQ2NjcgMTEyLjc2NDY2NywxNTIuODEyIEMxMTMuODA0NjY3LDE1Mi41ODkzMzMgMTE0LjQ3MjY2NywxNTEuOTk0NjY3IDExMy4zNTg2NjcsMTUwLjA2NDY2NyBDMTEyLjI0NDY2NywxNDguMTM0NjY3IDQ4LjQyNTMzMzMsMzcuOTc1MzMzMyA0OC40MjUzMzMzLDM3Ljk3NTMzMzMgQzQ3LjgzNiwzNi45NjQgNDguMDA0LDM2LjYyNzMzMzMgNDYuNDAzMzMzMywzNi43MTEzMzMzIEM0NC45NzYsMzYuNzg2NjY2NyA4Ljg2NTMzMzMzLDQwLjAwODY2NjcgMC41MDQ2NjY2NjcsNDAuNzA3MzMzMyBDMC4yNTgsNDIuNDQ2IDAuMTA5MzMzMzMzLDQ0LjIyNDY2NjcgMC4wNDQsNDYuMDM4IEM4LjUzMTMzMzMzLDYzLjQxMjY2NjcgNTcuMjQyNjY2NywxNjMuODc0NjY3IDU3LjUxNiwxNjQuNjkzMzMzIEM1Ny44MTMzMzMzLDE2NS41ODQ2NjcgNTcuODEyNjY2NywxNjUuODgyIDYwLjQxMiwxNjUuMjg4IEw2MC40MTIsMTY1LjI4OCBaIi8+PC9nPjwvc3ZnPg==" width="35" height="35" class="d-inline-block align-top" alt="">
    CRUD - Laravel
  </span>
  <span class="navbar-text">
      <a href="/auth/register" class="btn btn-outline-danger" style="color:white; border:1px solid white;">Criar Usuario</a> 
   </span>
</nav>

<div class="container" style="margin-top: 56em;">
	<div class="row">

@if (count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	 </div>
@endif


<div style="position: absolute; height: 100px; top: 35%; width: 100%; left: 0;">
    <div style="position: relative; height: 100px; top: -58px;">
		<div class="container">	   
			<form action="/login" method="post"> 			
				<!-- //precise ser o name _token para identificar -->
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />


				<div class="form-group">
					<label>Email</label>
					<input name="email" class="form-control" value="{{ old('email') }}" />
				</div>
				<div class="form-group">
					<label>Senha</label>
					<input type="password" name="password" class="form-control" value="{{ old('password') }}"/>
				</div>
								
				<button class="btn btn-outline-primary btn-lg btn-block" type="submit">Login</button>
			</form>
		</div>
	</div>
</div>
		
</span>
  <span class="navbar-text">
      
   </span>
</nav>

<div class="container" style="margin-top: 56em;">
	<div class="row">

	@yield('conteudo')

	</div>
</div>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
