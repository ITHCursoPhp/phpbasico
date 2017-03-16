<?php
namespace phpbasico\Almacen;

use phpbasico\Calculos\CalculoTotalTrait;

class Almacen
{
    use CalculoTotalTrait;
    /** @var Producto[] */
    private $productos;

    public function getProductos() : array
    {
        return $this->productos;
    }

    public function setProducto(Producto $producto)
    {
        $this->producto[$producto->getId()] = $producto;
    }
}
