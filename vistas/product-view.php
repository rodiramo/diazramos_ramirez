<?php

require_once __DIR__ . '/../libraries/products.php';
$product = (new Product)-> viewById($_GET['id']);


?>
<section id="services" class="services section-bg">
    <h2 hidden>Product Page</h2>
    <div class="column-xs-12 space">

        <ol class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="index.php?s=home">Home</a></li>
            <li class="breadcrumb-item"><a href="index.php?s=products">Household Plants</a></li>
            <li class="breadcrumb-item active"><?= $product->getTitulo() ?></li>
        </ol>

    </div>

    <aside class="container-fluid space">

        <div class="row" style="justify-content: center; align-items: center;">
            <div class="col-md-4 img-productview">
                <img src="imgs/producto-<?= $product->getImg(); ?>" alt="product">
            </div>
            <div class="col-md-6">

                <h2 class="p-name"><?= $product->getTitulo(); ?></h2>
                <div class="linea2" style="margin-bottom: 10px;"></div>

                <div class="product-detail-content">
                    <p class="p-category"><?= $product->getCategory(); ?></p>

                    <div class="p-features">
                        <h4>Plant Family</h4>
                        <p class="p-name"><?= $product->getType(); ?></p>
                        <h4>About this product</h4>
                        <p class="p-description"> <?= $product->getDescription() ?></p>
                    </div>
                    <div class="p-qty-and-cart">
                        <div class="p-add-cart">

                            <span class="price  "><?= $product->getPrice(); ?> </span>

                            <button class="btn-theme btn buy-btn" tabindex="0"><em>Add to Cart</em>
                                <box-icon name='cart' color="#ffff">
                            </button>

                            <input type="hidden" name="pid" value="18" />
                            <input type="hidden" name="price" value="850" />
                            <input type="hidden" name="url" value="" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </aside>
</section>