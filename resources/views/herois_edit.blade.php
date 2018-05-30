<form action="/herois/{{$heroi['id']}}" method="POST" enctype="multipart/form-data">

	@csrf
	{{ method_field('PUT')}}
	<label for="nome">Nome:</label>
  	<input id="nome" type="text" name="nome" value="{{$heroi['Nome']}}">
  	<br>

	<label for="nome">Selecione seu Clã:</label>
	<select name="claID" id="claID">
		@foreach ($params['clas'] as $cla) 
			<option value="{{$cla->id}}" {{$cla->id == $heroi['ClaID'] ? 'selected' : ''}}>{{$cla->nome}}</option>	
		@endforeach
	</select>
	
	<br>
	<label for="nome">Selecione seu Tipo:</label>
	<select name="tipoHeroiID" id="tipoHeroiID">
		@foreach ($params['tipo'] as $tipo) 
			<option value="{{$tipo->id}}" {{$tipo->id == $heroi['TipoHeroiID'] ? 'selected' : ''}}>{{$tipo->nome}}</option>	
		@endforeach
	</select>

	<br>
	<label for="nome">Selecione sua Especialidade:</label>
	@foreach ($params['especialidade'] as $especialidade) 
		<input type="checkbox" name="especialidadeID_{{$especialidade->id}}" id="especialidadeID_{{$especialidade->id}}" value="{{$especialidade->id}}" {{ in_array($especialidade->id,$params['heroiEspecialidades']) ? 'checked' : ''}}>{{$especialidade->nome}}
	@endforeach

	<br>
	<label for="thumb">Selecione sua Foto:</label>
	<input type="file" name="thumb" id="thumb" value="{{$heroi['thumb']}}"/>
	<br>
	<label for="nome">Vida:</label>
	<input type="number" id="vida" name="vida" value="{{$heroi['Vida']}}"/>
	<br>
	<label for="nome">Defesa:</label>
	<input type="number" id="defesa" name="defesa" value="{{$heroi['Defesa']}}"/>
	<br>
	<label for="nome">Dano:</label>
	<input type="number" id="dano" name="dano" value="{{$heroi['Dano']}}"/>
	<br>
	<label for="nome">Velicdade Ataque:</label>
	<input type="number" id="velocidadeAtaque" name="velocidadeAtaque" value="{{$heroi['VelocidadeAtaque']}}"/>
	<br>
	<label for="nome">Velicdade Movimento:</label>
	<input type="number" id="velocidadeMovimento" name="velocidadeMovimento" value="{{$heroi['VelocidadeMovimento']}}"/>
	<br>
	<button class="btn btn" type="submit">Salvar</button>
	<button class="btn btn" type="reset">Cancelar</button>
</form>