<section id="new-articles">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="new-articles-item">
                    <div class="section-description">
                        <h2 class="section-description__title">
                            <?= $new_articles['title']?>
                        </h2>
                        <h6 class="section-description__subtitle">
                            <?= $new_articles['subtitle']?>
                        </h6>
                    </div>
                    <div class="slider-nav slider-nav--new-articles">
                        <div class="slider-nav-number"> 
                            <div class="slider-nav-number-item slider-nav-number-item--index  slider-nav-number-item--index-new-articles"></div>
                            <div class="slider-nav-number-item slider-nav-number-item--separator">из</div>
                            <div class="slider-nav-number-item slider-nav-number-item--last slider-nav-number-item--last-new-articles"></div>
                        </div>
                        <div class="slider-arrow">
                            <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-new-articles">
                                <svg width="8" height="10">
                                    <use xlink:href="#arrow-prev-icon"></use>
                                </svg>
                            </div>
                            <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-new-articles">
                                <svg width="8" height="10">
                                    <use xlink:href="#arrow-next-icon"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 p-0">
                <div class="new-articles-slider">
                    <?php 
                        foreach($new_articles['list'] as $item) {
                            echo '<div class="new-articles-slider-item">'
                                    .'<a href="page/page-articles.php" class="articles-card">'
                                        .'<div class="articles-card-header">'
                                            .'<div class="img" style="background-image: url(' . $item['image'] . ')"></div>'
                                        .'</div>'
                                        .'<div class="articles-card-body">'
                                            .'<div class="content">'
                                                .'<div class="data">'
                                                    .'<div class="data__icon">'
                                                        .'<svg width="14" height="14"><use xlink:href="#data-icon"></use></svg>'
                                                    .'</div>'
                                                    . $item['data']
                                                .'</div>'
                                                .'<h6 class="title">' . $item['title'] . '</h6>'
                                            .'</div>'
                                        .'</div>'
                                    .'</a>'
                                .'</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>