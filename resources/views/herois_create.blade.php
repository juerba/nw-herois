<form action="/herois" method="POST">
	@csrf
	<label for="nome">Nome:</label>
  	<input id="nome" type="text" name="nome">
  	<br>

	<label for="nome">Selecione seu Clã:</label>
	<select name="claID" id="claID">
		@foreach ($params['clas'] as $cla) 
			<option value="{{$cla->id}}">{{$cla->nome}}</option>	
		@endforeach
	</select>
	
	<br>
	<label for="nome">Selecione seu Tipo:</label>
	<select name="tipoHeroiID" id="tipoHeroiID">
		@foreach ($params['tipo'] as $tipo) 
			<option value="{{$tipo->id}}">{{$tipo->nome}}</option>	
		@endforeach
	</select>

	<br>
	<label for="especialidadeID">Selecione sua Especialidade:</label>
	@foreach ($params['especialidade'] as $especialidade) 
		<input type="checkbox" name="especialidadeID_{{$especialidade->id}}" id="especialidadeID_{{$especialidade->id}}" value="{{$especialidade->id}}">{{$especialidade->nome}}
	@endforeach
	<br>
	<label for="thumb">Selecione sua Foto:</label>
	<input type="file" name="thumb" id="thumb" />
	<br>
	<label for="vida">Vida:</label>
	<input type="number" id="vida" name="vida"/>
	<br>
	<label for="defesa">Defesa:</label>
	<input type="number" id="defesa" name="defesa"/>
	<br>
	<label for="dano">Dano:</label>
	<input type="number" id="dano" name="dano"/>
	<br>
	<label for="velocidadeAtaque">Velicdade Ataque:</label>
	<input type="number" id="velocidadeAtaque" name="velocidadeAtaque"/>
	<br>
	<label for="velocidadeMovimento">Velicdade Movimento:</label>
	<input type="number" id="velocidadeMovimento" name="velocidadeMovimento" step=".5"/>
	<br>
	<button class="btn btn" type="submit">Salvar</button>
	<button class="btn btn" type="reset">Cancelar</button>
</form>