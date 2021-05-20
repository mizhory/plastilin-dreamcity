<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
use \Bitrix\Main\Page\Asset;
$c404 = $APPLICATION->getPageProperty('class_404');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowHead();?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "assets/css/style.min.css");?>
</head>
<body><?$APPLICATION->ShowPanel();?>
<div class="fullScreen">
    <header class="mainHeader<?if($c404=='Y'):?> mainHeader-page404<?endif;?>" id="stiky-header">
        <div class="headerPane">
            <div class="dream-container">
                <div class="headerFlex">
                    <div class="menuPane" id="burger-pane">
                        <div class="menuPane__inner">
                            <div class="menuPane__logo"><a class="menuLogo" href="#"><span class="menuLogo__desktop"><img
                                                src="img/41441bb52226d181cdee3f4fb2ddf21c.svg" alt="Лого"></span><span
                                            class="menuLogo__moibile"><img src="img/4b4f6571f166bb19037e6d41350876ff.svg"
                                                                           alt="Лого"></span></a></div>
                            <div class="menuPane__btn">
                                <button class="arrBtn" id="burger-btn"><span class="arrBtn__inner"><span class="arrBtn__text">Меню
                      </span><span class="arrBtn__ico">
                        <svg class="arrBtn__svgr" width="50px" height="50px">
                          <use xlink:href="/img/svg/icons.svg#menuBurger"></use>
                        </svg><span class="arrBtn__abs">
                          <svg width="32px" height="17px">
                            <use xlink:href="/img/svg/icons.svg#arrowBurger"></use>
                          </svg></span><span class="arrBtn__cls">
                          <svg width="16px" height="16px">
                            <use xlink:href="/img/svg/icons.svg#cls"></use>
                          </svg></span></span></span></button>
                            </div>
                        </div>
                    </div>
                    <nav class="menuNav">
                        <div class="menuList">
                            <div class="menuList__item"><a class="menuList__point" href="#">Об агентстве</a></div>
                            <div class="menuList__item"><a class="menuList__point" href="#">Контакты</a></div>
                            <div class="menuList__item">
                                <button class="menuList__point" data-modal-open="m-2"><span class="menuList__ico"><img
                                                src="data:image/svg+xml,%3csvg id='Capa_1' data-name='Capa 1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 18 13.69'%3e%3cdefs%3e%3cstyle%3e.cls-1%7bfill:%2343b7b5;%7d%3c/style%3e%3c/defs%3e%3ctitle%3e04 Онлайн-оплата%3c/title%3e%3cpath class='cls-1' d='M0,12.65a1,1,0,0,0,1,1H17a1,1,0,0,0,1-1V11.18H0Z'/%3e%3cpath class='cls-1' d='M17,0H1.05A1,1,0,0,0,0,1.05V9.74H18V1.05A1,1,0,0,0,17,0ZM4.87,4.43a1.52,1.52,0,0,1-1-.4,1.48,1.48,0,0,1-1,.4,1.47,1.47,0,0,1,0-2.93,1.44,1.44,0,0,1,1,.41,1.46,1.46,0,1,1,1,2.52Z'/%3e%3c/svg%3e"
                                                alt="Онлайн оплата"></span> Онлайн-оплата</button>
                            </div>
                        </div>
                    </nav>
                    <div class="menuContact __hidden">
                        <div class="boxContact">
                            <button class="aroundIco" data-modal-open="m-4">
                                <div class="aroundIco__abs">
                                    <svg>
                                        <use xlink:href="/img/svg/icons.svg#ligntC"></use>
                                    </svg>
                                </div>
                                <div class="aroundIco__inner">
                                    <div class="aroundIco__center">
                                        <svg width="19px" height="18px">
                                            <use xlink:href="/img/svg/icons.svg#search"></use>
                                        </svg>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="menuContact">
                        <div class="boxContact">
                            <button class="aroundIco" data-modal-open="m-1">
                                <div class="aroundIco__abs">
                                    <svg>
                                        <use xlink:href="/img/svg/icons.svg#ligntC"></use>
                                    </svg>
                                </div>
                                <div class="aroundIco__inner">
                                    <div class="aroundIco__center">
                                        <svg width="18px" height="18px">
                                            <use xlink:href="/img/svg/icons.svg#phone"></use>
                                        </svg>
                                    </div>
                                </div>
                            </button>
                            <div class="boxContact__info"><a class="boxContact__tel" href="tel:+74956476140">+7 (495) 647-61-40</a>
                                <div class="boxContact__sch">с 10:00 до 22:00, ежедневно</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="headerPane__menu headerPane__menu-collapsed" id="main-menu">
                <div class="headerPane__abs">
                    <div class="dream-container dream-container-decorate">
                        <div class="headerPane__pane"></div>
                    </div>
                </div>
                <div class="headerPane__real">
                    <div class="dream-container">
                        <div class="collapsedMenu">
                            <div class="collapsedMenu__item collapsedMenu__left">
                                <div class="collapsedItem">
                                    <div class="collapsedItem__inner">
                                        <ul class="mainMenu" data-menu-rel>
                                            <li class="mainMenu__item"><a class="mainMenu__link __active" href="#"
                                                                          data-menu-open="1">Аренда</a></li>
                                            <li class="mainMenu__item"><a class="mainMenu__link" href="#" data-menu-open="2">Продажа</a>
                                            </li>
                                            <li class="mainMenu__item"><a class="mainMenu__link" href="#" data-menu-open="3">Коммерческая
                                                    недвижимость</a></li>
                                        </ul>
                                        <div class="collapsedItem__search">
                                            <div class="searchBox">
                                                <div class="fieldBox" data-input-field>
                                                    <input class="customInput" type="search" id="s-34" data-custom-input data-input-dd
                                                           placeholder="Адрес, метро, район или id"><span class="customInput__cls">
                              <button class="customInput__clear" data-dd-clear>
                                <svg width="20px" height="20px">
                                  <use xlink:href="/img/svg/icons.svg#cls"></use>
                                </svg>
                              </button></span><span class="customInput__btn">
                              <button class="fieldBox__btn"><span class="fieldBox__bi">
                                  <svg width="23px" height="22px">
                                    <use xlink:href="/img/svg/icons.svg#search"></use>
                                  </svg></span></button></span>
                                                    <div class="fieldBox__dd" data-dd>
                                                        <div class="ddCollapsed">
                                                            <div class="ddCollapsedList"><a class="ddCollapsedList__item" href="#"><span
                                                                            class="hl">Моск</span>ва</a><a class="ddCollapsedList__item" href="#"><span
                                                                            class="hl">Моск</span>овский, поселок <span class="hl">Моск</span>овский, г. <span
                                                                            class="hl">Моск</span>ва</a><a class="ddCollapsedList__item" href="#"><span
                                                                            class="hl">Моск</span>али, Томский р-а, Иркутская обл.</a><a
                                                                        class="ddCollapsedList__item" href="#"><span class="hl">Моск</span>овский, г.
                                                                    Екатеринбург, Сверловская обл.</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapsedMenu__item collapsedMenu__right">
                                <div class="collapsedItem">
                                    <div class="collapsedItem__inner">
                                        <div class="collapsedNext __active" data-menu-content="1">
                                            <div class="mobileHLink"><a href="#">Смотреть все </a></div>
                                            <ul class="nextMenu">
                                                <li class="nextMenu__item"><a class="nextMenu__link" href="#">Квартира</a></li>
                                                <li class="nextMenu__item"><a class="nextMenu__link" href="#">Таунхаус</a></li>
                                                <li class="nextMenu__item"><a class="nextMenu__link" href="#">Дом</a></li>
                                            </ul>
                                        </div>
                                        <div class="collapsedNext" data-menu-content="2">
                                            <ul class="nextMenu">
                                                <li class="nextMenu__item"><a class="nextMenu__link" href="#">Квартира 1</a></li>
                                                <li class="nextMenu__item"><a class="nextMenu__link" href="#">Таунхаус 1</a></li>
                                                <li class="nextMenu__item"><a class="nextMenu__link" href="#">Дом 1</a></li>
                                            </ul>
                                        </div>
                                        <div class="collapsedNext" data-menu-content="3">
                                            <ul class="nextMenu">
                                                <li class="nextMenu__item"><a class="nextMenu__link" href="#">Аренда </a>
                                                    <ul class="lastMenu">
                                                        <li class="lastMenu__item"> <a class="lastMenu__link" href="#">Офис</a></li>
                                                        <li class="lastMenu__item"> <a class="lastMenu__link" href="#">Помещение свободного
                                                                назначения</a></li>
                                                        <li class="lastMenu__item"> <a class="lastMenu__link" href="#">Здание</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nextMenu__item"><a class="nextMenu__link" href="#">Продажа</a>
                                                    <ul class="lastMenu">
                                                        <li class="lastMenu__item"> <a class="lastMenu__link" href="#">Офис</a></li>
                                                        <li class="lastMenu__item"> <a class="lastMenu__link" href="#">Помещение свободного
                                                                назначения</a></li>
                                                        <li class="lastMenu__item"> <a class="lastMenu__link" href="#">Здание</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>