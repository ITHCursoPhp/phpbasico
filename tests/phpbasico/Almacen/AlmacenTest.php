<?php
namespace test\Almacen;

class AlmacenTest extends PHPUnit_Framework_TestCase
{
    private $sut;

    private $producto;

    protected function setUp()
    {
        parent::setUp();
        $this->sut = new Almacen();
        $this->producto = $this->getMock(Producto::class);
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
