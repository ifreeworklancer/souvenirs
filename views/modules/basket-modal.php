<!-- Basket Modal -->
<div class="basket-modal">
    <div class="basket-modal-header">
        <div class="basket-modal-header__title">Вы добавили товар в корзину</div>
        <div class="close-basket-modal">
            <div class="line line--left"></div>
            <div class="line line--right"></div>
        </div>
    </div>
    <div class="basket-modal-body">
        <?php
        foreach ($page_basket['list'] as $item) {
            echo '<div class="basket-modal-body-item">'
                . '<div class="img" style="background-image: url(' . $item['image'] . ')"></div>'
                . '<h6 class="title">' . $item['title'] . '</h6>'
                . ' <div class="quantity">'
                . ' <form class="quantity-form">'
                . '<label class="quantity-label"><div class="quantity-label__title">кол-во</div>'
                . '<input type="number" class="quantity-input form-control" name="basket_quantity" min="1" value="1">'
                . ' <div class="quantity-button quantity-down">-</div><div class="quantity-button quantity-up">+</div>'
                . ' </label>'
                . ' </form>'
                . '</div>'
                . '<div class="price">'
                . '<span class="price__value">' . $item['price'] . '</span>'
                . '<span class="price__currency">грн</span>'
                . '</div>'
                . '<div class="delete-basket-modal-body-item">Удалить товар</div>'
                . '</div>';
        }
        ?>
    </div>
    <div class="basket-modal-footer">
        <div class="basket-modal-footer-item">
            <a href="#" class="basket-modal-footer-item__link">к оформлению заказа</a>
        </div>
        <div class="basket-modal-footer-item">
            <div class="result">
                <span class="result__title">итого</span>
                <div class="result-price">
                    <span class="price__value">146</span>
                    <span class="price__currency">грн</span>
                </div>
            </div>
        </div>
    </div>
</div>