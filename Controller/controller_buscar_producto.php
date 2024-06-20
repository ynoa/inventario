<?php

include_once("../Model/modelo_productos.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["nombre_producto"])) {
        $mensaje_buscar = "";
        $nombre_producto = $_POST["nombre_producto"];
        $instancia_producto = new productos();
        $producto = $instancia_producto->buscar_producto_nombre($nombre_producto);

        if ($producto) {
           
            include_once("../View/buscar_producto.php");
        } else {
            $mensaje_buscar = "El producto No Existe o Esta Mal Escrito";
            include_once("../View/buscar_producto.php");
            //echo $mensaje_buscar ;
        }
    } else {
        $mensaje_buscar = "Nombre de Producto no Proporcionado";
        include_once("../View/buscar_producto.php");
            //echo $mensaje_buscar ;
    }
} 