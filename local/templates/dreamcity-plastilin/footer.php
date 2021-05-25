<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
use Bitrix\Main\Page\Asset;
?>
</main>
<footer class="mainFooter">
    <div class="mainFooter__top">
        <div class="dream-container">
            <div class="footerFlex">
                <div class="footerFlex__contact">
                    <div class="boxContact">
                        <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/local/include/tpl/footer/phone.php"
                                )
                            );?>
                    </div>
                </div>
                <div class="footerFlex__contact">
                    <div class="boxContact">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/local/include/tpl/footer/mail.php"
                            )
                        );?>

                    </div>
                </div>
                <div class="footerFlex__social">
                    <div class="socialList">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/local/include/tpl/footer/sonet.php"
                            )
                        );?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mainFooter__bottom">
        <div class="dream-container">
            <div class="footerNav">
                <div class="footerNav__item">
                    <div class="footerItem">
                        <div class="footerItem__menu">
                            <div class="footerMenu">
                                <div class="footerMenu__item" style="-webkit-transition-delay: 0s; -o-transition-delay: 0s; transition-delay: 0s;">
                                    <div class="footerMenu__link">Об агентстве</div>
                                </div>
                                <div class="footerMenu__item" style="-webkit-transition-delay: 0.05s; -o-transition-delay: 0.05s; transition-delay: 0.05s;">
                                    <div class="footerMenu__link">Условия и оплата</div>
                                </div>
                                <div class="footerMenu__item" style="-webkit-transition-delay: 0.1s; -o-transition-delay: 0.1s; transition-delay: 0.1s;">
                                    <div class="footerMenu__link">Вакансии</div>
                                </div>
                                <div class="footerMenu__item" style="-webkit-transition-delay: 0.15s; -o-transition-delay: 0.15s; transition-delay: 0.15s;">
                                    <div class="footerMenu__link">Новости</div>
                                </div>
                                <div class="footerMenu__item" style="-webkit-transition-delay: 0.2s; -o-transition-delay: 0.2s; transition-delay: 0.2s;">
                                    <div class="footerMenu__link">Контакты</div>
                                </div>
                            </div>
                        </div>
                        <div class="footerItem__abs">
                            <div class="footerItem__ico">
                                <svg>
                                    <use xlink:href="/local/img/svg/icons.svg#footer-1"></use>
                                </svg>
                            </div>
                            <div class="footerItem__name">О компании</div>
                        </div>
                    </div>
                </div>
                <div class="footerNav__item">
                    <div class="footerItem">
                        <div class="footerItem__menu">
                            <div class="footerMenu">
                                <div class="footerMenu__item" style="-webkit-transition-delay: 0s; -o-transition-delay: 0s; transition-delay: 0s;">
                                    <div class="footerMenu__link">Квартира</div>
                                </div>
                                <div class="footerMenu__item" style="-webkit-transition-delay: 0.05s; -o-transition-delay: 0.05s; transition-delay: 0.05s;">
                                    <div class="footerMenu__link">Таунхаус</div>
                                </div>
                                <div class="footerMenu__item" style="-webkit-transition-delay: 0.1s; -o-transition-delay: 0.1s; transition-delay: 0.1s;">
                                    <div class="footerMenu__link">Дом</div>
                                </div>
                            </div>
                        </div>
                        <div class="footerItem__abs">
                            <div class="footerItem__ico">
                                <svg>
                                    <use xlink:href="/local/img/svg/icons.svg#footer-2"></use>
                                </svg>
                            </div>
                            <div class="footerItem__name">Аренда </div>
                        </div>
                    </div>
                </div>
                <div class="footerNav__item">
                    <div class="footerItem">
                        <div class="footerItem__menu">
                            <div class="footerMenu">
                                <div class="footerMenu__item" style="-webkit-transition-delay: 0s; -o-transition-delay: 0s; transition-delay: 0s;">
                                    <div class="footerMenu__link">Квартира</div>
                                </div>
                                <div class="footerMenu__item" style="-webkit-transition-delay: 0.05s; -o-transition-delay: 0.05s; transition-delay: 0.05s;">
                                    <div class="footerMenu__link">Таунхаус</div>
                                </div>
                                <div class="footerMenu__item" style="-webkit-transition-delay: 0.1s; -o-transition-delay: 0.1s; transition-delay: 0.1s;">
                                    <div class="footerMenu__link">Дом</div>
                                </div>
                            </div>
                        </div>
                        <div class="footerItem__abs">
                            <div class="footerItem__ico">
                                <svg>
                                    <use xlink:href="/local/img/svg/icons.svg#footer-3"></use>
                                </svg>
                            </div>
                            <div class="footerItem__name">Продажа</div>
                        </div>
                    </div>
                </div>
                <div class="footerNav__item">
                    <div class="footerItem">
                        <div class="footerItem__menu">
                            <div class="footerMenu">
                                <div class="footerMenu__item" style="-webkit-transition-delay: 0s; -o-transition-delay: 0s; transition-delay: 0s;">
                                    <div class="footerMenu__link">Аренда коммерческой недвижимости</div>
                                </div>
                                <div class="footerMenu__item" style="-webkit-transition-delay: 0.05s; -o-transition-delay: 0.05s; transition-delay: 0.05s;">
                                    <div class="footerMenu__link">Продажа коммерческой недвижимости</div>
                                </div>
                            </div>
                        </div>
                        <div class="footerItem__abs">
                            <div class="footerItem__ico">
                                <svg>
                                    <use xlink:href="/local/img/svg/icons.svg#footer-4"></use>
                                </svg>
                            </div>
                            <div class="footerItem__name">Коммерческая</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/local/include/tpl/modal_tpl.php"
    )
);?>
</div>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <?Asset::getInstance()->addJs("https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js");?>
    <?Asset::getInstance()->addJs("/local/assets/js/libs.min.js");?>
    <?Asset::getInstance()->addJs("/local/assets/js/old.js");?>
    <?Asset::getInstance()->addJs("/local/assets/js/main.js");?>
</body>
</html>