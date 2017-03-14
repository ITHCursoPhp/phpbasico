<?php
namespace phpbasico\Producto;

class Producto
{
    private $descripcion;
    private $id;
    private $precio;

    /**
     * @return string la descripcion
     */
    public function getDescription() : string
    {
        return $this->descripcion;
    }
    /**
     * @param string $descripcion
     */
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getPrecio() : float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio)
    {
        $this->precio = $precio;
    }
}
