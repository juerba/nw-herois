<!DOCTYPE html>
<html lang="en" ng-app="Herois">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Herois">
    <meta name="author" content="Mifty Yusuf">
 
    <title>Herois - NW</title>
 
    <!-- Bootstrap core CSS -->
    <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
     
    <!-- custom CSS for the page -->
    <link href="<?= asset('css/herois.css') ?>" rel="stylesheet">
 
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     
     
  </head>
 
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <h2>Striped Rows</h2>
      </p>            
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($herois as $heroi)
            <tr>
              <td>{{ $heroi['Nome'] }}</td>
              <td>Doe</td>
              <td>john@example.com</td>
              <td><button class="btn btn" onclick="deleteHeroi({{$heroi['id']}})">Deletar</button></td>
              <td><a href="{{action('HeroiController@edit',$heroi['id'])}}" class="btn btn-info">Editar</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <a href="/addherois">Clique para adicionar um novo herói.</a>
    </div>
    </nav>
    <!-- MAIN CONTENT AND INJECTED VIEWS -->
    <div id="main">
        <!-- this is where content will be injected -->
        <div ng-view></div>
    </div>
 
    <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
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