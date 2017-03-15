<?php
namespace phpbasico\Almacen;

use phpbasico\Calculos\CalculoTotalTrait;
use phpbasico\Producto\Producto;

class Almacen implements AlmacenInterface
{
    use CalculoTotalTrait;
    /** @var Producto[] */
    private $productos;

    public function getProductos() : array
    {
        return $this->productos;
    }

    public function addProducto(Producto $producto)
    {
        $this->productos[$producto->getId()] = $producto;
    }

    public function implementaEsto(string $name)
    {
        echo "Te dije que implementaras esto {$name}";
    }
}
