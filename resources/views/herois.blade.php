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
    <nav class="navbar navbar-inverse navbar-fixed-top"> 
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Buscar Herói
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <form action="/busca" method="GET">
              @csrf
              <label for="nome">Nome:</label>
                <input id="nome" type="text" name="nome">
                <br>

              <label for="nome">Selecione seu Clã:</label>
              <select name="claID" id="claID">
                @foreach ($clas as $cla) 
                  <option value="{{$cla->id}}">{{$cla->nome}}</option>  
                @endforeach
              </select>
              
              <br>
              <label for="nome">Selecione seu Tipo:</label>
              <select name="tipoHeroiID" id="tipoHeroiID">
                @foreach ($tipos as $tipo) 
                  <option value="{{$tipo->id}}">{{$tipo->nome}}</option>  
                @endforeach
              </select>

              <br>
              <label for="especialidadeID">Selecione sua Especialidade:</label>
              @foreach ($especialidades as $especialidade) 
                <input type="checkbox" name="especialidadeID_{{$especialidade->id}}" id="especialidadeID_{{$especialidade->id}}" value="{{$especialidade->id}}">{{$especialidade->nome}}
              @endforeach
              <br>
              <button type="submit" class="btn btn-default">Buscar</button>
            </form>
          </div>
        </li>
      </ul>
    </nav>
    <div class="container">
      <h2>Heróis</h2>
      </p>            
      <a href="/addherois">Clique para adicionar um novo herói.</a>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Foto</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($herois as $heroi)
            <tr>
              <td><img style="max-width: 25px; max-height: 35px;" src="<?= asset('img/'.$heroi->thumb) ?>" /></td>
              <td>{{ $heroi->nome }}</td>
              <td>{{ $heroi->tipo }}</td>
              <td><button class="btn btn-danger" onclick="deleteHeroi({{$heroi->id}})">Deletar</button></td>
              <td><a href="{{action('HeroiController@edit',$heroi->id)}}" class="btn btn-info">Editar</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    </nav>
    <!-- MAIN CONTENT AND INJECTED VIEWS -->
    <div id="main">
        <div ng-view></div>
    </div>
 
    <script src="<?= asset('js/jquery.min.js') ?>"></script>
    <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
    
    <script type="text/javascript">
      function deleteHeroi(which){
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: 'herois/'+which,
          type: 'DELETE',
          success: function(result) {
              window.location.reload();
          },
          error: function(error){
            console.log(error);
          }
        });
      }
    </script>
  </body>
</html>