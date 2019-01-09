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
                <div class="col-12">
                    
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