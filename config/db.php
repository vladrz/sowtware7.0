<?php
ini_set('display_errors', TRUE);
function db_connect()
{
  $dblocation = "127.0.0.1";
  $dbname = "f1";
  $dbuser = "root";
  $dbpasswd = "";

  $dbh = "mysql:host={$dblocation};dbname={$dbname}";
  $PDO = new PDO($dbh, $dbuser, $dbpasswd);
  return $PDO;
}
