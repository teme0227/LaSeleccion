<!DOCTYPE HTML>
<HTML>
<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	{{ HTML::style('css/foundation.css') }}
 	{{ HTML::style('css/normalize.css')}} 
  {{ HTML::style('css/jquery-ui.css')}}
  {{ HTML::style('css/foundation-icons.css')}}


 	<script src="{{ URL::asset('js/vendor/modernizr.js') }}"></script>
	<script src="{{ URL::asset('js/vendor/jquery.js') }}"></script>
	<script src="{{ URL::asset('js/vendor/fastclick.js') }}"></script>	
	<script src="{{ URL::asset('js/foundation.min.js') }}"></script>
  	<script src="{{ URL::asset('js/jquery.blockUI.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-ui.js') }}"></script>
  	<script src="{{ URL::asset('js/utils.js') }}"></script>
  	<script src="{{ URL::asset('js/sesion.js') }}"></script>
  	<script src="{{ URL::asset('js/main.js') }}"></script>
    @yield('jsbefore')
</head>


<body>
	<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>

       <section class="right-small">
       <a href="logout"><i class="step fi-power size-36"></i></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title">La Seleccion</h1>
      </section>
    </nav>

    <aside class="left-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>Adminsitración</label></li>
        <li><a href="userAdmin">Usuarios</a></li>
        <li><a href="#">Negocios</a></li>
        <li><a href="productos">Productos</a></li>
      </ul>
       <ul class="off-canvas-list">
        <li><label>Punto de Venta</label></li>
        <li><a href="#">Venta</a></li>
        <li><a href="#"></a></li>
      </ul>
    </aside>


    <section class="main-section" align="center" style="height: 600px;">
      
    @yield('contentIndex')
    
    </section>

  

  <a class="exit-off-canvas"></a>

  </div>
</div>

@yield('content')

</body>


</html>
@yield('js')