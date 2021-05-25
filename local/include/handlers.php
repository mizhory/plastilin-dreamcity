<?php

AddEventHandler("main", "OnEpilog", "setClass404");
AddEventHandler('main', 'onEpilog', 'CheckoutAuthorizedUserOrRedirect');


function setClass404() {
    global $APPLICATION;
    if(defined("ERROR_404") ) {
        $APPLICATION->setPageProperty('class_404', 'Y');
    }
}

function CheckoutAuthorizedUserOrRedirect() {
    global $APPLICATION, $USER;

    if(!is_object($USER))
        $USER = $GLOBALS['USER'];

    if(($APPLICATION->getCurPage() != '/pub/' && $APPLICATION->getCurPage() != '/bitrix/') && !$USER->isAuthorized()){
        LocalRedirect('/pub/');
    }
}