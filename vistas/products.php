<?php
// leer JSON

require_once __DIR__ . '/../libraries/products.php';
$product = new Product;
$products = $product->todo();


?>
<div class="container-fixed">
    <section id="products-section">
        <div>
            <h1>Our Products</h1>
        </div>
        <article class="main-cards">
            <p>The best place for plants</p>

            <div class="cards-container">
                <?php foreach ($products as $product) : ?>
                <div class="cards-item">
                    <div class="card">
                        <div class="card_image"><img src="imgs/producto-<?= $product->getImg(); ?>"
                                alt="<?= $product->getTitulo() ?>"></div>
                        <div class="card_content">
                            <em class="product_category"><?= $product->getCategory(); ?></em>
                            <h2 class="card_title"><?= $product->getTitulo() ?></h2>
                            <p><?= $product->getType(); ?></p>
                            <p class="card_text"><?= $product->getPrice(); ?></p>

                            <div class="cart-card"> <a href="#"><i class='bx bx-cart'></i></a></div>
                        </div> <a class="inside" href="index.php?s=product-view&id=<?= $product->getProductId(); ?>">

                            <i class='bx bx-info-circle'></i>

                        </a>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </article>
    </section>
</div>