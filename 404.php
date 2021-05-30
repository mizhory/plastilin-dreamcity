<? if ($_SERVER['DOCUMENT_URI'] == "/404.php") {
 $_SERVER['REQUEST_URI'] = $_SERVER['DOCUMENT_URI'];
}
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus('404 Not Found');
@define('ERROR_404', 'Y');
//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("Страница не найдена"); ?>  
ТУТ ТЕКСТ ВСЯКИЙ
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>