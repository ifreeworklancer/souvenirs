<?php

require_once('../functions.php');

require_once('../store.php');

require_once('../views/base/header.php');

?>

<!-- Page Login -->
<section id="page-login">
    <div class="page-singup-banner d-block d-lg-none" style="background-image: url('../images/bg/page-singup-bg.jpg')"></div>
    <div class="container">
        <div class="row w-100">
            <div class="col-md-8 col-lg-6 col-xl-5 mx-auto ml-lg-0 mr-lg-auto d-flex align-items-center">
                <div class="page-register-item">
                    <div class="page-register-item-header">
                        <h1 class="section-title">
                            войти
                        </h1>
                        <div class="title-link">
                            <a href="page-singup.php">
                                Зарегистрироваться
                            </a>
                        </div>
                    </div>
                    <div class="page-register-item-body">
                        <form>
                            <div class="form-content">
                                <div class="form-group">
                                    <label for="user-email">email</label>
                                    <input type="email" name="user_email" id="user-email" class="form-control">
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
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="user_remember" id="user-remember">
                                    <label class="custom-control-label" for="user-remember">Запомнить меня</label>
                                </div>
                                <button type="submit" class="btn btn-secondary">войти</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-singup-banner d-none d-lg-block" style="background-image: url('../images/bg/page-singup-bg.jpg')"></div>
</section>


<?php
require_once('../views/base/footer.php');
?>