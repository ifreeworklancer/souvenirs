<?php

require_once('../functions.php');

require_once('../store.php');

require_once('../views/base/header.php');

?>

<!-- Page Order -->
<section id="page-order">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-sm-10 col-lg-6 pr-sm-0 mx-auto ml-lg-0 mr-lg-auto">
                <h2 class="section-title">
                    Оформление заказа
                </h2>
                <div class="page-order-item">
                    <?php
                        foreach($page_basket['list'] as $item) {
                            echo    '<div class="basket-item">'
                                        .'<div class="delete-basket-item">Удалить товар<div class="icon"><div class="line line--left"></div><div class="line line--right"></div></div></div>'
                                        .'<div class="basket-item-cell">'
                                            .'<div class="img" style="background-image: url(' . $item['image'] . ')"></div>'
                                        .'</div>'
                                        .'<div class="basket-item-cell basket-item-cell--main">'
                                            .'<div class="main-content">'
                                                .'<h5 class="title">' . $item['title'] . '</h5>'
                                                .'<div class="product-code">Код Товара: <span class="code">' . $item['product_code'] . '</span></div>'
                                            .'</div>'
                                            .'<div class="secondary-content">'
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
                                    .'</div>';
                        }
                    ?>
                    <div class="basket-total flex-row justify-content-center justify-content-sm-end">
                        <div class="basket-total__title">
                            итого
                        </div>
                        <div class="basket-total__price">
                            146 <span class="currency">грн</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-5 mx-auto ml-lg-auto mr-lg-0">
                <div class="page-register-item">
                    <div class="page-register-item-header">
                        <h1 class="section-title">
                            Информация пользователя
                        </h1>
                    </div>
                    <div class="page-register-item-body">
                        <form>
                            <div class="form-content">
                                <div class="form-content-title">
                                    информация пользователя
                                    <div class="decor"></div>
                                </div>
                                <div class="form-group">
                                    <label for="user-name">имя</label>
                                    <input type="text" name="user_name" id="user-name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="secondary-info">не обязательное поле</div>
                                    <label for="user-last-name">Фамилия</label>
                                    <input type="text" name="user_last_name" id="user-last-name" class="form-control">
                                </div>
                            </div>
                            <div class="form-content">
                                <div class="form-content-title">
                                    контактные данные
                                    <div class="decor"></div>
                                </div>
                                <div class="form-group">
                                    <label for="user-email">email</label>
                                    <input type="email" name="user_email" id="user-email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="user-phone">Номер телефона</label>
                                    <input type="tel" name="user_last_phone" id="user-phone" class="form-control">
                                </div>
                            </div>
                            <div class="form-content">
                                <div class="form-content-title">
                                    способы оплаты
                                    <div class="decor"></div>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="user_cash_payment" id="user-cash-payment">
                                    <label class="custom-control-label" for="user-cash-payment">наличными после доставки (наложеным платежем)</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="user_card_payment" id="user-card-payment">
                                    <label class="custom-control-label" for="user-card-payment">оплатить картой visa / mastercard</label>
                                </div>
                            </div>
                            <div class="form-content">
                                <div class="form-content-title">
                                    доставка
                                    <div class="decor"></div>
                                </div>
                                <div class="form-row form-row--full-width">
                                    <div class="form-group form-group--select">
                                        <label>выбор доставки</label>
                                        <div class="center">
                                            <select name="sources" id="sources" class="custom-select sources" placeholder="Выберите способо доставки">
                                                <option value="0">Самовывоз</option>
                                                <option value="1">“Новая почта”</option>
                                                <option value="2">“Укрпочта”</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group form-group--select">
                                        <label for="user-change-city">Город</label>
                                        <div class="center">
                                            <select name="sources" id="sources" class="custom-select sources" placeholder="Выберите город">
                                                <option value="0">Киев</option>
                                                <option value="1">Львов</option>
                                                <option value="2">Днепр</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-group--select">
                                        <label>Номер отделения</label>
                                        <div class="center">
                                            <select name="sources" id="sources" class="custom-select sources" placeholder="Номер отделения">
                                                <option value="0">Отделение №50 ул.Фортечна, 5</option>
                                                <option value="1">Отделение №5 ул.Фортечна, 10</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-secondary">подтвердить заказ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php

require_once('../views/base/footer.php');

?>