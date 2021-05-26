<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(!empty($arResult)):?>
<ul class="mainMenu" data-menu-rel>
<?foreach($arResult as $k=>$arMenuElem):?>
    <li class="mainMenu__item">
        <a class="mainMenu__link<?if($arMenuElem["SELECTED"]=='true'):?> __active<?endif;?>" href="<?=$arMenuElem["LINK"]?>" data-menu-open="<?=$k?>"><?=$arMenuElem["TEXT"]?></a>
    </li>
<?endforeach;?>
<?endif;?>
</ul>