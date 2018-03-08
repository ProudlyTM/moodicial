<?php
 require_once("head.php");
 if (($_SERVER['REQUEST_URI'] == ((empty($path) ? "/" : $path) . 'install.php?nodb=true')) || ($_SERVER['REQUEST_URI'] == ((empty($path) ? "/" : $path) . 'install.php')))
 {
  $visits = 0;
 }
 else
 {
  require_once("metrics.php");
 }
 echo "
 <body>
  <div class='page-header'>";
    if ($metrics && $metricsset['visits'] == 'yes')
    {
     echo "<div class='badge badge-primary float-right' id='visits'>" . $LANG['visits'] . ": " . $visits . "</div>";
    }
    if ($langbadge)
    {
     echo "<div class='badge badge-info float-left' id='langbadge' onclick='langsel()'>" . $LANG['langbadge'] . ": <span id='lang'>" . $language . "</span></div>";
    }
  echo "<br><br>
    <a href='$root'><h1 id='title'>$info[title]</h1></a>
  </div>
  <div id='dummy'></div>
  <div id='pbarc'>
   <div class='progress sticky-bottom'>
    <div class='progress-bar progress-bar-striped bg-primary' style='width: 0%'></div>
   </div>
  </div>
  <script src='resources/scripts/animations.js'></script>
  <br>
  ";
?>
