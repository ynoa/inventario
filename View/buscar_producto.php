<?php

include("header.php"); ?>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <a name="" id="" class="btn btn-success" href="../Controller/controller_mostrar_producto.php" role="button">Volver al Menu Principal</a>

        <?php if (!empty($mensaje_buscar)) {
            echo $mensaje_buscar;
        } ?>

        <form action="../Controller/controller_buscar_producto.php" method="POST" class="d-flex" role="search">

            <input class="form-control me-2" type="search" id="nombre_producto" name="nombre_producto" placeholder="Escribe el producto" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>

        </form>
    </div>

    <div class="card-body">
        <?php if (count($producto) > 0) { ?>
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
                        <?php foreach ($producto as $key => $cada_producto) { ?>
                            <tr class="">



                                <td><?php echo $cada_producto['id_producto']; ?></td>
                                <td><?php echo $cada_producto['nombre_producto']; ?></td>
                                <td><?php echo $cada_producto['precio_producto']; ?></td>
                                <td><?php echo $cada_producto['stock_producto']; ?></td>
                                <td><?php echo $cada_producto['descripcion_producto']; ?></td>
                                <td><a name="" id="" class="btn btn-info" href="../Controller/controller_editar_producto.php?id_producto=<?php echo $cada_producto['id_producto']; ?>" role="button">Editar</a>

                                    <a name="" id="" class="btn btn-danger" href="../Controller/controller_eliminar_producto.php?id_producto=<?php echo $cada_producto['id_producto']; ?>" role="button">Eliminar</a>

                                </td>

                            <?php     } ?>
                            </tr>
                    </tbody>
                </table>
            <?php } else { ?>
                <p>No se encontraron productos.</p>
            <?php } ?>
            </div>


    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include("footer.php"); ?>