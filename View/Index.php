<?php $url_base = "http://localhost/inventario" ?>
<?php include('header.php'); ?>
<div class="card">
    <div class="card-header">Resumen Estado Actual</div>
    <div class="card-body">
        <div class="d-flex justify-content-between" style="max-width: 100%; width: 100%;">
            <div class="card flex-grow-1 mx-2" style="max-width: 30%;">
                <div class="card-body">
                    <h5 class="card-title">Total Productos Existentes</h5>
                    <p class="card-text"><?php echo "Existen un Total de " . count($productos) . " Creados"; ?></p>
                    <a href="<?php echo $url_base ?>/Controller/controller_mostrar_producto.php" class="btn btn-primary">Ver Productos</a>
                </div>
            </div>

            <div class="card flex-grow-1 mx-2" style="max-width: 40%;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Reporte de Productos</h5>
                    <p class="card-text"><?php echo "Crea Un Reporte con Todos Los Productos Existentes su Stock, su ID y su Descripcion"; ?></p>
                    <div class="mt-auto d-flex justify-content-around">
                        <a href="<?php echo $url_base ?>/Controller/controller_pdf.php" class="btn btn-success">Reporte PDF</a>
                        <a href="<?php echo $url_base ?>/Controller/controller_xls.php" class="btn btn-warning">Reporte en Excel</a>
                    </div>
                </div>
            </div>

            <div class="card flex-grow-1 mx-2" style="max-width: 30%;">
                <div class="card-body">
                    <h5 class="card-title">Total de Productos con Existencias</h5>
                    <p class="card-text">
                        <?php
                        $stock = 0;
                        foreach ($productos as $value) {
                            if ($value["stock_producto"] > 0) {
                                $stock = $stock + 1;
                            }
                        }
                        echo "Existen " . $stock . " Productos con Stock"
                        ?>
                    </p>
                    <a href="<?php echo $url_base ?>/Controller/controller_mostrar_producto.php" class="btn btn-primary">Ver Productos</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-muted"></div>
</div>
<?php include('footer.php'); ?>