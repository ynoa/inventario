<?php

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte.xls");?>


<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Descripcion</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos as $producto) { ?>
                        <tr class="">



                            <td><?php echo $producto['id_producto']; ?></td>
                            <td><?php echo $producto['nombre_producto']; ?></td>
                            <td><?php echo $producto['precio_producto']; ?></td>
                            <td><?php echo $producto['stock_producto']; ?></td>
                            <td><?php echo $producto['descripcion_producto']; ?></td>

                        <?php     } ?>
                        </tr>
                </tbody>
            </table>
        </div>


    </div>
    <div class="card-footer text-muted"></div>
</div>
