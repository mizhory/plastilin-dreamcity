<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(!empty($arResult)):
$i = 0;
?>
<ul class="mainMenu" data-menu-rel>
<?foreach($arResult as $k=>$arMenuElem):
$i++;
?>
    <li class="mainMenu__item">
        <a class="mainMenu__link<?if($arMenuElem["SELECTED"]=='true'):?> __active<?endif;?>" href="<?=$arMenuElem["LINK"]?>" data-menu-open="<?=$i?>"><?=$arMenuElem["TEXT"]?></a>
    </li>
<?endforeach;?>
<?endif;?>
</ul>