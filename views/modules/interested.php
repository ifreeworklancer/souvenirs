<div class="interested">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12">
                <h2 class="section-title">
                    <?= $interested['title']?>
                </h2>
            </div>
            <?php
            $count = 0;
            foreach($interested['list'] as $item) {
                echo '<div class="col-sm-5 col-lg-3 mb-4">'
                        .'<div class="catalog-card">'
                            .'<div class="catalog-card-header">'
                                .'<div class="img" style="background-image: url(' . $item['image'] . ')"></div>';
                                if($item['hit'] === true || $item['discount'] === true || $item['new'] === true) {
                                    echo '<div class="type">';
                                    if($item['hit'] === true) {
                                        echo '<div class="type-item type-item--hit">Хит продаж</div>';
                                    }
                                    if($item['discount'] === true) {
                                        echo '<div class="type-item type-item--discount">Акция</div>';
                                    }
                                    if($item['new'] === true) {
                                        echo '<div class="type-item type-item--new">Новинка</div>';
                                    }
                                    echo '</div>';
                                }
                            echo '</div>'
                        .'<div class="catalog-card-body">'
                            .'<a href="page/page-basket.php" class="catalog-card-basket"><svg width="16" height="17"><use xlink:href="#catalog-basket"></use></svg></a>'
                            .'<div class="content">'
                                .'<h6 class="title">' . $item['title'] . '</h6>'
                                .'<div class="price">';
                                if($item['old_price'] != null) {
                                    echo '<div class="old-price"><span>' . $item['old_price'] . '</span></div>';
                                }                                    
                                echo '<div class="new-price">' . $item['price'] . '</div>'
                                .'<div class="currency">грн</div>'
                                .'</div>'
                            .'</div>'
                        .'</div>'
                        .'<div class="custom-shadow"></div>'
                    .'</div>'
                .'</div>';
            }
            ?>
        </div>
    </div>
</div>