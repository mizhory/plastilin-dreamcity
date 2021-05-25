<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(!empty($arResult)):?>
<?foreach($arResult as $k=>$arMenuElem):?>
        <div class="menuList__item"><a class="menuList__point" href="<?=$arMenuElem["LINK"]?>"><?=$arMenuElem["TEXT"]?></a></div>
<?endforeach;?>
<?endif;?>
<div class="menuList__item">
    <button class="menuList__point" data-modal-open="m-2"><span class="menuList__ico"><img
                src="data:image/svg+xml,%3csvg id='Capa_1' data-name='Capa 1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 18 13.69'%3e%3cdefs%3e%3cstyle%3e.cls-1%7bfill:%2343b7b5;%7d%3c/style%3e%3c/defs%3e%3ctitle%3e04 Онлайн-оплата%3c/title%3e%3cpath class='cls-1' d='M0,12.65a1,1,0,0,0,1,1H17a1,1,0,0,0,1-1V11.18H0Z'/%3e%3cpath class='cls-1' d='M17,0H1.05A1,1,0,0,0,0,1.05V9.74H18V1.05A1,1,0,0,0,17,0ZM4.87,4.43a1.52,1.52,0,0,1-1-.4,1.48,1.48,0,0,1-1,.4,1.47,1.47,0,0,1,0-2.93,1.44,1.44,0,0,1,1,.41,1.46,1.46,0,1,1,1,2.52Z'/%3e%3c/svg%3e"
                alt="Онлайн оплата"></span> Онлайн-оплата</button>



</div>
<script>
    $(document).ready(function() {
        $('body').on('click', '.menuList__point', function() {
            alert('Действие - виджет оплаты');
        })
    })
</script>