@extends('layouts.laSeleccionLayo')

@section('contentIndex')

  <h1>
      	Punto de Venta<br>
  </h1>


<dl class="accordion" data-accordion="">
  <dd class="accordion-navigation">
    <a href="#panel1b">Productos</a>
    <div id="panel1b" class="content active">
      <ul class="example-orbit" data-orbit>
  <li>
    <h1>CONTENIDO 1</h1>

  </li>
  <li class="active">
    <h1>CONTENIDO 2</h1>

  </li>
  <li>
    <h1>CONTENIDO 3</h1>

  </li>
</ul>
    </div>
  </dd>
  <dd class="accordion-navigation">
    <a href="#panel2b">Lista de Compras</a>
    <div id="panel2b" class="content">
      <table>
  <thead>
    <tr>
      <th width="200">Table Header</th>
      <th>Table Header</th>
      <th width="150">Table Header</th>
      <th width="150">Table Header</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Content Goes Here</td>
      <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
      <td>Content Goes Here</td>
      <td>Content Goes Here</td>
    </tr>
    <tr>
      <td>Content Goes Here</td>
      <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
      <td>Content Goes Here</td>
      <td>Content Goes Here</td>
    </tr>
    <tr>
      <td>Content Goes Here</td>
      <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
      <td>Content Goes Here</td>
      <td>Content Goes Here</td>
    </tr>
  </tbody>
</table>
    </div>
  </dd>
</dl>
  


@stop