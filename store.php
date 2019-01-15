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

$catalog_set = [
    'title' => 'Посмотрите этот товар в наборах',
    'list' => [
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
            'title' => 'Корпоративный подарочный набор "Новогодний"',
            'description' => '<li>Сувенир “Кот Утильный” маленький</li> <li>Деревянная открытка “Олень”</li> <li>Деревянная открытка-бантик</li>',
            'old_price' => '124',
            'price' => '99',
            'image' => '../images/content/main/catalog/catalog-item-3.jpg',
            'image_bg' => '../images/content/main/catalog/catalog-set-bg.jpg',
            'hit' => true,
            'discount' => true,
            'new' => true
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
            'new' => true
        ],
    ],
];

$interested = [
    'title' => 'Вам могут быть интересны',
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
    ]
];

$page_about = [
    'banner' => '../images/bg/page-about-banner.jpg',
    'header_title' => 'Магазин украинских сувениров «Своє Краще»',
    'header_description' => 'Оригинальность всегда лучше банальности, а ручная работа лучше конвейерной. Если вы согласны с этим, то наш интернет-магазин это то, что вам нужно!',
    'main_title' => 'Благодарим Вас за проявленный интерес к деятельности компании «Своє Краще»!',
    'main_description' =>
        '<p>Идея создание проекта возникла в результате практических исследований рынка сувенирной продукции, игрушек, товаров для дома и товаров символизирующих нашу прекрасную страну. Однажды перед руководителем проекта возникла задача подобрать подарочный набор из национальных сувениров и игрушек исключительно украинских производителей для отправки заграницу своим близким и их детям. </p>
    <p>В процессе поиска оказалось, что такие товары есть, но зачастую владельцы торговых точек и интернет-магазинов присваивают им низкий рейтинг и «прячут» или отставляют на задний план предпочитая продавать китайские пластиковые товары. Конечно, такой подход к национальным производителям и их товарам нас очень расстроил.</p>
    <p>Мы также обратили внимание что большинство наших производителей совсем не занимаются продвижением своих изделий. У некоторых нет даже контактного номера телефона на сайте, да и сам сайт не раскрывает идею и цели производителя.</p>
    <p>В результате объективной оценки рынка мы убедились в разнообразии, качестве и оригинальности товаров, производимых украинскими компаниями, о которых ничего не известно большинству нашего окружения, и как оказалось и всей стране. Понимая, что географически и идеологически регион нашего проживания имеет очень различные взгляды и отношение к национальной символике и традициям, мы осознанно принимаем решение, и в 2015 году открываем наш первый розничный магазин под торговой маркой «Своє Краще» в ТЦ «Амстор» г.Запорожье.</p>
    <p>Спустя некоторое время мы убедились, что магазин становится популярным и особенным местом для наших единомышленников. От многих наших постоянных клиентов мы часто слышим призывы к развитию географии покрытия наших магазинов в рамках Запорожья и других городов Украины, т.к. некоторые клиенты посещали нас из дальних районов и других городов.</p>
    <p>Чтобы учесть все пожелания наших уважаемых и дорогих клиентов, а также понимая тенденции развития возможностей интернет технологий и рынка e-commerce, в 2017 году мы открываем Интернет-магазин «svoekolo», и теперь активно работаем над популяризацией национальных товаров в рамках всей нашей прекрасной страны.</p>
    <p>Главный принцип компании «Своє Краще» - предлагать и делать узнаваемыми товары исключительно украинских компаний производителей, мастеров, художников, и просто соотечественников, которые прилагая максимальные усилия, и творческий подход, создают по-настоящему качественные товары не имеющие аналогов, т.к. многие из представленных изделий изготавливаются вручную! Каждая единица представленного на нашей площадке товара, проходит тщательный анализ на соответствие стандартам качества, уникальности и широкого интереса клиентов, а также отсутствия дефектов. Особенностью нашего проекта является то что, в рамках пакета услуг компании, мы предоставляем возможность индивидуального заказа на изготовление эксклюзивного товара из керамики, дерева и текстиля по Вашим эскизам и пожеланиям. Сроки изготовления и детали заказа уточняйте пожалуйста у менеджеров.</p>
    <p>Мы не перестаём активно работать над развитием проекта и улучшением нашего сервиса. Если у Вас возникнут какие-либо пожелания или замечания, будем очень рады конструктивным идеям. Спасибо Вам за доверие и поддержку, мы очень любим то что делаем и верим в проект «Своє Краще», а Вы нас всегда вдохновляете и помогаете развиваться!</p>',
    'image_1' => '../images/content/page/page-about/page-about-1.jpg',
    'image_2' => '../images/content/page/page-about/page-about-2.jpg',
    'image_3' => '../images/content/page/page-about/page-about-3.jpg',
    'image_4' => '../images/content/page/page-about/page-about-4.jpg',
];

