<?php

include("header.php"); ?>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">

        <a name="" id="" class="btn btn-primary" href="../Controller/controller_crear_producto.php" role="button">Crear Producto</a>
        <form class="d-flex" role="search" action="../Controller/controller_buscar_producto.php" method="POST">

            <input class="form-control me-2" type="search" id="nombre_producto" name="nombre_producto" placeholder="Escribe el producto" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>

        </form>
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
                    <?php foreach ($productos as $producto) { ?>
                        <tr class="">



                            <td><?php echo $producto['id_producto']; ?></td>
                            <td><?php echo $producto['nombre_producto']; ?></td>
                            <td><?php echo $producto['precio_producto']; ?></td>
                            <td><?php echo $producto['stock_producto']; ?></td>
                            <td><?php echo $producto['descripcion_producto']; ?></td>
                            <td><a name="" id="" class="btn btn-info" href="../Controller/controller_editar_producto.php?id_producto=<?php echo $producto['id_producto']; ?>" role="button">Editar</a>

                                <a name="" id="" class="btn btn-danger" href="../Controller/controller_eliminar_producto.php?id_producto=<?php echo $producto['id_producto']; ?>" role="button">Eliminar</a>

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