<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Контакты");
$APPLICATION->SetPageProperty('title', 'Web Art+ | Контакты');
?>

<!-- Контакты + ФОС -->
<div class="contact-form pt-90 pb-30">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>Нужен классный сайт?</h2>
                <p>Оставьте заявку в форме ниже и мы всё сделаем!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="contact-info">
                    <address>
                        <ul>
                            <li>
                                <i aria-hidden="true" class="fa fa-map-marker brand-color"></i>
                                <div class="address">
                                    Мы находимся по адресу:
                                    <br>
                                    <p>г. Владимир, ул. Лакина, 139</p>
                                </div>
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-phone brand-color"></i>
                                <div class="phone">
                                    <p>+7 (960) 721-04-40</p>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-envelope brand-color"></i>
                                <div class="mail">
                                    <p>
                                        <a href="mailto:webartplus@mail.ru">webartplus@mail.ru</a>
                                    </p>
                                </div>
                            </li>
                            <li></li>
                        </ul>
                    </address>
                </div>
            </div>
            <? $APPLICATION->IncludeComponent("webart:main.feedback", "ContactsPageForm", [
                "EMAIL_TO"         => "webartplus@mail.ru",
                "EVENT_MESSAGE_ID" => ["7"],
                "OK_TEXT"          => "Спасибо, ваше сообщение принято.",
                "REQUIRED_FIELDS"  => ["NAME", "EMAIL", 'PHONE'],
                "USE_CAPTCHA"      => "N",
                "AJAX_MODE"        => "Y",
            ]); ?>
        </div>
    </div>
</div>

<!-- Карта -->
<div class="map-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="ysmap" class="mtb-90">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4e7604ed226120a64db3479add48c7df5e6b873ee4b408f3368e803d6a32f2d5&amp;width=1170&amp;height=573&amp;lang=ru_RU&amp;scroll=false"></script>
                </div>
            </div>
        </div>
    </div>
</div>

<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>