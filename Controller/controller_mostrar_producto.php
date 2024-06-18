<?php 

include_once("../Model/modelo_productos.php");

$instancia_producto2 = new productos();

$productos = $instancia_producto2->mostar_productos();

include_once("../View/listar_productos.php");