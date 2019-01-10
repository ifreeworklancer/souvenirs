<?php

require_once('../functions.php');

require_once('../store.php');

require_once('../views/base/header.php');

?>

<!-- Page Basktet -->
<section id="page-basket">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item active">Корзина</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="page-main-content">
            <div class="row">
                <div class="col-12 position-static">
                    <h2 class="section-title">
                        <?= $page_basket['title']; ?>
                    </h2>
                    <div class="clear-basket">
                        Очистить все товары в корзине
                        <svg width="14" height="18">
                            <use xlink:href="#clear-basket-icon"></use>
                        </svg>  
                    </div>
                </div>
            </div>
        </div>
        <div class="basket-content">
            <?php
                foreach($page_basket['list'] as $item) {
                    echo '<div class="row">'
                            .'<div class="col-12">'
                                .'<div class="basket-item">'
                                    .'<div class="delete-basket-item">Удалить товар<div class="icon"><div class="line line--left"></div><div class="line line--right"></div></div></div>'
                                    .'<div class="basket-item-cell">'
                                        .'<div class="img" style="background-image: url(' . $item['image'] . ')"></div>'
                                        .'<div class="main-content">'
                                            .'<h5 class="title">' . $item['title'] . '</h5>'
                                            .'<div class="product-code">Код Товара: <span class="code">' . $item['product_code'] . '</span></div>'
                                        .'</div>'
                                    .'</div>'
                                    .'<div class="basket-item-cell">'
                                        .'<div class="quantity">'
                                            .'<form class="quantity-form">'
                                                .'<label class="quantity-label"><div class="quantity-label__title">кол-во</div>'
                                                    .'<input type="number" class="quantity-input form-control" name="basket_quantity" min="1" value="1">'
                                                    .'<div class="quantity-button quantity-down">-</div><div class="quantity-button quantity-up">+</div>'
                                                .'</label>'
                                            .'</form>'
                                        .'</div>'
                                        .'<div class="price">'
                                            .'<div class="price-value">' . $item['price'] . '<span class="currency"> грн</span></div>'
                                        .'</div>'
                                    .'</div>'
                                .'</div>'
                            .'</div>'
                        .'</div>';
                }
            ?>
        </div>
        <div class="page-main-content">
            <div class="row">
                <div class="col-12">
                    <div class="basket-total">
                        <div class="basket-total-item">
                            <div class="basket-total__title">
                                итого
                            </div>
                            <div class="basket-total__price">
                                146 <span class="currency">грн</span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-secondary">к оформлению заказа</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('../views/modules/interested.php')?>
</section>


<?php
require_once('../views/sections/new-articles.php');
require_once('../views/base/footer.php');
?>