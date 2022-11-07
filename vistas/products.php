<?php
// leer JSON

require_once __DIR__ . '/../libraries/products.php';
$products = productosTodo();

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
                            <div class="card_image"><img src="imgs/producto-<?= $product->product_img; ?>"></div>
                            <div class="card_content">
                                <em class="product_category"><?= $product->product_category; ?></em>
                                <h2 class="card_title"><?= $product->product_name ?></h2>
                                <p><?= $product->product_type; ?></p>
                                <p class="card_text"><?= $product->product_price; ?></p>

                                <div class="cart-card"> <a href="#"><i class='bx bx-cart'></i></a></div>
                            </div>
                            <div class="inside">
                                <div class="icon">
                                    <a href="index.php?s=product-view&id=<?= $product->product_id; ?>"><i class='bx bx-info-circle'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </article>
    </section>
</div>