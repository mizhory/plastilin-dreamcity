<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(!empty($arResult)):?>

<?foreach($arResult as $k=>$arMenuElem):?>
    <?#=$arMenuElem["TEXT"]?>
        <div class="collapsedNext<?if($arMenuElem["SELECTED"]=='true'):?> __active<?endif;?>" data-menu-content="<?=$k?>">
            <div class="mobileHLink"><a href="<?=$arMenuElem["LINK"]?>">Смотреть все <?=$k?></a></div>
            <ul class="nextMenu">
                <li class="nextMenu__item"><a class="nextMenu__link" href="#">Квартира <?=$k?></a></li>
                <li class="nextMenu__item"><a class="nextMenu__link" href="#">Таунхаус <?=$k?></a></li>
                <li class="nextMenu__item"><a class="nextMenu__link" href="#">Дом <?=$k?></a></li>
            </ul>
        </div>
<?endforeach;?>
<?endif;?>
<!--
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
-->