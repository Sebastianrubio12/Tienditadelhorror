<?php 

//0. INCLUIR EL ARCHIVO DONDE ESTA PROGRAMADA NUESTRA CLASE BASEDATOS
include("Basedatos.php");
include("../models/productos.php");

//1. Recibir el dato del ID a eliminar
$Id=$_GET["Id"];

//2.Crear un objeto(sacarle copia  a la clase) de la clase BaseDatos
//TODOS LOS OBJETOS SON VARIABLES
$operacionBD= new Basedatos();

//3.Crear la consulta SQL para ELIMINAR REGISTROS
$modeloProductos=new Productos();
$consultaSQL=$modeloProductos->eliminarProducto($Id);


//4. Ejecuto el metodo para elimianr un registro
$operacionBD->agregarRegistros($consultaSQL,"delete");






?>