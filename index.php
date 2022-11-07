<?php

require_once __DIR__ . '/classes/products.php';

$rutas = [
  'home' => [
    'title' => 'Home',
  ],
  'products' => [
    'title' => 'Our Products',
  ],
  'product-view' => [
    'title' => 'Product',
  ],
  'login-signup' => [
    'title' => 'Login & Register!',
  ],
  'signup-post' => [
    'title' => 'Welcome!',
  ],
  'login-post' => [
    'title' => 'Welcome back!',
  ],
  '404' => [
    'title' => 'Page not found :(',
  ],
];

$vista = $_GET['s'] ?? 'home';

if (!file_exists("vistas/" . $vista . ".php")) {
  $vista = '404';
}

if (!isset($rutas[$vista])) {

  $vista = '404';
}

if ($vista === 'product-view') {

  require_once __DIR__ . '/libraries/products.php';
  $product = productosViewById($_GET['id']);
  $rutas[$vista]['title'] = $product->product_name;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- icono -->
  <link rel="icon" href="imgs/orchid.png">
  <!-- title -->
  <title> Blomma - <?= $rutas[$vista]['title']; ?></title>
  <!--vue js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js"></script>
  <!--BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!--ANIMATE.CSS-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Boxicons CSS -->
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
  <!-- CSS -->
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="fonts/stylesheet.css">
  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
</head>


<body>
      <?php
          // require headers and nav
          require 'partials/header.php';
          require 'partials/nav.php';
      ?>
  <!-- main content -->
  <main class="main-content">
       <?php
              $filename = __DIR__ . '/vistas/' . $vista . '.php';
              if (file_exists($filename)) {
                require $filename;
              } else {
                require __DIR__ . '/vistas/404.php';
              }
            
       ?>
  </main>

  <?php
        require 'partials/footer.php';
  ?>