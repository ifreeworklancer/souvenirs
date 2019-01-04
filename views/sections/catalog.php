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
            <div class="row justify-content-around align-items-center">
                <div class="col-sm-4 col-xl-3">
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
                <div class="col-sm-4 col-xl-3 p-sm-0">
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
                <div class="col-sm-4 col-xl-3">
                    <div class="catalog-main-filter-item catalog-main-filter-item--manufacturer">
                        <div class="title">
                            Производитель
                        </div>
                        <div class="catalog-main-filter-item-container">
                            <form>
                                <select class="custom-select" id="catalog-filter-manufacturer">
                                    <option selected>“Своє Краще”</option>
                                    <option value="2">“Своє Краще 2”</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>