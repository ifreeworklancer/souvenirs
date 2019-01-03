<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        <?= $app_title ?>
    </title>

    <link rel="stylesheet" href="fonts/font.css">
    <link rel="stylesheet" href="dist/app.css">
</head>

<body>

<svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="position: absolute;top: -999999px;">
    <filter id="myblurfilter" width="110%" height="100%">
        <feGaussianBlur stdDeviation="1" result="blur"/>
    </filter>
</svg>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="play-video-icon" viewBox="0 0 512 512">
        <path d="m354.2,247.4l-135.1-92.4c-4.2-3.1-15.4-3.1-16.3,8.6v184.8c1,11.7 12.4,11.9 16.3,8.6l135.1-92.4c3.5-2.1 8.3-10.7 0-17.2zm-130.5,81.3v-145.4l106.1,72.7-106.1,72.7z"
              fill="#ffbd69"/>
        <path d="M256,11C120.9,11,11,120.9,11,256s109.9,245,245,245s245-109.9,245-245S391.1,11,256,11z M256,480.1    C132.4,480.1,31.9,379.6,31.9,256S132.4,31.9,256,31.9S480.1,132.4,480.1,256S379.6,480.1,256,480.1z"
              fill="#ffbd69"/>
    </symbol>
    
    <symbol id="header-basket-icon" viewBox="0 0 24 24">
        <path fill="#fff" d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/>
        <path fill="none" d="M0 0h24v24H0z"/>
    </symbol>
    
    <symbol id="user-icon" viewBox="0 0 350 350">
        <path d="M175,171.173c38.914,0,70.463-38.318,70.463-85.586C245.463,38.318,235.105,0,175,0s-70.465,38.318-70.465,85.587   C104.535,132.855,136.084,171.173,175,171.173z"/>
        <path d="M41.909,301.853C41.897,298.971,41.885,301.041,41.909,301.853L41.909,301.853z"/>
        <path d="M308.085,304.104C308.123,303.315,308.098,298.63,308.085,304.104L308.085,304.104z"/>
        <path d="M307.935,298.397c-1.305-82.342-12.059-105.805-94.352-120.657c0,0-11.584,14.761-38.584,14.761   s-38.586-14.761-38.586-14.761c-81.395,14.69-92.803,37.805-94.303,117.982c-0.123,6.547-0.18,6.891-0.202,6.131   c0.005,1.424,0.011,4.058,0.011,8.651c0,0,19.592,39.496,133.08,39.496c113.486,0,133.08-39.496,133.08-39.496   c0-2.951,0.002-5.003,0.005-6.399C308.062,304.575,308.018,303.664,307.935,298.397z" />
    </symbol>

    <symbol id="search-icon" viewBox="0 0 52.966 52.966">
        <path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21
            c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279
            C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19
            S32.459,40,21.983,40z"/>
    </symbol>

    <symbol id="arrow-prev-icon" viewBox="0 0 306 306">
		<polygon points="247.35,270.3 130.05,153 247.35,35.7 211.65,0 58.65,153 211.65,306 "/>
    </symbol>

    <symbol id="arrow-next-icon" viewBox="0 0 306 306">
            <polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153 "/>
    </symbol>
</svg>


<!-- App-header -->
<header id="app-header">
    <div class="container-fluid pr-xl-0">
        <div class="row w-100 m-0 align-items-center">
            <div class="col-2">
                <a href="/" class="logo">
                    КРАЩЕСВОЕ
                </a>
            </div>
            <div class="col-10 pr-xl-0">
                <div class="header-main d-none d-xl-flex">
                    <div class="header-item header-item--full-width">
                        <div class="header-item-row header-item-row--top">
                            <div class="header-contacts">
                                <ul class="header-contacts-list">
                                    <li class="header-contacts-list-item header-contacts-list-item--email">
                                        <a href="mailto:<?= $header['email']; ?>">
                                            <?= $header['email']; ?>
                                        </a>
                                    </li>
                                    <li class="header-contacts-list-item header-contacts-list-item--vodafone">
                                        <a href="tel:+38<?= phone_link($header['phone_vodafone']) ?>">
                                            <?= $header['phone_vodafone']; ?>
                                        </a>
                                    </li>
                                    <li class="header-contacts-list-item header-contacts-list-item--kyivstar">
                                        <a href="tel:+38<?= phone_link($header['phone_kyivstar']) ?>">
                                            <?= $header['phone_kyivstar']; ?>
                                        </a>
                                    </li>
                                    <li class="header-contacts-list-item header-contacts-list-item--lifecell">
                                        <a href="tel:+38<?= phone_link($header['phone_lifecell']) ?>">
                                            <?= $header['phone_lifecell']; ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-change">
                                <ul class="header-change-list header-change-list--currency">
                                    <li class="active"><a href="#">грн</a></li>
                                    <li><a href="##">usd</a></li>
                                </ul>
                                <ul class="header-change-list">
                                    <li class="active"><a href="#">ru</a></li>
                                    <li><a href="##">ua</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-item-row">
                            <div class="header-nav">
                                <nav class="header-nav-item">
                                    <ul class="header-nav-list">
                                        <?php
                                        $count;
                                        foreach ($header['list'] as $key => $value) {
                                            $count++;
                                            echo 
                                            '<li><a href="' . $key . '"' . '>';
                                            if ($count === 1) 
                                            echo '<div class="header-nav-burger">'
                                            .'<div class="line line--top"></div>'
                                            .'<div class="line line--middle"></div>'
                                            .'<div class="line line--bottom"></div></div>';
                                            echo $value . '</a></li>';
                                        }
                                        ?>
                                    </ul>
                                </nav>
                                <div class="header-nav-search">
                                    <form>
                                        <div class="form-search-item">
                                            <label for="header-search" class="label-search">
                                                <svg width="15" height="15">
                                                    <use xlink:href="#search-icon"></use>
                                                </svg>
                                            </label>
                                            <input type="search" name="header__search" id="header-search"
                                                class="form-control form-control-search">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="header-login">
                                <a href="page/page-login" class="header-login__link">
                                    <svg width="12" height="15">
                                        <use xlink:href="#user-icon"></use>
                                    </svg>  
                                    Войти
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-item">
                        <a href="page/page-basket.php" class="header-basket">
                            <div class="header-basket-icon">
                                <svg width="15" height="15">
                                    <use xlink:href="#header-basket-icon"></use>
                                </svg>  
                                <div class="header-basket-icon__quantity">2</div>
                            </div>
                            <div class="header-basket-price">
                                <span class="header-basket-price__value">126</span>
                                <span class="header-basket-price__currency">грн</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="burger-menu d-flex d-xl-none">
                    <div class="line line--top"></div>
                    <div class="line line--middle"></div>
                    <div class="line line--bottom"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <nav class="menu-nav">
            <ul class="header-nav-list">
                <?php
                $count = 0;
                foreach ($header['list'] as $key => $value) {
                    $count++;
                    echo 
                    '<li><a href="' . $key . '"' . '>';
                    if ($count === 1) 
                    echo '<div class="header-nav-burger">'
                    .'<div class="line line--top"></div>'
                    .'<div class="line line--middle"></div>'
                    .'<div class="line line--bottom"></div></div>';
                    echo $value . '</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
</header>

<!-- Main -->
<main>