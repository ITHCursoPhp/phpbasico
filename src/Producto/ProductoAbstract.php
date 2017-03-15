<?php
namespace phpbasico\Producto;

abstract class ProductoAbstract
{
    abstract function getDueno() : string;

    public function getDescripcionDeClase() : string
    {
        return __CLASS__;
    }
}
