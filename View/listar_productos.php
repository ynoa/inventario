<?php

include("header.php"); ?>

<div class="card">
    <div class="card-header"><a name="" id="" class="btn btn-primary" href="../Controller/controller_crear_producto.php" role="button">Crear Producto</a>
    </div>
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
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos as $key => $producto) { ?>
                        <tr class="">



                            <td><?php echo $producto['id_producto']; ?></td>
                            <td><?php echo $producto['nombre_producto']; ?></td>
                            <td><?php echo $producto['precio_producto']; ?></td>
                            <td><?php echo $producto['stock_producto']; ?></td>
                            <td><?php echo $producto['descripcion_producto']; ?></td>
                            <td><a name="" id="" class="btn btn-info" href="../Controller/controller_editar_producto.php?id_producto=<?php echo $producto['id_producto']; ?>" role="button">Editar</a>

                                <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a>

                            </td>

                        <?php     } ?>
                        </tr>
                </tbody>
            </table>
        </div>


    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include("footer.php"); ?>