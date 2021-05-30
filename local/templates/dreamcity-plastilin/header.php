<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);

$c404 = $APPLICATION->getPageProperty('class_404');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowHead();?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . DIRECTORY_SEPARATOR . "assets/css/style.min.css");?>
</head>
<body>
<div class="fullScreen">
    <header class="mainHeader<?if($c404=='Y'):?> mainHeader-page404<?endif;?>" id="stiky-header">
        <div class="headerPane">
            <div class="dream-container">
                <div class="headerFlex">
                    <div class="menuPane" id="burger-pane">
                        <div class="menuPane__inner">
                            <div class="menuPane__logo"><a class="menuLogo" href="#"><span class="menuLogo__desktop"><img
                                                src="/local/img/41441bb52226d181cdee3f4fb2ddf21c.svg" alt="Лого"></span><span
                                            class="menuLogo__moibile"><img src="/local/img/4b4f6571f166bb19037e6d41350876ff.svg"
                                                                           alt="Лого"></span></a></div>
                            <div class="menuPane__btn">
                                <button class="arrBtn" id="burger-btn"><span class="arrBtn__inner"><span class="arrBtn__text">Меню
                      </span><span class="arrBtn__ico">
                        <svg class="arrBtn__svgr" width="50px" height="50px">
                          <use xlink:href="/local/img/svg/icons.svg#menuBurger"></use>
                        </svg><span class="arrBtn__abs">
                          <svg width="32px" height="17px">
                            <use xlink:href="/local/img/svg/icons.svg#arrowBurger"></use>
                          </svg></span><span class="arrBtn__cls">
                          <svg width="16px" height="16px">
                            <use xlink:href="/local/img/svg/icons.svg#cls"></use>
                          </svg></span></span></span></button>
                            </div>
                        </div>
                    </div>
                    <nav class="menuNav">
                        <div class="menuList">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/local/include/tpl/header_tpl.php"
                                )
                            );?>
                        </div>
                    </nav>
                    <div class="menuContact __hidden">
                        <div class="boxContact">
                            <button class="aroundIco" data-modal-open="m-4">
                                <div class="aroundIco__abs">
                                    <svg>
                                        <use xlink:href="/local/img/svg/icons.svg#ligntC"></use>
                                    </svg>
                                </div>
                                <div class="aroundIco__inner">
                                    <div class="aroundIco__center">
                                        <svg width="19px" height="18px">
                                            <use xlink:href="/local/img/svg/icons.svg#search"></use>
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
                                        <use xlink:href="/local/img/svg/icons.svg#ligntC"></use>
                                    </svg>
                                </div>
                                <div class="aroundIco__inner">
                                    <div class="aroundIco__center">
                                        <svg width="18px" height="18px">
                                            <use xlink:href="/local/img/svg/icons.svg#phone"></use>
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
                                        <?$APPLICATION->IncludeComponent(
                                            "bitrix:menu",
                                            "plastilin-leftmenu-animated",
                                            Array(
                                                "ALLOW_MULTI_SELECT" => "N",
                                                "CHILD_MENU_TYPE" => "left",
                                                "DELAY" => "N",
                                                "MAX_LEVEL" => "1",
                                                "MENU_CACHE_GET_VARS" => array(""),
                                                "MENU_CACHE_TIME" => "3600",
                                                "MENU_CACHE_TYPE" => "N",
                                                "MENU_CACHE_USE_GROUPS" => "Y",
                                                "ROOT_MENU_TYPE" => "top",
                                                "USE_EXT" => "N"
                                            )
                                        );?>

                                        <div class="collapsedItem__search">
                                            <div class="searchBox">
                                                <div class="fieldBox" data-input-field>
                                                    <input class="customInput" type="search" id="s-34" data-custom-input data-input-dd
                                                           placeholder="Адрес, метро, район или id"><span class="customInput__cls">
                              <button class="customInput__clear" data-dd-clear>
                                <svg width="20px" height="20px">
                                  <use xlink:href="/local/img/svg/icons.svg#cls"></use>
                                </svg>
                              </button></span><span class="customInput__btn">
                              <button class="fieldBox__btn"><span class="fieldBox__bi">
                                  <svg width="23px" height="22px">
                                    <use xlink:href="/local/img/svg/icons.svg#search"></use>
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
                                        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"plastilin-leftmenu-animated-parent", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "plastilin-leftmenu-animated-parent"
	),
	false
);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="siteContent">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/local/include/tpl/header_first_section.php"
            )
        );?>
        <section class="siteSection siteSection-main">
            <div class="screenBox">
                <div class="dream-container">
                    <div class="mainBanner">
                        <div class="mainBanner__inner">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:breadcrumb",
                                "dreamcity-breadcrumb",
                                Array(
                                    "PATH" => "",
                                    "SITE_ID" => "s2",
                                    "START_FROM" => "0"
                                )
                            );?><br>
                            <div class="mainBanner__info">
                                <div class="mainBanner__textfield mainBanner__textfield-static">
                                    <div class="sup-title">Dream <span class="hl">City</span></div>
                                    <h1 class="title-h1 title-h1--mt"><span class="hl">Баннер</span> о коммерческой недвижимости</h1>
                                    <p class="simple-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                        ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                        nascetur ridiculus musLorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                                </div>
                                <div class="mainBanner__bot">
                                    <div class="searchBox">
                                        <div class="fieldBox" data-input-field="">
                                            <input class="customInput" type="search" id="s-1" data-custom-input="" data-input-dd="" placeholder="Адрес, метро, район или id">
                                            <span class="customInput__cls">
                                              <button class="customInput__clear" data-dd-clear="">
                                                <svg width="20px" height="20px">
                                                  <use xlink:href="/local/img/svg/icons.svg#cls"></use>
                                                </svg>
                                              </button>
                                            </span>
                                            <span class="customInput__btn">
                                              <button class="fieldBox__btn">
                                                  <span class="fieldBox__bi">
                                                  <svg width="23px" height="22px">
                                                    <use xlink:href="/local/img/svg/icons.svg#search"></use>
                                                  </svg></span></button>
                                            </span>
                                            <div class="fieldBox__dd" data-dd="">
                                                <div class="ddCollapsed">
                                                    <div class="ddCollapsedList">
                                                        <a class="ddCollapsedList__item" href="#">
                                                            <span class="hl">Моск</span>ва
                                                        </a>
                                                        <a class="ddCollapsedList__item" href="#">
                                                            <span class="hl">Моск</span>овский, поселок
                                                            <span class="hl">Моск</span>овский, г.
                                                            <span class="hl">Моск</span>ва
                                                        </a>
                                                        <a class="ddCollapsedList__item" href="#">
                                                            <span class="hl">Моск</span>али, Томский р-а, Иркутская обл.
                                                        </a>
                                                        <a class="ddCollapsedList__item" href="#">
                                                            <span class="hl">Моск</span>овский, г.
                                                            Екатеринбург, Сверловская обл.</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mainBanner__slider">
                                <div class="radialSlider radialSlider-single">
                                    <div class="radialSlider-inner">
                                        <div class="radialSlider-inner--item __active-slide">
                                            <img src="/local/img/banner-1.3e9787592d4ef739f7e2a9e4b192a9eb.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mainBanner__map">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="botBar botBar-rel">
                    <div class="dream-container">
                        <button class="arrBtn arrBtn-white" data-modal-open="m-3">
                            <span class="arrBtn__inner">
                                <span class="arrBtn__text">Подбор недвижимости</span>
                                <span class="arrBtn__ico">
                                    <svg width="50px" height="50px">
                                      <use xlink:href="/local/img/svg/icons.svg#menuBurger"></use>
                                    </svg>
                                    <span class="arrBtn__abs">
                                      <svg width="32px" height="17px">
                                        <use xlink:href="/local/img/svg/icons.svg#arrowBurger"></use>
                                      </svg>
                                    </span>
                                    <span class="arrBtn__cls">
                                      <svg width="16px" height="16px">
                                        <use xlink:href="/local/img/svg/icons.svg#cls"></use>
                                      </svg>
                                    </span>
                                </span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </section>