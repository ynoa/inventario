

<?php include ('header.php');?>



<div class="card">
    <div class="card-header">Editar Producto</div>
    <div class="card-body">

    <form action= "../Controller/controller_editar_producto.php" method="POST" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="" class="form-label">ID del Producto</label>
        <input
            type="text"
            class="form-control"
            name="id_producto"
            id="id_producto"
            aria-describedby="helpId"
            readonly
            value="<?php echo $producto["id_producto"] ?>"
            placeholder="Nombre del Producto"

        />
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Nombre del Producto</label>
        <input
            type="text"
            class="form-control"
            name="nombre_producto"
            id="nombre_producto"
            aria-describedby="helpId"
            value="<?php echo $producto["nombre_producto"] ?>"
            placeholder="Nombre del Producto"

        />
    </div>

     
    <div class="mb-3">
        <label for="" class="form-label">Precio del Producto</label>
        <input
            type="text"
            class="form-control"
            name="precio_producto"
            id="precio_producto"
            aria-describedby="helpId"
            value="<?php echo $producto["precio_producto"] ?>"
            placeholder="Precio del Producto"
        />
    </div>

     
    <div class="mb-3">
        <label for="" class="form-label">Stock del Producto</label>
        <input
            type="text"
            class="form-control"
            name="stock_producto"
            id="stock_producto"
            aria-describedby="helpId"
            value="<?php echo $producto["stock_producto"] ?>"
            placeholder="Stock del Producto"
        />
    </div>

     
    <div class="mb-3">
        <label for="" class="form-label">Descripcion del Producto</label>
        <input
            type="text"
            class="form-control"
            name="descripcion_producto"
            id="descripcion_producto"
            aria-describedby="helpId"
            value="<?php echo $producto["descripcion_producto"] ?>"
            placeholder="Descripcion del Producto"
        />
    </div>

    <button
        type="submit"
        class="btn btn-primary"
    >
        Actualizar Producto
    </button>

    <a
        name=""
        id=""
        class="btn btn-danger"
        href="#"
        role="button"
        >Cancelar</a
    >
    
    
    </form>
      




    </div>
    <div class="card-footer text-muted"></div>
</div>




<?php include ('footer.php');?>