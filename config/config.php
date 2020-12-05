<?php

/**
 *  Файл настроек
 */

//Константы для обращения к контроллерам
define ('PathPrefix', 'controllers/');
define ('PathPostfix', 'Controller.php');

//>Используемый шаблон
$template = 'default';

//пути к файлам шаблонов (*.tpl)
define ('TemplatePrefix',"./views/{$template}/");
define ('Template', '.tpl');

//пути к файлам шаблонов в вебпространстве
define ('TemplateWebPath', "./templates/{$template}/");

//<

//> Инициализация шаблонизатора Smarty
// put full path to Smarty.class.php
require './library/Smarty/libs/Smarty.class.php';

$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('./tmp/Smarty/templates_c');
$smarty->setCacheDir('./tmp/Smarty/cache');
$smarty->setConfigDir('./library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);
//<