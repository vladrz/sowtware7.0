<?php
//Constants for appealing to controllers
define('PathPrefix' , '../controllers/');
define('PathPostfix' , 'Controller.php');

//using template
$template = 'default';

//paths to templates
define ('TemplatePrefix' , "../views/{$template}");
define('TemplatePostfix', '.tpl');


define('TemplateWebPath' , "/templates/{$template}/");
//initializing Smarty
//path to Smarty.class.php
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);
