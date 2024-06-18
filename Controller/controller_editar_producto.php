<?php
include_once("../Model/modelo_productos.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET["id_producto"])) {
        $id_producto = $_GET["id_producto"];
        $instancia_producto = new productos();
        $producto = $instancia_producto->buscar_producto($id_producto);

        if ($producto) {
            include_once("../View/editar_producto.php");
        } else {
            echo "El producto no existe.";
        }
    } else {
        echo "ID de producto no proporcionado.";
    }
} 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST) && $_POST["nombre_producto"] !== "" && $_POST["precio_producto"] !== "" && $_POST["stock_producto"] !== "" && $_POST["descripcion_producto"] !== "" && $_POST["id_producto"] !== "") {
        $id_producto = $_POST["id_producto"];
        $nombre_producto = $_POST["nombre_producto"];
        $precio_producto = $_POST["precio_producto"];
        $stock_producto = $_POST["stock_producto"];
        $descripcion_producto = $_POST["descripcion_producto"];


        $instancia_producto = new productos();

        $instancia_producto->actualizar_producto($id_producto,$nombre_producto,$precio_producto, $stock_producto, $descripcion_producto);
        $mensaje = "El Producto se Creo Correctamente ";
    } else {
        $mensaje = "Por Favor Complete todos los Campos";
    }

    header("Location:controller_mostrar_producto.php");

}

include_once ("../View/editar_producto.php");