<?php

//AddEventHandler("main", "OnEpilog", "setClassError");
AddEventHandler('main', 'onEpilog', 'CheckoutAuthorizedUserOrRedirect');

AddEventHandler('main', 'OnEpilog', '_Check404Error', 1);  
function _Check404Error(){
   if(defined('ERROR_404') && ERROR_404=='Y' || CHTTP::GetLastStatus() == "404 Not Found"){
      GLOBAL $APPLICATION;
      $APPLICATION->RestartBuffer();
      require $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/header.php';
      require $_SERVER['DOCUMENT_ROOT'].'/404.php';
      require $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/footer.php';
   }
}

function setClassError() {
    global $APPLICATION;
var_dump(time());
    if(defined("ERROR_404") ) {
        $APPLICATION->setPageProperty('class_404', 'Y');
    }
}

function CheckoutAuthorizedUserOrRedirect() {
    global $APPLICATION, $USER;

    if(!is_object($USER))
        $USER = $GLOBALS['USER'];

    if(($APPLICATION->getCurPage() != '/pub/' && $APPLICATION->getCurPage() != '/bitrix/' && $APPLICATION->getCurPage() != '/bitrix/admin/') && (!$USER->isAuthorized()))

        LocalRedirect('/pub/');
    
}
