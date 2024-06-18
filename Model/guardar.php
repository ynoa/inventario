<?php

 include_once ("../config/db.php");

function guardar($nombre,$precio,$stock,$descripcion){

    global $conexion;

    $sentencia = $conexion->prepare("INSERT INTO tbl_productos(id_producto,nombre_producto,precio_producto,stock_producto,descripcion_producto) VALUES (null, :nombre_producto, :precio_producto, :stock_producto, :descripcion_producto)");
    $sentencia->bindParam(":nombre_producto",$nombre);
        $sentencia->bindParam(":precio_producto",$precio);
        $sentencia->bindParam(":stock_producto",$stock);
        $sentencia->bindParam(":descripcion_producto",$descripcion);
        $sentencia->execute();
        $id_producto = $conexion->lastInsertId();
        return $id_producto;

}
