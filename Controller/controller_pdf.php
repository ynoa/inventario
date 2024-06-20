<?php

include_once("../Model/modelo_productos.php");

$instancia_producto4 = new productos();

$file = $instancia_producto4->mostar_productos();

include_once("../View/pdf.php");