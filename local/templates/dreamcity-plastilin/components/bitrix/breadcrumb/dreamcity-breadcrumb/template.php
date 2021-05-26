<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)?>
<?
if(count($arResult)<=1) return;
?>
<?$e = count($arResult)-1;?>
<div class="breadcrumbs breadcrumbs-adapt" style="max-width: 1319px;">
    <?foreach($arResult as $k=>$arItem):?>
    <?if($e>$k):?>
        <a href="<?=$arItem["LINK"]?>"><?=$arItem["TITLE"]?></a>
    <?else:?>
        <span><?=$arItem["TITLE"]?></span>
    <?endif;?>
    <?endforeach;?>
</div>
