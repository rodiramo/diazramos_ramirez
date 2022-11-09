<?php

class Product{

private int $product_id;
private string $product_name;
private string $product_family;
private string $product_description;  
private string $product_img;
private string $product_category;
private string $product_price;
private string $product_img_desc;


/**
 * guarda los datos de $data
 * @param array $data
 * 
 */

 public function cargarDatosDeArray(array $data): void
{

$this->product_id                      = $data['product_id'];
$this->product_description             = $data['product_description'];
$this->product_img                     = $data['product_img'];
$this->product_category                = $data['product_category'];
$this->product_name                    = $data['product_name'];
$this->product_price                   = $data['product_price'];
$this->product_family                   = $data['product_family'];
$this->product_img_desc                   = $data['product_img_desc'];



 }
 /**
  * 
  * @return Product[]
  * 
  */
public function todo() :  array
{
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

/**
 * 
 * @param int $id
 * 
 * @return Product
 * 
 */

 public function viewById(int $id): Product{
    $products = $this->todo();
    foreach($products as $product){
        if($id === $product->product_id){
            return $product;
        }
    }
 }

/* get value of product_id */
public function getProductId(): int
{
   return $this->product_id;
} 
/* set value of product_id */
 public function setProductId(int $product_id)
{
   $this->product_id = $product_id;
}


/* get value of name */
public function getTitulo(): string
{
   return $this->product_name;
}          
/* set value of product_name */
public function setProductTitle(string $product_name)
{
   $this->product_name= $product_name;
}


/* get value of desc */
public function getDescription(): string
{
   return $this->product_description;
}
 /* set value of product_desc */
public function setProductDescription(string $product_description)
{
   $this->product_description = $product_description;
}


/* get value of price */
public function getPrice(): string
{
   return $this->product_price;
}
/* set value of price */
public function setProductPrice(string $product_price)
{
   $this->product_price = $product_price;
}


/* get value of img */
public function getImg(): string
{
   return $this->product_img;
}
/* set value of img */
public function setProductImg(string $product_img)
{
   $this->product_img = $product_img;
}


/* get value of category */            
public function getCategory(): string
{
   return $this->product_category;
}
/* set value of category */
public function setProductCategory(string $product_category)
{
   $this->product_category = $product_category;
}


/* get value of family */
public function getType(): string
{
   return $this->product_family;
}
/* set value of family */
public function setProductType(string $product_family)
{
   $this->product_type = $product_family;
}


/* get value of img desc */
public function getImgDesc(): string
{
   return $this->product_img_desc;
}
/* set value of family */
public function setProductImgDesc(string $product_img_desc)
{
   $this->product_img_desc = $product_img_desc;
}

}
