<?php
 // Website information
 $info = array (
  'title'			=> 'Moodicial'
 );
 
 $credentials = array (
  'hostname'  	    => '127.0.0.1',
  'port' 	        => '3306',
  'username' 	    => 'root',
  'password' 	    => '',
  'db' 		        => 'moodicial',
  'ptable' 	        => 'moodicial_posts',
 );
 
 $maxrep = 5;
 $path= '/moodicial';
 
 // From now on, don't edit anything as you could break the whole website.
 
 $server = new PDO('mysql:host=' . $credentials['hostname'] . ':' . $credentials['port'] . ';dbname=' . $credentials['db'] . ';charset=utf8', $credentials['username'], $credentials['password']);
 $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . "://" . $_SERVER['HTTP_HOST'] . $path;
?>