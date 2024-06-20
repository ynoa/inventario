<?php
include_once("guardar.php");

class productos
{

    protected $id_producto;
    protected $nombre_producto;
    protected $precio_producto;
    protected $stock_producto;
    protected $descripcion_producto;


    public function getId_producto()
    {
        return $this->id_producto;
    }

    public function getNombre_producto()
    {
        return $this->nombre_producto;
    }

    public function getPrecio_producto()
    {
        return $this->precio_producto;
    }

    public function getStock_producto()
    {
        return $this->stock_producto;
    }

    public function getDescripcion_producto()
    {
        return $this->descripcion_producto;
    }

    public function setId_producto($id_producto)
    {
        $this->id_producto = $id_producto;
    }

    public function setNombre_producto($nombre_producto)
    {
        $this->nombre_producto = $nombre_producto;
    }

    public function setPrecio_producto($precio_producto)
    {
        $this->precio_producto = $precio_producto;
    }

    public function setStock_producto($stock_producto)
    {
        $this->stock_producto = $stock_producto;
    }

    public function setDescripcion_producto($descripcion_producto)
    {
        $this->descripcion_producto = $descripcion_producto;
    }

    public function crear_producto($nombre_producto, $precio_producto, $stock_producto, $descripcion_producto)
    {
        $this->id_producto = guardar($nombre_producto, $precio_producto, $stock_producto, $descripcion_producto);
        $this->nombre_producto = $nombre_producto;
        $this->precio_producto = $precio_producto;
        $this->stock_producto = $stock_producto;
        $this->descripcion_producto = $descripcion_producto;
    }


    public function mostar_productos()
    {
        global $conexion;

        $sentencia = $conexion->prepare("SELECT * FROM tbl_productos");
        $sentencia->execute();
        $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $productos;
    }

    public function buscar_producto($id_producto)
    {
        global $conexion;

        $sentencia = $conexion->prepare("SELECT * FROM tbl_productos WHERE id_producto = ?");
        $sentencia->execute([$id_producto]);
        $producto = $sentencia->fetch(PDO::FETCH_ASSOC);
        return $producto;
    }

    public function buscar_producto_nombre($nombre_producto)
    {
        global $conexion;

        $sentencia = $conexion->prepare("SELECT * FROM tbl_productos WHERE nombre_producto LIKE ?");
        $nombre_producto = "%$nombre_producto%";
        $sentencia->execute([$nombre_producto]);
        $producto = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $producto;
    }

    public function eliminar_producto($id_producto){
        global $conexion;

        $sentencia = $conexion->prepare("DELETE FROM tbl_productos WHERE id_producto =:id_producto");
        $sentencia->bindParam(":id_producto",$id_producto);
        $sentencia->execute();

    }

    public function actualizar_producto($id_producto,$nombre_producto,$precio_producto,$stock_producto,$descripcion_producto)
    {
        global $conexion;

        $sentencia = $conexion->prepare("UPDATE tbl_productos SET nombre_producto = :nombre_producto,precio_producto = :precio_producto,stock_producto = :stock_producto,descripcion_producto = :descripcion_producto WHERE id_producto = :id_producto");
       
        $sentencia->bindParam(":id_producto", $id_producto);
        $sentencia->bindParam(":nombre_producto", $nombre_producto);
        $sentencia->bindParam(":precio_producto", $precio_producto);
        $sentencia->bindParam(":stock_producto", $stock_producto);
        $sentencia->bindParam(":descripcion_producto", $descripcion_producto);
        $sentencia->execute();
    }
}
