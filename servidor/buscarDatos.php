<?php

  //0. INCLUIR EL ARCHIVO DONDE ESTA PROGRAMADA NUESTRA CLASE BASEDATOS
  include("Basedatos.php");
  include("../models/productos.php");

  //1. Crear una copia (crear un objeto) de la clase BD
  $operacionBD = new Basedatos();

  //2. consulta SQL para seleccionar
  $modeloProductos= new Productos(); 
  $consultaSQL=$modeloProductos->buscarProductos();
  $consultaSQL="SELECT * FROM producto";
  

  //3. accedemos al metodo buscarRegistros y almacenamos la consulta dentro de un arrgelo
  $productos = $operacionBD->buscarRegistros($consultaSQL);

  //4. imprimir el arreglo
  // print_r($productos);
  // //$producto[0];


?>