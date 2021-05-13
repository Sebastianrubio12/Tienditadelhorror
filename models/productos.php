<?php

class productos{
    
    public function registrarProducto($nombre,$precio,$marca,$foto,$descripcion)
    {
        $consultaSQL="INSERT INTO producto (nombre,precio,marca,url_foto,descripcion) VALUES ('$nombre','$precio','$marca','$foto','$descripcion')";
        return ($consultaSQL);
    }

    public function buscarProductos()
    {
        $consultaSQL = "SELECT * FROM producto";
        return($consultaSQL);

    }

    public function eliminarProducto($Id)
    {
        $consultaSQL="DELETE FROM producto WHERE Id='$Id'";
        return($consultaSQL);
    }

    public function editarProducto($Id,$nombre,$precio,$foto)
    {
        $consultaSQL="UPDATE producto SET nombre='$nombre',precio='$precio',url_foto='$foto' WHERE id='$Id'";
        return($consultaSQL);
    }
}


?>