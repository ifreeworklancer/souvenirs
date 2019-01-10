<?php

require_once('../functions.php');

require_once('../store.php');

require_once('../views/base/header.php');

?>

<!-- Page Singup -->
<section id="page-singup">
    <div class="page-singup-banner" style="background-image: url('../images/bg/page-singup-bg.jpg')"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 col-xl-5 mx-auto ml-lg-auto mr-lg-0">
                <div class="page-register-item">
                    <div class="page-register-item-header">
                        <h1 class="section-title">
                        Информация пользователя
                        </h1>
                        <div class="title-link">
                            <a href="page-login.php">
                                войти
                            </a>
                        </div>
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
                                <div class="form-group">
                                    <div class="check-password">
                                        <svg width="12" height="15">
                                            <use xlink:href="#check-password-icon"></use>
                                        </svg>  
                                    </div>
                                    <label for="user-password">Пароль</label>
                                    <input type="password" name="user_password" id="user-password" class="form-control form-control-password">
                                </div>
                                <div class="form-group">
                                    <div class="check-password">
                                        <svg width="12" height="15">
                                            <use xlink:href="#check-password-icon"></use>
                                        </svg>  
                                    </div>
                                    <label for="user-password-confirm">Повторите пароль</label>
                                    <input type="password" name="user_password_confirm" id="user-password-confirm" class="form-control form-control-password">
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="user_remember" id="user-remember">
                                    <label class="custom-control-label" for="user-remember">Запомнить меня</label>
                                </div>
                                <button type="submit" class="btn btn-secondary">Зарегистрироваться</button>
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