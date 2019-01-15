<div class="product-set">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product-set-item">
                    <h2 class="section-title">
                        <?= $catalog_set['title']; ?>
                    </h2>
                    <div class="slider-arrow">
                        <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-product-set">
                            <svg width="8" height="10">
                                <use xlink:href="#arrow-prev-icon"></use>
                            </svg>
                        </div>
                        <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-product-set">
                            <svg width="8" height="10">
                                <use xlink:href="#arrow-next-icon"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="product-set-slider">
                    <?php foreach ($catalog_set['list'] as $item) {
                        echo  '<div class="product-set-slider-item">'
                            .'<div class="catalog-card catalog-card--set" style="background-image: url(' . $item['image_bg'] . ')">'
                            . '<div class="catalog-card-set-prev">'
                            . '<div class="img" style="background-image: url(' . $item['image'] . ')"></div>'
                            . '</div>'
                            . '<div class="catalog-card-set-main">'
                            . '<div class="content">'
                            . '<div class="sub-title">Набор</div>'
                            . '<h5 class="title">' . $item['title'] . '</h5>'
                            . '<div class="price">';
                        if ($item['old_price'] != null) {
                            echo '<div class="old-price">' . $item['old_price'] . '</div>';
                        }
                        echo '<div class="new-price">' . $item['price'] . '<span class="currency">грн</span></div>'
                            . '</div>'
                            . '<ul class="description-list">' . $item['description'] . '</ul>'
                            . '<a href="#" class="more-info">Подробнее</a>'
                            . '</div>'
                            . '</div>';
                        if ($item['hit'] === true || $item['discount'] === true || $item['new'] === true) {
                            echo '<div class="type">';
                            if ($item['hit'] === true) {
                                echo '<div class="type-item type-item--hit">Хит продаж</div>';
                            }
                            if ($item['discount'] === true) {
                                echo '<div class="type-item type-item--discount">Акция</div>';
                            }
                            if ($item['new'] === true) {
                                echo '<div class="type-item type-item--new">Новинка</div>';
                            }
                            echo '</div>';
                        }
                        echo '</div>'
                            . '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
