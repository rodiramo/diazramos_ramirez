<?php
require_once __DIR__ . '/../libraries/products.php';
$products = (new Product)->todo(); 


?>

<section id="divider-home" style="height: 10rem;">
    <div class="block-color"></div>
    <div class="block-color2"></div>
    <div class="block-color3"></div>
    <div class="block-color4"></div>
    <h2 class="text1">The best shop for buying plants</h2>
    <div class="linea2"></div>
    <p>Touching the hearts of all Plants lovers</p>
</section>


<!-- carousel -->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="index.php?s=product-view&id=2"> <img src="imgs/1.png" alt="promo-20%off"></a>
            <div class="container d-flex">
                <div class="carousel-caption ">
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <a href="index.php?s=product-view&id=12"> <img src="imgs/2.png" alt="monstera"></a>
            <div class="container">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <a href="index.php?s=product-view&id=1"> <img src="imgs/3.png" alt="Alocasia"></a>
            <div class="container">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
    </div>

</div>
<!--info section-->
<section class="species-infocard">
    <h2>Our Species</h2>
    <div class="line-species"></div>
    <p>Plants come from different families and theres different ways to take care of them, here we tell you a bit about
        them so you can take the best care of your plants!</p>



    <ul class="cards-tipos">
        <li>
            <a href="" class="card-tipos">
                <img src="https://images.pexels.com/photos/4622876/pexels-photo-4622876.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                    class="card__image" alt="anthurium" >
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">

                        </svg>
                        <div class="card__header-text">
                            <h3 class="card__title">Anthurium</h3>
                        </div>
                    </div>
                    <p class="card__description">The anthurium is not only a plant that is very easy to care for, but
                        many species of anthurium are among the most beautiful and unusual houseplants that exist.</p>
                </div>
            </a>
        </li>
        <li>
            <a href="" class="card-tipos">
                <img src="https://images.pexels.com/photos/4870767/pexels-photo-4870767.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                    class="card__image" alt="philodendrons">
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">

                        </svg>
                        <div class="card__header-text">
                            <h3 class="card__title">Philodendrons</h3>
                        </div>
                    </div>
                    <p class="card__description">Philodendrons are so popular because they possess air-purifying
                        properties and are not difficult to maintain.</p>
                </div>
            </a>
        </li>
        <li>
            <a href="" class="card-tipos">
                <img src="https://images.pexels.com/photos/6805805/pexels-photo-6805805.jpeg" class="card__image"
                    alt="alocasia">
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">

                        </svg>
                        <div class="card__header-text">
                            <h3 class="card__title">Alocasia</h3>
                        </div>
                    </div>
                    <p class="card__description">The Alocasia is a houseplant that is not so easily overlooked. This is
                        due to their spectacular foliage and visual attractiveness </p>
                </div>
            </a>
        </li>
        <li>
            <a href="" class="card-tipos">
                <img src="https://images.pexels.com/photos/4593961/pexels-photo-4593961.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                    class="card__image" alt="calathea">
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">

                        </svg>
                        <div class="card__header-text">
                            <h3 class="card__title">Calathea</h3>
                        </div>
                    </div>
                    <p class="card__description">The Calathea is a tropical plant with colorful foliage. It is easy to
                        care for and has excellent air-purifying properties.</p>
                </div>
            </a>
        </li>
        <li>
            <a href="" class="card-tipos">
                <img src="https://images.pexels.com/photos/1407305/pexels-photo-1407305.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                    class="card__image" alt="monstera">
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">

                        </svg>
                        <div class="card__header-text">
                            <h3 class="card__title">Monstera</h3>
                        </div>
                    </div>
                    <p class="card__description">The Monstera is a tropical plant and has leaves that can grow
                        monstrously large. The Monstera plant is an excellent air purifier.</p>
                </div>
            </a>
        </li>
    </ul>




</section>

<!--product cards-->
<section id="products-home">
    <div class="features-container">
        <div class="title-encapsule">
            <div class="encapsule-space">
                <h2>Featuring</h2>
                <p>Our best products</p>
            </div>
        </div>
    </div>

    <article class="main-cards">


        <div class="cards-container">
            <?php foreach ($products as $product) : ?>
            <div class="cards-item">

                <div class="card">
                    <div class="card_image"><img src="imgs/producto-<?= $product->getImg(); ?>"
                            alt="<?= $product->getImgDesc() ?>"></div>
                    <div class="card_content">
                        <em class="product_category"><?= $product->getCategory(); ?></em>
                        <h2 class="card_title"><?= $product->getTitulo() ?></h2>
                        <p><?= $product->getType(); ?></p>
                        <p class="card_text"><?= $product->getPrice(); ?></p>

                        <div class="cart-card"> <a href="#"><i class='bx bx-cart'></i></a></div>
                    </div>
                    <div class="inside">
                        <div class="icon">
                            <a href="index.php?s=product-view&id=<?= $product->getProductId() ?>"><i
                                    class='bx bx-info-circle'></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <?php endforeach; ?>

        </div>
    </article>

</section>


<!-- testimonials-->
