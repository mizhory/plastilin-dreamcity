<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
use \Bitrix\Main\Page\Asset;
?>
</div>

    <?Asset::getInstance()->addJs("https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js");?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "assets/js/libs.min.js");?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "assets/js/old.js");?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "assets/js/main.js");?>
</body>
</html>