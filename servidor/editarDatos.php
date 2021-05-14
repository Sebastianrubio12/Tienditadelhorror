<?php

//0. INCLUIR EL ARCHIVO DONDE ESTA PROGRAMADA NUESTRA CLASE BASEDATOS
include("Basedatos.php");
include("../models/productos.php");
if(isset($_POST["botonEditar"])){

    //1. capturar el id a editar
    $Id=$_GET["Id"];
    
    //2. Recibo los datos a editar
    $nombreProducto=$_POST["nombreEditar"];
    $precioProducto=$_POST["precioEditar"];
    $fotoProducto=$_POST["fotoEditar"];

    //3.Crear un objeto(sacarle copia  a la clase) de la clase BaseDatos
    //TODOS LOS OBJETOS SON VARIABLES
    $operacionBD= new Basedatos();

    //4. Crear la consulta SQL para EDITAR REGISTROS
    $modeloProductos=new Productos();
    $consultaSQL=$modeloProductos->editarProducto($Id,$nombreProducto,$precioProducto,$fotoProducto);
    //5. LLamar el metodo editarregistros
    $operacionBD->agregarRegistros($consultaSQL,"update");
   

}



?>