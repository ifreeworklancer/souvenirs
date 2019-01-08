<!-- Intro -->
<section id="intro">
    <div class="intro-slider">
        <?php 
            foreach($intro['slider'] as $key => $value) {
                echo '<a href="' . $key . '" style="background-image: url(' . $value . ')" class="intro-slider__item"></a>';
            }
        ?>
    </div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-sm-8 col-lg-6 col-xl-5">
                <div class="intro-item">
                    <h1 class="intro-item__title">
                        <?= $intro['title']; ?>
                    </h1>
                    <p class="intro-item__text">
                        <?= $intro['text']; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="slider-nav slider-nav--intro">
            <div class="decor"></div>
            <div class="slider-nav-number slider-nav-number--white"> 
                <div class="slider-nav-number-item slider-nav-number-item--index slider-nav-number-item--index-intro"></div>
                <div class="slider-nav-number-item slider-nav-number-item--separator">из</div>
                <div class="slider-nav-number-item slider-nav-number-item--last slider-nav-number-item--last-intro"></div>
            </div>
            <div class="slider-arrow">
                <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-intro">
                    <svg width="8" height="10">
                        <use xlink:href="#arrow-prev-icon"></use>
                    </svg>
                </div>
                <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-intro">
                    <svg width="8" height="10">
                        <use xlink:href="#arrow-next-icon"></use>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
