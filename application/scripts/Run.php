#!/bin/php
<?php
define("APPLICATION_PATH",  dirname(dirname(dirname(__FILE__))));
$app  = new Yaf_Application(APPLICATION_PATH . "/conf/application.ini");
$app->bootstrap()->execute("main", "example");
function main($name){
    $mIndex = new IndexModel();
    print_r($mIndex->getIndex());
}
