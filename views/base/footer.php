
    <!-- Contacts -->
    <section id="contacts">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-3">
                    <ul class="contacts-list contacts-list--nav">
                    <?php
                        foreach ($contacts['first_menu'] as $key => $value) {
                            echo '<li><a href="' . $key . '">'. $value . '</a></li>';
                        }
                    ?>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul class="contacts-list contacts-list--nav">
                    <?php
                        foreach ($contacts['second_menu'] as $key => $value) {
                            echo '<li><a href="' . $key . '">'. $value . '</a></li>';
                        }
                    ?>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <div class="contacts-column">
                        <div class="contacts-row">
                            <div class="contacts-item">
                                <ul class="contacts-list">
                                    <li>
                                        <?= $contacts['address']; ?>
                                    </li>
                                    <li>
                                        <a href="mailto:<?= ($contacts['email']) ?>">
                                            <?= $contacts['email']; ?>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="contacts-social-list">
                                    <li>
                                        <a href="<?= $contacts['facebook']?>" target="_blank">
                                            <svg width="15" height="15">
                                                <use xlink:href="#facebook-icon"></use>
                                            </svg>  
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= $contacts['instagram']?>" target="_blank">
                                            <svg width="15" height="15">
                                                <use xlink:href="#instagram-icon"></use>
                                            </svg>  
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="contacts-item">
                                <ul class="contacts-list">
                                    <li>
                                        <a href="tel:+38<?= phone_link($contacts['phone_vodafone']) ?>">
                                            <?= $contacts['phone_vodafone']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:+38<?= phone_link($contacts['phone_kyivstar']) ?>">
                                            <?= $contacts['phone_kyivstar']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:+38<?= phone_link($contacts['phone_lifecell']) ?>">
                                            <?= $contacts['phone_lifecell']; ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="contacts-form">
                            <form>
                                <div class="form-row">
                                    <label for="contacts-subscribe-email">Подписаться</label>
                                    <div class="form-group-subscribe">
                                        <input type="email" name="subscribe_email" id="contacts-subscribe-email" class="form-control" placeholder="Email">
                                        <button class="btn-subscribe">
                                            <svg width="12" height="10">
                                                <use xlink:href="#sent-icon"></use>
                                            </svg>  
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<!-- App-footer -->
<footer id="app-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="app-footer-item">
                    <div class="app-footer-item__text">
                        <?= date("Y")?> Все права защещены
                    </div>
                    <div class="app-footer-item__text">
                    Дизайн и разработка <a href="https://impressionbureau.pro/" target="_blank">ImpressionBureau</a> <?= date("Y")?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<script src="../dist/app.js"></script>
</body>

</html>