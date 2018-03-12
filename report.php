<?php
require_once("config.php");
session_start();
if (isset($_SESSION['lastinteraction']))
{
 $time = microtime(true) -  $_SESSION['lastinteraction'];
}
if (isset($_SESSION['lastinteraction']) && $time < $throttletime / 1000)
{
  die('Limited');
}
else
{
if ($reports == false)
{
  header('location: ' . $root . '?reporterr=true');
}
elseif (!isset($_POST['report']))
{
  header('location: ' . $root);
}
else
{
  $_SESSION['lastinteraction'] = microtime(true);
  foreach($server->query("SELECT * FROM `" . $credentials['ptable'] . "` WHERE `pid` = " . $server->quote($_POST['report'])) as $rows)
  {
    echo $rows['rep'] + 1;
    if ($rows['rep'] >= $maxrep)
    {
      $server->query("DELETE FROM `" . $credentials['ptable'] . "` WHERE `pid` = " . $server->quote($_POST['report']));
    }
    else
    {
      $server->query("UPDATE `" . $credentials['ptable'] . "` SET `rep`=rep+1 WHERE `pid` = " . $server->quote($_POST['report']));
    }
  }
}
}
?>
