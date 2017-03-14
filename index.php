<?php
require_once 'vendor/autoload.php';

use phpbasico\Producto\Producto;

$sabritas = new Producto();
$sabritas->setDescripcion('descripcion de sabritas');
$sabritas->setId(76);
$sabritas->setPrecio(25.40);


$texto = "
El producto %s
tiene el id %s
tiene un precio de %s";

echo printf($texto, $sabritas->getDescription(), $sabritas->getId(), $sabritas->getPrecio()
);
