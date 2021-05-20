<?php

AddEventHandler("main", "OnEpilog", "setClass404");
function setClass404() {
    global $APPLICATION;
    if(defined("ERROR_404") ) {
        $APPLICATION->setPageProperty('class_404', 'Y');
    }
}