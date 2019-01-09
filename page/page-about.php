<?php

require_once('../functions.php');

require_once('../store.php');

require_once('../views/base/header.php');

?>

<!-- Page About -->
<div class="page-banner">
    <div class="img" style="background-image: url('<?= $page_about['banner']?>')"></div>
    <div class="decor-shadow"></div>
</div>
<section id="page-about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item active">О нас</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="page-description">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="section-title mb-4 mb-sm-0">
                        <?= $page_about['header_title']; ?>
                    </h2>
                </div>
                <div class="col-sm-6">
                    <div class="section-description">
                        <?= $page_about['header_description']; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-main-content">
            <div class="row">
                <div class="col-12">
                    <div class="page-about-item clearfix">
                        <div class="page-about-item-images">
                            <div class="page-about-item-images-row">
                                <div class="image image--top" style="background-image: url('<?= $page_about['image_1']?>')"></div>
                                <div class="image" style="background-image: url('<?= $page_about['image_2']?>')"></div>
                            </div>
                            <div class="page-about-item-images-row">
                                <div class="image image--top" style="background-image: url('<?= $page_about['image_3']?>')"></div>
                                <div class="image" style="background-image: url('<?= $page_about['image_4']?>')"></div>
                            </div>
                        </div>
                        <h2 class="title">
                            <?= $page_about['main_title']; ?>
                        </h2>
                        <?= $page_about['main_description']; ?>
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