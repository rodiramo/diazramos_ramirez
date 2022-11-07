<?php


/*
 @return Product[]


*/
function productosTodo() : array{
    
$contenido = file_get_contents(__DIR__ . '/../api/productos.json');

$data = json_decode($contenido, true);

$salida = [];
foreach($data as $item){
    $product = new Product;
    $product->product_id             = $item['product_id'];
    $product->product_name           = $item['product_name'];
    $product->product_category       = $item['product_category'];
    $product->product_type           = $item['product_type'];
    $product->product_price          = $item['product_price'];  
    $product->product_img            = $item['product_img'];
    $product->product_description    = $item['product_description'];
$salida[] = $product;

}
return $salida;
}

/*

 @param int $id

@return Product
*/

function productosViewById(int $id): Product { 
       
    $products = productosTodo(); 

    foreach ($products as $product) {
        if ($id === $product->product_id) {
    return $product;
}
    }
}
