<?php

require_once('../functions.php');

require_once('../store.php');

require_once('../views/base/header.php');

?>

<!-- Page Order -->
<section id="page-order">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-order-item">

                </div>
            </div>
            <div class="col-md-8 col-lg-6">
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