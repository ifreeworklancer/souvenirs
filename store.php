<?php
$app_title = 'Souvenirs';
$phone = '+38 099 110 22 33';

$header = [
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
            'icon' => '<svg width="13" height="15"><use xlink:href="#filter-icon-1"></use></svg>',
            'sub' => [
                'Новинки',
            ],
        ],
        [
            'name' => 'Подарочные наборы',
            'icon' => '<svg width="15" height="15"><use xlink:href="#filter-icon-2"></use></svg>',
            'sub' => [
                'Новогодние'
            ],
        ],
        [
            'name' => 'Керамика',
            'icon' => '<svg width="11" height="15"><use xlink:href="#filter-icon-3"></use></svg>',
            'sub' => null,
        ],
        [
            'name' => 'Фоторамки',
            'icon' => '<svg width="15" height="15"><use xlink:href="#filter-icon-4"></use></svg>',
            'sub' => [
                'Подкатегория',
                'Подкатегория',
                'Подкатегория',
            ],
        ],
        [
            'name' => 'Блокноты',
            'icon' => '<svg width="15" height="15"><use xlink:href="#filter-icon-5"></use></svg>',
            'sub' => [
                'Подкатегория',
                'Подкатегория',
            ],
        ],
        [
            'name' => 'Деревянные открытки',
            'icon' => '<svg width="15" height="13"><use xlink:href="#filter-icon-6"></use></svg>',
            'sub' => null
        ],
        [
            'name' => 'Изделия ручной работы',
            'icon' => '<svg width="15" height="15"><use xlink:href="#filter-icon-7"></use></svg>',
            'sub' => [
                'Подкатегория',
                'Подкатегория',
                'Подкатегория',
            ],
        ],
        [
            'name' => 'Сувениры',
            'icon' => '<svg width="15" height="15"><use xlink:href="#filter-icon-8"></use></svg>',
            'sub' => [
                'Подкатегория',
                'Подкатегория',
                'Подкатегория',
                'Подкатегория',
            ],
        ],
        [
            'name' => 'Предметы декора',
            'icon' => '<svg width="15" height="13"><use xlink:href="#filter-icon-9"></use></svg>',
            'sub' => [
                'Подкатегория',
                'Подкатегория',
                'Подкатегория',
                'Подкатегория',
                'Подкатегория',
            ],
        ],
        [
            'name' => 'Игрушки',
            'icon' => '<svg width="15" height="15"><use xlink:href="#filter-icon-10"></use></svg>',
            'sub' => [
                'Подкатегория'
            ],
        ],
        [
            'name' => 'Разное',
            'icon' => '<svg width="15" height="10"><use xlink:href="#filter-icon-11"></use></svg>',
            'sub' => null
        ],
    ],
    'list' => [
        [
            'title' => 'Сувенир "Кот Утильный"',
            'old_price' => null,
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
            'old_price' => null,
            'price' => '205',
            'image' => '../images/content/main/catalog/catalog-item-3.jpg',
            'hit' => true,
            'discount' => false,
            'new' => true
        ],
        [
            'title' => 'Набор чашек "Новогодние хрюшки"',
            'old_price' => null,
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
            'old_price' => null,
            'price' => '205',
            'image' => '../images/content/main/catalog/catalog-item-3.jpg',
            'hit' => true,
            'discount' => false,
            'new' => true
        ],
        [
            'title' => 'Набор чашек "Новогодние хрюшки"',
            'old_price' => null,
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

$new_articles = [
    'title' => 'Свежие статьи',
    'subtitle' => 'Подзаголовок последние интересные статьи',
    'list' => [
        [
            'title' => 'Что подарить на новый год 2019?',
            'data' => '23 декабря 2018',
            'image' => '../images/content/main/new-articles/new-articles-item-1.jpg',
        ],
        [
            'title' => 'Изготовление деревянных рамок для фото с именем',
            'data' => '20 декабря 2018',
            'image' => '../images/content/main/new-articles/new-articles-item-2.jpg',
        ],
        [
            'title' => 'Как красиво оформить семейное фото',
            'data' => '18 декабря 2018',
            'image' => '../images/content/main/new-articles/new-articles-item-3.jpg',
        ],
        [
            'title' => 'Изготовление деревянных рамок для фото с именем',
            'data' => '20 декабря 2018',
            'image' => '../images/content/main/new-articles/new-articles-item-2.jpg',
        ],
        [
            'title' => 'Что подарить на новый год 2019?',
            'data' => '23 декабря 2018',
            'image' => '../images/content/main/new-articles/new-articles-item-1.jpg',
        ],
        [
            'title' => 'Как красиво оформить семейное фото',
            'data' => '18 декабря 2018',
            'image' => '../images/content/main/new-articles/new-articles-item-3.jpg',
        ],
        [
            'title' => 'Что подарить на новый год 2019?',
            'data' => '23 декабря 2018',
            'image' => '../images/content/main/new-articles/new-articles-item-1.jpg',
        ],
        [
            'title' => 'Как красиво оформить семейное фото',
            'data' => '18 декабря 2018',
            'image' => '../images/content/main/new-articles/new-articles-item-3.jpg',
        ],
        [
            'title' => 'Изготовление деревянных рамок для фото с именем',
            'data' => '20 декабря 2018',
            'image' => '../images/content/main/new-articles/new-articles-item-2.jpg',
        ],
    ]
];

$contacts = [
    'address' => 'Запорожье, Новокузнецкая, 41 (ТЦ Амстор)',
    'email' => 'admin@svoekolo.com.ua',
    'phone_vodafone' => '(066) 084-85-25',
    'phone_kyivstar' => '(096) 536-35-15',
    'phone_lifecell' => '(063) 133-78-15',
    'facebook' => 'http://facebook.com',
    'instagram' => 'http://instagram.com',
    'first_menu' => [
        '/' => 'Каталог',
        'page/page-about.php' => 'О нас',
        'page/page-help.php' => 'Оплата и доставка',
    ],
    'second_menu' => [
        'page/page-contacts.php' => 'Контакты',
        'page/page-article.php' => 'Статьи',
    ]
];

$footer = [];
