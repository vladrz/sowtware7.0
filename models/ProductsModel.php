<?php

/**
 * model for poducts
 */

 function getLastProducts($limit=null)
 {
   $PDO = db_connect();
   $sql = "SELECT * FROM drivers ORDER BY id DESC LIMIT {$limit}";
   /*if($limit)
   {
     $sql .= ' LIMIT limit = :limit';
   }*/
   echo $sql;
   $stmnt = $PDO->prepare($sql);
   $stmnt->execute();
   return createSmartyRsArray($stmnt);
 }
