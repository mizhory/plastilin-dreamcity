<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(!empty($arResult)):
$previousLevel = 0;
$i=0;
?>

    <?foreach($arResult as $k=>$arMenuElem):?>
        <?if ($previousLevel && $arMenuElem["DEPTH_LEVEL"] < $previousLevel):?>
                <?=str_repeat("</ul></div>", ($previousLevel - $arMenuElem["DEPTH_LEVEL"]));?>
        <?endif?>
        <?if($arMenuElem["IS_PARENT"]==true):
$parent_menu_id = $arMenuElem['PARAMS']['MENU_ID'];
$i++;
?>
            <div class="collapsedNext<?if($arMenuElem["SELECTED"]=='true'):?> __active<?endif;?>" data-menu-content="<?=$i?>">
                <div class="mobileHLink"><a href="<?=$arMenuElem["LINK"]?>">Смотреть все</a></div>
                <ul class="nextMenu">
        <?else:?>
					<?if($arMenuElem['PARAMS']['MENU_ID'] == $parent_menu_id):?>
                		<li class="nextMenu__item"><a class="nextMenu__link" href="<?=$arMenuElem["LINK"]?>"><?=$arMenuElem["TEXT"]?></a></li>
					<?endif;?>
		<?endif;?>
        <?$previousLevel = $arMenuElem["DEPTH_LEVEL"];?>
    <?endforeach;?>
    <?if ($previousLevel > 1)://close last item tags?>
        <?=str_repeat("</ul></div>", ($previousLevel-1) );?>
    <?endif?>
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