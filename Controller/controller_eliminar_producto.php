<?php 

include_once ("../Model/modelo_productos.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET["id_producto"])) {
        $id_producto = $_GET["id_producto"];
        $instancia_producto = new productos();
        $producto = $instancia_producto->eliminar_producto($id_producto);
        header("Location:controller_mostrar_producto.php");
        
    }
} 