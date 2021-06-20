<?php

/**
 * main page controller
 */


 //including models
 include_once '../models/ListModel.php';
 include_once '../models/ProductsModel.php';


function indexAction($smarty)
{
  //record set of List
  $rsList = getAllMainPosWithChildren();
  //$d($rsList);
  $rsProducts = getLastProducts(16);

  $smarty->assign('rsList', $rsList);
  $smarty->assign('pageTitle', 'Main page');
  $smarty->assign('rsProducts', $rsProducts);
  loadTemplate($smarty, 'index');
  loadTemplate($smarty, 'header');
  loadTemplate($smarty, 'footer');
}

 ?>
