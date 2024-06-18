<?php

include_once("../Model/modelo_productos.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST) && $_POST["nombre_producto"] !== "" && $_POST["precio_producto"] !== "" && $_POST["stock_producto"] !== "" && $_POST["descripcion_producto"] !== "") {
        $nombre_producto = $_POST["nombre_producto"];
        $precio_producto = $_POST["precio_producto"];
        $stock_producto = $_POST["stock_producto"];
        $descripcion_producto = $_POST["descripcion_producto"];


        $instancia_producto = new productos();

        $instancia_producto->crear_producto($nombre_producto, $precio_producto, $stock_producto, $descripcion_producto);
        $mensaje = "El Producto se Creo Correctamente ";
    } else {
        $mensaje = "Por Favor Complete todos los Campos";
    }


}else{
    $mensaje = "";


}

echo $mensaje;


include_once("../View/form_crear_producto.php");