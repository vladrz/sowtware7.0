<?php
/**
 * main functions
 */



 /**
  * loading page
  */
function loadPage($smarty , $controllerName, $actionName = 'index')
{
  include_once PathPrefix . $controllerName . PathPostfix;
  $function = $actionName . 'Action';
  $function($smarty);
}



/**
 * lodaing template
 */
function loadTemplate($smarty, $templateName)
{
  $smarty->display($templateName . TemplatePostfix);
}

/**
 * debuging
 */

 function d($value = null, $die = 1)
 {
   echo 'Debug: <br /><pre>';
   print_r($value);
   echo '</pre>';

   if($die) die;
 }



/**
 * creating array from feedback by DB for SMARTY
 */
function createSmartyRsArray($stmnt)
{
  $smartyArr = array();
  foreach ($stmnt as $row)
  {
    $smartyArr[] = $row;
  }
  return $smartyArr;
}
