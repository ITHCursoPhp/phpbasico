<?php
namespace phpbasico\Calculos;

trait CalculoTotalTrait
{
    /**
     * @param Producto[]
     */
    public function calcular(array $productos) : float
    {
        $total = 0;

        foreach ($productos as $producto) {
            $total += $producto->getPrecio();
        }
        return $total;
    }

}
