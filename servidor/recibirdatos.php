<?php 
  
    //0. INCLUIR EL ARCHIVO DONDE ESTA PROGRAMADA NUESTRA CLASE BASEDATOS
    include("Basedatos.php");
    include("../models/productos.php");

    if(isset($_POST["botonRegistro"])){

       
        //1. RECIBIR LA INFORMACIÓN QUE LLEGA DEL CLIENTE (FORMULARIO)
        $nombreProducto=$_POST["nombreProducto"];
        $precioProducto=$_POST["precioProducto"];
        $marcaProducto=$_POST["marcaProducto"];
        $fotoProducto=$_POST["fotoProducto"];
        $descripcionProducto=$_POST["descripcionProducto"];
       
        //2.Crear un objeto(sacarle copia  a la clase) de la clase BaseDatos
        //TODOS LOS OBJETOS SON VARIABLES
        $operacionBD= new Basedatos();

        //3.Definir la consulta SQL a ejecutar
        $modeloProductos=new Productos();
        $consultaSQL=$modeloProductos->registrarProducto($nombreProducto,$precioProducto,$marcaProducto,$fotoProducto,$descripcionProducto);
        
        
        //4. Llamar al metodo de la clase BaseDatos para AGREGAR rgeistros
        $operacionBD->agregarRegistros($consultaSQL, "insert");


    }else{
        echo("No deberia estar aca");
    }




?>