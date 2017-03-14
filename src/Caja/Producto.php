<?php
namespace phpbasico\Caja;

use phpbasico\Producto\Producto as ProductoPadre;

class Producto extends ProductoPadre
{
    public function getPrecio()
    {
        $precio = parent::getPrecio() * 1.15;
        return $precio;
    }
}
