<?php

require_once('../functions.php');

require_once('../store.php');

require_once('../views/base/header.php');

?>

    <!-- Page Articles list -->
    <section id="page-article-list">
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
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">
                        <?= $page_article_list['title']; ?>
                    </h2>
                </div>
                <?php foreach ($page_article_list['list'] as $item) {
                    echo '<div class="col-sm-4">'
                        . '<a href="page/page-articles.php" class="articles-card">'
                        . '<div class="articles-card-header">'
                        . '<div class="img" style="background-image: url(' . $item['image'] . ')"></div>'
                        . '</div>'
                        . '<div class="articles-card-body">'
                        . '<div class="content">'
                        . '<div class="data">'
                        . '<div class="data__icon">'
                        . '<svg width="14" height="14"><use xlink:href="#data-icon"></use></svg>'
                        . '</div>'
                        . $item['data']
                        . '</div>'
                        . '<h6 class="title">' . $item['title'] . '</h6>'
                        . '</div>'
                        . '</div>'
                        . '</a>'
                        . '</div>';
                } ?>
                <div class="col-12">
                    <div class="pagination">
                        <ul class="pagination-list">
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                        <div class="pagination-nav">
                            <div class="pagination-nav-item pagination-nav-item--prev">
                                <svg width="8" height="10">
                                    <use xlink:href="#arrow-prev-icon"></use>
                                </svg>
                            </div>
                            <div class="pagination-nav-item pagination-nav-item--next ">
                                <svg width="8" height="10">
                                    <use xlink:href="#arrow-next-icon"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once('../views/modules/interested.php')?>
    </section>


<?php
require_once('../views/base/footer.php');
?>