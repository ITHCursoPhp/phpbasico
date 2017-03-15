<?php
namespace phpbasico\Caja;

use phpbasico\Producto\Producto as ProductoGeneral;
use phpbasico\Calculos\CalculoTotalTrait;

class Caja
{
    use CalculoTotalTrait;
    /** @var Producto[] */
    private $productos;

    public function addProducto(ProductoGeneral $producto)
    {
        $this->productos[$producto->getId()] = $producto;
    }

    public function getProductos()
    {
        return $this->productos;
    }
}
