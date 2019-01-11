<!-- Catalog -->
<section id="catalog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title mb-5">
                    <?= $catalog['title']; ?>
                </h2>
            </div>
        </div>
        <div class="catalog-main-filter">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-4 col-xl-3">
                    <div class="catalog-main-filter-item">
                        <div class="title">
                            Цена, <span class="title__currency">грн</span>
                        </div>
                        <form>
                            <input type="range" name="catalog_filter_price" id="catalog-filter-price" class="form-control"
                                multiple min="0" step="10" max="1000" data-values="150 600">
                        </form>
                    </div>
                </div>
                <div class="col-md-4 p-md-0">
                    <div class="catalog-main-filter-item">
                        <div class="title">
                            Повод
                        </div>
                        <div class="catalog-main-filter-item-container d-flex justify-content-start align-items-center">
                            <a href="#" class="catalog-filter-reason catalog-filter-reason--white">
                                Новый год, Рождество
                            </a>
                            <a href="#" class="catalog-filter-reason catalog-filter-reason--blue">
                                Love you
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xl-3">
                    <div class="form-group form-group--select form-group--white-bg">
                        <label for="user-change-city">Город</label>
                        <div class="center">
                            <select name="sources" id="sources" class="custom-select sources" placeholder="Выберите производителя">
                                <option value="0">Свое краще</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="catalog-secondary-filter">
            <div class="custom-shadow"></div>
            <div class="row">
                <div class="col-12">
                    <div class="catalog-secondary-filter-content">
                        <div class="catalog-secondary-filter-item catalog-secondary-filter-item--select">
                            <div class="center">
                                <select name="sources" id="sources" class="custom-select sources" placeholder="Цена по возрастанию">
                                    <option value="0">Цена по возрастанию</option>
                                    <option value="1">Цена по убыванию</option>
                                </select>
                            </div>
                        </div>
                        <div class="catalog-secondary-filter-item">
                            <a href="#" class="btn-catalog-filter-reset" id="catalog-filter-reset">
                                Сбросить все фильтры
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="catalog-list">
            <div class="row justify-content-center justify-content-lg-end">
                <div class="col-sm-5 col-lg-3 h-100">
                    <div class="catalog-sidebar-filter">
                        <ul class="catalog-sidebar-filter-list">
                            <?php
                                foreach($catalog['filters'] as $item) {
                                    echo '<li class="filter-list-item">'
                                        .'<a href="#" class="filter-list-item__link"><div class="icon">' . $item['icon'] . '</div>' . $item['name'] . '</a>';
                                        if($item['sub'] != null) {
                                        echo '<ul class="filter-hidden-list">';
                                            foreach($item['sub'] as $val) {
                                                echo '<li class="filter-hidden-list-item">'
                                                .'<a href="#">' . $val . '</a>'
                                                .'</li>';
                                            }
                                        echo '</ul>';
                                        }
                                        echo '</li>';
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <?php
                $count = 0;
                    foreach($catalog['list'] as $item) {
                        $count++;
                        if($count != 7) {
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
                        } elseif($count == 7) {
                            echo '<div class="col-sm-5 col-lg-10 mb-4">'
                                    .'<div class="catalog-card catalog-card--set" style="background-image: url(' . $item['image_bg'] . ')">'
                                        .'<div class="catalog-card-set-prev">'
                                            .'<div class="img" style="background-image: url(' . $item['image'] . ')"></div>'
                                        .'</div>'
                                        .'<div class="catalog-card-set-main">'
                                            .'<div class="content">'
                                                .'<div class="sub-title">Набор</div>'
                                                .'<h5 class="title">' . $item['title'] . '</h5>'
                                                .'<div class="price">';
                                                if($item['old_price'] != null) {
                                                        echo '<div class="old-price">' . $item['old_price'] . '</div>';
                                                    }  
                                                echo '<div class="new-price">' . $item['price'] . '<span class="currency">грн</span></div>'
                                                .'</div>'
                                                .'<ul class="description-list">' . $item['description'] . '</ul>'
                                                .'<a href="#" class="more-info">Подробнее</a>'
                                            .'</div>'
                                        .'</div>';
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
                                .'</div>';
                        }
                    }
                ?>
                <div class="col-sm-9">
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
    </div>
</section>