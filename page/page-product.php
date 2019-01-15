<?php

require_once('../functions.php');

require_once('../store.php');

require_once('../views/base/header.php');

?>

    <!-- Page Product -->
    <section id="page-product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Главная</a></li>
                            <li class="breadcrumb-item active">Карточка товара</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="page-main-content">
                <div class="row align-item-start">
                    <div class="col-lg-6">
                        <div class="page-product-item pl-lg-2">
                            <div class="page-product-item-prev">
                                <?php
                                foreach ($page_product['images'] as $image) {
                                    echo '<div class="page-product-item-prev-image" style="background-image: url(' . $image . ')"></div>';
                                }
                                ?>
                            </div>
                            <div class="page-product-item-secondary-info d-none d-sm-flex">
                                <div class="secondary-info-item">
                                    <div class="icon">
                                        <svg width="25" height="20">
                                            <use xlink:href="#delivery-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="title">
                                        Доставка
                                    </div>
                                    <?= $page_product['delivery']; ?>
                                </div>
                                <div class="secondary-info-item">
                                    <div class="icon">
                                        <svg width="20" height="15">
                                            <use xlink:href="#payment-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="title">
                                        Оплата
                                    </div>
                                    <?= $page_product['payment']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="page-product-item page-product-item--padding">
                            <div class="page-product-item-header">
                                <div class="product-code">
                                    Код товара: <span class="code"><?= $page_product['product_code']; ?></span>
                                </div>
                                <h2 class="title">
                                    <?= $page_product['title']; ?>
                                </h2>
                                <div class="availability">
                                    <?= $page_product['availability']; ?>
                                </div>
                            </div>
                            <div class="page-product-item-body">
                                <div class="cell cell--padding-right">
                                    <p class="description">
                                        <?= $page_product['description']; ?>
                                    </p>
                                    <div class="specifications">
                                        <table class="table table-borderless specifications-table">
                                            <tbody>
                                            <?php
                                            foreach ($page_product['specifications'] as $item) {
                                                echo '<tr>'
                                                    . '<td class="name">' . $item['name'] . '</td>'
                                                    . '<td class="info">' . $item['info'] . '</td>'
                                                    . '</tr>';
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="open-all open-all--specifications">Все характеристики</div>
                                    <div class="page-product-item-secondary-info mb-3 d-flex d-sm-none">
                                        <div class="secondary-info-item">
                                            <div class="icon">
                                                <svg width="25" height="20">
                                                    <use xlink:href="#delivery-icon"></use>
                                                </svg>
                                            </div>
                                            <div class="title">
                                                Доставка
                                            </div>
                                            <?= $page_product['delivery']; ?>
                                        </div>
                                        <div class="secondary-info-item">
                                            <div class="icon">
                                                <svg width="20" height="15">
                                                    <use xlink:href="#payment-icon"></use>
                                                </svg>
                                            </div>
                                            <div class="title">
                                                Оплата
                                            </div>
                                            <?= $page_product['payment']; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="cell">
                                    <div class="price">
                                        <span class="price__value"><?= $page_product['price'] ?></span>
                                        <span class="price__currency">грн</span>
                                    </div>
                                    <div class="quantity">
                                        <form class="quantity-form">
                                            <label class="quantity-label">
                                                <div class="quantity-label__title">кол-во</div>
                                                <input type="number" class="quantity-input form-control"
                                                       name="basket_quantity" min="1" value="1">
                                                <div class="quantity-button quantity-down">-</div>
                                                <div class="quantity-button quantity-up">+</div>
                                            </label>
                                        </form>
                                    </div>
                                    <div class="buy">
                                        <a href="#" class="buy-basket">
                                            <div class="buy-basket-icon">
                                                <div class="line line--top"></div>
                                                <div class="line line--bottom"></div>
                                            </div>
                                            в корзину
                                        </a>
                                        <a href="#" class="buy-order">
                                            купить<br> в один клик
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="page-product-item-footer">
                                <div class="page-product-item-footer-row">
                                    <div class="title">
                                        Отзывы
                                    </div>
                                    <div class="slider-nav slider-nav--product-reviews d-flex align-items-center">
                                        <div class="slider-nav-number mr-3">
                                            <div class="slider-nav-number-item slider-nav-number-item--index slider-nav-number-item--index-product-reviews"></div>
                                            <div class="slider-nav-number-item slider-nav-number-item--separator">из
                                            </div>
                                            <div class="slider-nav-number-item slider-nav-number-item--last slider-nav-number-item--last-product-reviews"></div>
                                        </div>
                                        <div class="slider-arrow">
                                            <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-product-reviews">
                                                <svg width="8" height="10">
                                                    <use xlink:href="#arrow-prev-icon"></use>
                                                </svg>
                                            </div>
                                            <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-product-reviews">
                                                <svg width="8" height="10">
                                                    <use xlink:href="#arrow-next-icon"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="reviews-slider">
                                    <?php
                                    foreach ($page_product['reviews'] as $item) {
                                        echo '<div class="reviews-slider-item">'
                                            . '<div class="reviews-slider-item-header">'
                                            . '<div class="name">' . $item['name'] . '</div>'
                                            . '</div>'
                                            . '<div class="reviews-slider-item-body">'
                                            . '<p>' . $item['text'] . '</p>'
                                            . '<div class="data">' . $item['data'] . '</div>'
                                            . '</div>'
                                            . '</div>';
                                    }
                                    ?>
                                </div>
                                <div class="open-all open-all--reviews">
                                    Оставить заявку
                                </div>
                                <div class="send-reviews">
                                    <form>
                                        <div class="form-group">
                                            <label for="user-name">Ваше имя</label>
                                            <input type="text" name="user_name" id="user-name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="user-message">Текст отзыва</label>
                                            <textarea name="user_message" id="user-message"
                                                      class="form-control"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-secondary">Оставить отзыв</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
            </div>
        </div>
        <?php require_once('../views/modules/product-set.php') ?>
        <?php require_once('../views/modules/interested.php') ?>
    </section>


<?php
require_once('../views/sections/new-articles.php');
require_once('../views/base/footer.php');
?>