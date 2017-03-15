<?php
require_once 'vendor/autoload.php';

use phpbasico\Producto\Producto;
use phpbasico\Caja\Caja;
use phpbasico\Almacen\Almacen;

$sabritas = new Producto();
$sabritas->setDescripcion('descripcion de sabritas');
$sabritas->setId(76);
$sabritas->setPrecio(25.40);


// $texto = "
// El producto %s
// tiene el id %s
// tiene un precio de %s";
//
// echo printf($texto, $sabritas->getDescription(), $sabritas->getId(), $sabritas->getPrecio()
// );

$producto = new Producto();
$producto->setId(12);
$producto->setDescripcion('coca cola');
$producto->setPrecio(12);

$caja = new Caja();
$caja->addProducto($sabritas);
$caja->addProducto($producto);
echo "
Total de caja" . $caja->calcular($caja->getProductos());


$almacen = new Almacen();
$almacen->addProducto($sabritas);
$almacen->addProducto($producto);
echo "
Total almacen " . $almacen->calcular($almacen->getProductos());


echo "metodo public de clase abstracta " .
$producto->getDueno();
