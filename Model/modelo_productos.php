<?php 

class productos{

    protected $id_producto;
    protected $nombre_producto;
    protected $precio_producto;
    protected $stock_producto;
    protected $descripcion_producto;


    public function __construct($id_producto, $nombre_producto, $precio_producto, $stock_producto, $descripcion_producto){
        $this->id_producto = $id_producto;
        $this->nombre_producto = $nombre_producto;
        $this->precio_producto = $precio_producto;
        $this->stock_producto = $stock_producto;
        $this->descripcion_producto = $descripcion_producto;
    }

    public function getId_producto(){
        return $this->id_producto;
    }

    public function getNombre_producto(){
        return $this->nombre_producto;
    }

    public function getPrecio_producto(){
        return $this->precio_producto;
    }

    public function getStock_producto(){
        return $this->stock_producto;
    }

    public function getDescripcion_producto(){
        return $this->descripcion_producto;
    }

    public function setId_producto($id_producto){
        $this->id_producto = $id_producto;
    }

    public function setNombre_producto($nombre_producto){
        $this->nombre_producto = $nombre_producto;
    }

    public function setPrecio_producto($precio_producto){
        $this->precio_producto = $precio_producto;
    }

    public function setStock_producto($stock_producto){
        $this->stock_producto = $stock_producto;
    }

    public function setDescripcion_producto($descripcion_producto){
        $this->descripcion_producto = $descripcion_producto;
    }


    

}