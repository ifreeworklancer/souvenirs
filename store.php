<?php
$app_title = 'Souvenirs';
$phone = '+38 099 110 22 33';

$header = [
    'email' => 'admin@svoekolo.com.ua',
    'phone_vodafone' => '(066) 084-85-25',
    'phone_kyivstar' => '(096) 536-35-15',
    'phone_lifecell' => '(063) 133-78-15',
    'list' => [
        '/' => 'Каталог',
        'page/page-about.php' => 'О нас',
        'page/page-help.php' => 'Оплата и доставка',
        'page/page-contacts.php' => 'Контакты',
        'page/page-article.php' => 'Статьи',
    ]
];

$intro = [
    'title' => 'Магазин украинских сувениров «Своє Краще»',
    'text' => 'Оригинальность всегда лучше банальности, а ручная работа лучше конвейерной. Если вы согласны с этим, то наш интернет-магазин это то, что вам нужно!',
    'slider' => [
        'page/page-about.php' => '../images/content/main/intro/intro-banner-1.jpg',
        'page/page-help.php' => '../images/content/main/intro/intro-banner-1.jpg',
        'page/page-article.php' => '../images/content/main/intro/intro-banner-1.jpg',
    ]
];

$catalog = [
    'title' => 'Каталог',
    'filters' => [
        [
            'name' => 'Все товары',
            'image' => '../images/icon/filter/filter-item-1.svg',
            'sub' => [
                'Новинки',
            ],
        ],
        [
            'name' => 'Подарочные наборы',
            'image' => '../images/icon/filter/filter-item-2.svg',
            'sub' => [
                'Новогодние',
                'Подкатегория'
            ],
        ],
        [
            'name' => 'Керамика',
            'image' => '../images/icon/filter/filter-item-3.svg',
            'sub' => null,
        ],
    ],
    'list' => [
        [
            'title' => 'Сувенир "Кот Утильный"',
            'old_price' => '',
            'price' => '146',
            'image' => '../images/content/main/catalog/catalog-item-1.jpg',
            'hit' => true,
            'discount' => false,
            'new' => false
        ],
        [
            'title' => 'Деревянная открытка "Милый ангел"',
            'old_price' => '99',
            'price' => '69',
            'image' => '../images/content/main/catalog/catalog-item-2.jpg',
            'hit' => false,
            'discount' => true,
            'new' => true
        ],
        [
            'title' => 'Зайчик Мася',
            'old_price' => '225',
            'price' => '191',
            'image' => '../images/content/main/catalog/catalog-item-3.jpg',
            'hit' => false,
            'discount' => true,
            'new' => false
        ],
        [
            'title' => 'Сувенир "Ангелочек Мила" ',
            'old_price' => '150',
            'price' => '120',
            'image' => '../images/content/main/catalog/catalog-item-2.jpg',
            'hit' => true,
            'discount' => true,
            'new' => true
        ],
        [
            'title' => 'Украинская скатерть "Карпаты"',
            'old_price' => '',
            'price' => '205',
            'image' => '../images/content/main/catalog/catalog-item-3.jpg',
            'hit' => true,
            'discount' => true,
            'new' => false
        ],
        [
            'title' => 'Набор чашек "Новогодние хрюшки"',
            'old_price' => '',
            'price' => '455',
            'image' => '../images/content/main/catalog/catalog-item-1.jpg',
            'hit' => false,
            'discount' => false,
            'new' => false
        ],
        [
            'title' => 'Корпоративный подарочный набор "Новогодний"',
            'description' => '<li>Сувенир “Кот Утильный” маленький</li> <li>Деревянная открытка “Олень”</li> <li>Деревянная открытка-бантик</li>',
            'old_price' => '124',
            'price' => '99',
            'image' => '../images/content/main/catalog/catalog-item-3.jpg',
            'image_bg' => '../images/content/main/catalog/catalog-set-bg.jpg',
            'hit' => false,
            'discount' => true,
            'new' => false
        ],
        [
            'title' => 'Украинская скатерть "Карпаты"',
            'old_price' => '',
            'price' => '205',
            'image' => '../images/content/main/catalog/catalog-item-3.jpg',
            'hit' => true,
            'discount' => true,
            'new' => false
        ],
        [
            'title' => 'Набор чашек "Новогодние хрюшки"',
            'old_price' => '',
            'price' => '455',
            'image' => '../images/content/main/catalog/catalog-item-1.jpg',
            'hit' => false,
            'discount' => false,
            'new' => false
        ],
        [
            'title' => 'Сувенир "Ангелочек Мила" ',
            'old_price' => '150',
            'price' => '120',
            'image' => '../images/content/main/catalog/catalog-item-2.jpg',
            'hit' => true,
            'discount' => true,
            'new' => true
        ],
    ],
];
