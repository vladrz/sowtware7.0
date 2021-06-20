<?php
/**
 * model for list of f1,f2 teams
 */

/**
 * getting teams for formuls
 */
function getTeamForList($fId)
{
  $PDO = db_connect();
  $stmnt = $PDO->prepare('SELECT * FROM list WHERE parent_id = :parent_id');
  $stmnt->execute(array(":parent_id"=>$fId));

  return createSmartyRsArray($stmnt);

}







function getAllMainPosWithChildren(){
  $PDO = db_connect();
  $parent_id = 0;
  $stmnt = $PDO->prepare('SELECT * FROM list WHERE parent_id = :parent_id');
  $stmnt->execute(array(":parent_id"=>$parent_id));
  $smartyRS = array();
  foreach ($stmnt as $row)
  {
      $rslistTeam = getTeamForList($row['id']);
      if($rslistTeam)
      {
        $row['team'] = $rslistTeam;
      }
      $smartyRS[] = $row;
  }
  //$d($smartyRS);
  return $smartyRS; //array of main Formuls
  //$smartyRS looks like
  //Array ( [id] => 1 [0] => 1 [name] => formula1 [1] => formula1 [parent_id] => 0 [2] => 0 [team] => Array ()
}
