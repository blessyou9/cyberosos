@extends('plantilla')
@section('contenido')

<h1 class="mt-4 display-1 text-center"><font color="teal">Tabla</font></h1>

 <!--
<body>
    
  <button id="btn">Click</button>
  
  <table class="table table-striped table-dark table_id " id="table_id">
  
                     
  <thead>    
  <tr>
  <th>Nombre</th>
  <th>Correo</th>
  <th>Password</th>
  <th>Telefono</th>
  <th>Fecha</th>
  <th>Rol</th>
  <th>Acciones</th>
  
  </tr>
  </thead>
  <tbody>
</body>

<td>text1.1</td>
<td>text1.2</td>
<td>text1.3</td>
<td>text1.4</td>
<td>text1.5</td>
<td>text1.6</td>
<td>text1.7</td>

<tr></tr>

<td>text1.1</td>
<td>text1.2</td>
-->

 
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }

        table th, tr {
            text-align: center;
        }
    </style>
</head>

<body align="center">
<table style="width:50%" border="2" align="center">
  <thead>
    <tr>
      <th>header1</th>
      <th>header2</th>
      <th>header3</th>
    </tr>
   </thead>
   <tbody>
     <tr>
       <td>text1.1</td>
       <td>text1.2</td>
       <td>text1.3</td>
     </tr>
     <tr>
       <td>text2.1</td>
       <td>text2.2</td>
       <td>text2.3</td>
     </tr>
     <tr>
       <td>text3.1</td>
       <td>text3.2</td>
       <td>text3.3</td>
     </tr>
     <tr>
     </tr>
  </tbody>
</table>

</body>
</html>
<br>


@stop
