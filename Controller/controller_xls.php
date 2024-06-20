<?php

include_once("../Model/modelo_productos.php");

$instancia_producto3 = new productos();

$productos = $instancia_producto3->mostar_productos();

include_once("../View/xls.php");