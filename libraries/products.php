<?php

require_once __DIR__ . '/../classes/products.php';
/*
 @return Product[]


*/
function todo() : array{
    
$contenido = file_get_contents(__DIR__ . '/../api/productos.json');

$data = json_decode($contenido, true);

$salida = [];
foreach($data as $item){
    $product = new Product;
$product->cargarDatosDeArray($item);
$salida[] = $product;

}
return $salida;
}
