<!DOCTYPE HTML>
<HTML>
<head>
	<meta charset="UTF-8"> 
	{{ HTML::style('css/foundation.css') }}
 	{{ HTML::style('css/normalize.css')}} 

	<script src="{{ URL::asset('js/jquery-1.8.2.min.js') }}"></script>
	<script src="{{ URL::asset('js/vendor/modernizr.js') }}"></script>	
	<script src="{{ URL::asset('js/foundation.min.js') }}"></script>
  	<script src="{{ URL::asset('js/jquery.blockUI.js') }}"></script>
  	<script src="{{ URL::asset('js/utils.js') }}"></script>
  	<script src="{{ URL::asset('js/sesion.js') }}"></script>
  	<script src="{{ URL::asset('js/main.js') }}"></script>
  	
</head>
<body>

<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">LaSeleccion</a></h1>
    </li>
  </ul>
</nav>


<div style="padding-top: 40px;">

  <div class="row">
  <div class="large-2 columns">.</div>
  <div class="small-12 large-8 columns"><div class="panel">
  <h5>Iniciar Sesión</h5>
  <form action="loginUsuario" method="POST">

  		<div class="row">
  			<div class="large-12 columns">
      			<label>Usuario:
        		<input type="text" id="usuario" name="usuario" placeholder="Usuario" />
      			</label>
    		</div>
  		</div>
  		<div class="row">
  			<div class="large-12 columns">
      			<label>Contraseña:
        		<input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" />
      			</label>
    		</div>
  		</div>
		<button class="button expand" type="submit" id="loginPOST">Entrar</button>
	</form>
</div></div>
  <div class="large-2 columns">.</div>
</div>

	

	
</div>
</body>
</html>