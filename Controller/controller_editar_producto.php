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


}