$page_basket = [
    'title' => 'Корзина',
    'list' => [
        [
            'image' => '../images/content/page/page-basket/page-basket-1.jpg',
            'title' => 'Сувенир "Кот Утильный" большой',
            'product_code' => 'G-1',
            'price' => '146'
        ],
        [
            'image' => '../images/content/page/page-basket/page-basket-1.jpg',
            'title' => 'Сувенир "Кот Утильный" большой ',
            'product_code' => 'G-1',
            'price' => '146'
        ],
    ]
];


$page_article_list = [
    'title' => 'Статьи',
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

$page_article = [
    'title' => 'Как красиво оформить семейное фото',
    'data' => '01 января 2019',
    'content' =>
        '<p>Семейные фотографии — это память о важных событиях жизни. Бесспорно, каждая ячейка общества имеет у себя в архивах от нескольких десятков до сотен тысяч снимков. Зачем же им отлеживаться в альбомах или «висеть» в социальных сетях, если ими можно стильно украсить ваш интерьер, используя семейные фоторамки?</p>
    <div class="img" style="background-image: url(../images/content/page/page-article/page-article-1.jpg)"></div>
    <h3>Как украсить семейную фотографию?</h3>
    <p>Есть несколько способов придать красоту вашим снимкам:</p>
    <ul><li>Повесить на стену или поставить на столик одинарную фотографию в рамке (самый популярный способ)</li><li>Сделать коллаж из нескольких фото и повесить его на стену</li></ul>
    <p>Кроме того, можно украшать снимки и рамки акриловой краской, маленькими фигурками и сувенирами. Если же вы собираетесь распечатать фотографии, то разукрасить и добавить интересные элементы можно в различных фоторедакторах.</p>
    <div class="img" style="background-image: url(../images/content/page/page-article/page-article-2.jpg)"></div>
    <h3>Как правильно подобрать семейные фоторамки для коллажа?</h3>
    <p>На сайте компании "Своє Краще"размещены варианы интерьерных фоторамок, в которых могут оказаться фото вашей семьи. Всё зависит исключительно от личных предпочтений. Количество рамок одного коллажа, слова, рисунки и другие элементы, все это вы можете заказать индивидуально. Для небольшой семьи, например, отлично подойдет фоторамки с надписью <a href="#">«Семья»</a>. Если же у вас много детей — то фоторамка-коллаж <a href="#">«Family»</a> или фоторамка <a href="#">«Семейная»</a>.</p>
    <p>Также можно посвятить стену детской комнаты фотографиям ребенка. Для данной цели идеально подойдет фоторамка «Маленькая принцесса», если у вас девочка, или «Спорт», если ваш сынок тяготеет к спорту.</p>',
];

$page_product = [
    'images' => [
        '../images/content/page/page-product/page-product-1.jpg',
        '../images/content/page/page-product/page-product-1.jpg',
        '../images/content/page/page-product/page-product-1.jpg',
    ],
    'delivery' => '<ul> <li>На склад Новой почты.</li> <li>Бесплатная доставка от 1000 грн.</li> </ul>',
    'payment' => '<ul> <li>Наличными при получении</li> <li>Visa/M.Card, Приват24</li> <li>Безнал: без НДС</li> </ul>',
    'product_code' => 'G-1',
    'title' => 'Сувенир "Кот Утильный" большой ',
    'availability' => 'В наличии',
    'description' => 'Керамический сувенир - ручная работа, изготовлено из высококачественной температуро-устойчивой белой глины.',
    'price' => '146',
    'specifications' => [
        [
            'name' => 'Материал',
            'info' => 'Керамика',
        ],
        [
            'name' => 'Размеры',
            'info' => '8*8,5см',
        ],
        [
            'name' => 'Техника',
            'info' => 'Лепка',
        ],
        [
            'name' => 'Особенности',
            'info' => 'Ручная работа',
        ],
        [
            'name' => 'Название',
            'info' => 'Информация',
        ],
        [
            'name' => 'Название',
            'info' => 'Информация',
        ],
        [
            'name' => 'Название',
            'info' => 'Информация',
        ],
        [
            'name' => 'Название',
            'info' => 'Информация',
        ],
        [
            'name' => 'Название',
            'info' => 'Информация',
        ],
    ],
    'reviews' => [
        [
            'name' => 'Елена',
            'text' => 'Очень понравился ребенку, повесили на стену в детской нового друга. Спасибо!',
            'data' => '21 декабря 2018',
        ],
        [
            'name' => 'Ольга',
            'text' => 'Очень понравился ребенку, повесили на стену в детской нового друга. Спасибо! Очень понравился ребенку, повесили на стену в детской нового друга. Спасибо! Очень понравился ребенку, повесили на стену в детской нового друга. Спасибо!',
            'data' => '26 декабря 2018',
        ],
        [
            'name' => 'Андрей',
            'text' => 'Очень понравился ребенку, повесили на стену в детской нового друга. Спасибо! Повесили на стену в детской нового друга.',
            'data' => '11 января 2019',
        ],
    ],
];
