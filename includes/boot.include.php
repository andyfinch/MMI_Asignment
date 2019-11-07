<?php

require_once(__DIR__ . '/config.include.php');
require_once(__DIR__ . '/db.include.php');
require_once(__DIR__ . '/../vendor/smarty/Smarty.class.php');

$smarty = new Smarty();

//$smarty = new Smarty;
$smarty->setTemplateDir(__DIR__ . '/../views')
    ->setPluginsDir(array(__DIR__ . '/../vendor/smarty/plugins'))
    ->setCompileDir(__DIR__ . '/../vendor/smarty/templates_c')
    ->setCacheDir(__DIR__ . '/../vendor/smarty/cache');

require_once(__DIR__ . '/autoloader.include.php');

