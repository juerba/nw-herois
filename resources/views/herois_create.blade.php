<!DOCTYPE html>
<html lang="en" ng-app="Herois">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <meta name="herois" content="Herois">
    <meta name="cla" content="Jully">
     <title>Herois - NW</title>
 
    <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
     
    <link href="<?= asset('css/herois.css') ?>" rel="stylesheet">
     
  </head>
  <body>
	<form class="form-group formedit" action="/herois" method="POST" enctype="multipart/form-data" onSubmit="return validateCheckBox(this);">
		@csrf
		<label for="nome">Nome:</label>
	  	<input class="form-control" id="nome" type="text" name="nome" required="true">
	  	<br>

		<label for="nome">Selecione seu Clã:</label>
		<select class="form-control" name="claID" id="claID" required="true">
			@foreach ($params['clas'] as $cla) 
				<option value="{{$cla->id}}">{{$cla->nome}}</option>	
			@endforeach
		</select class="form-control">
		
		<br>
		<label for="nome">Selecione seu Tipo:</label>
		<select class="form-control" name="tipoHeroiID" id="tipoHeroiID" required="true">
			@foreach ($params['tipo'] as $tipo) 
				<option value="{{$tipo->id}}">{{$tipo->nome}}</option>	
			@endforeach
		</select class="form-control">

		<br>
		<label for="especialidadeID">Selecione sua Especialidade:</label>
		@foreach ($params['especialidade'] as $especialidade) 
			<input class="form-control" type="checkbox" name="especialidadeID_{{$especialidade->id}}" id="especialidadeID_{{$especialidade->id}}" value="{{$especialidade->id}}">{{$especialidade->nome}}
		@endforeach
		<br>
		<label for="thumb">Selecione sua Foto:</label>
		<input class="form-control" type="file" name="thumb" id="thumb" required="true"/>
		<br>
		<label for="vida">Vida:</label>
		<input class="form-control" type="number" id="vida" name="vida" required="true"/>
		<br>
		<label for="defesa">Defesa:</label>
		<input class="form-control" type="number" id="defesa" name="defesa" required="true"/>
		<br>
		<label for="dano">Dano:</label>
		<input class="form-control" type="number" id="dano" name="dano" required="true"/>
		<br>
		<label for="velocidadeAtaque">Velicdade Ataque:</label>
		<input class="form-control" type="number" id="velocidadeAtaque" name="velocidadeAtaque" required="true"/>
		<br>
		<label for="velocidadeMovimento">Velicdade Movimento:</label>
		<input class="form-control" type="number" id="velocidadeMovimento" name="velocidadeMovimento" required="true"/>
		<br>
		<button class="btn btn" type="submit">Salvar</button>
		<button class="btn btn" type="reset">Cancelar</button>
	</form>
	</body>

	<script src="<?= asset('js/validateform.js') ?>" type="text/javascript"></script>
</html>