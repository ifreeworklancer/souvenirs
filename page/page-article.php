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
<section id="page-article">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item active">Статьи</li>
                        <li class="breadcrumb-item active">Страница статьи</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="page-main-content">
            <div class="row">
                <div class="col-12">
                    <div class="page-article-item">
                        <h2 class="section-title">
                            <?= $page_article['title']; ?>
                        </h2>
                        <div class="data">
                            <?= $page_article['data']; ?>
                        </div>
                        <?= $page_article['content']; ?>
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