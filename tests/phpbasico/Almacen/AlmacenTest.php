<?php
namespace test\Almacen;

use phpbasico\Almacen\Almacen;
use phpbasico\Producto\Producto;
use PHPUnit\Framework\TestCase;

class AlmacenTest extends TestCase
{
    private $sut;

    private $producto;

    protected function setUp()
    {
        parent::setUp();
        $this->sut = new Almacen();
        $this->producto = $this->createMock(Producto::class);
    }

    protected function tearDown()
    {
        parent::tearDown();
        unset(
            $this->sut,
            $this->producto
        );
    }

    public function testAlmacenSinElementos()
    {

    }


}
