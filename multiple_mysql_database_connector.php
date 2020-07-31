<?php
/*
* Multiple database connector
* Compatible: < PHP 7
* Author: Gowrishankar Balu
*/

// Database 1
$db_connector_1 = mysql_connect('localhost',  'dbuser',  'dbpassword') or die('Error: Database 1 server connection failed!');
mysql_select_db('database_1',  $db_connector_1) or die('Error: Database 1 selection failed!');

// Database 2
$db_connector_2 = mysql_connect('localhost',  'dbuser',  'dbpassword') or die('Error: Database 2 server connection failed!');
mysql_select_db('database_2',  $db_connector_2) or die('Error: Database 2 selection failed!');

// Database 3
$db_connector_3 = mysql_connect('localhost',  'dbuser',  'dbpassword') or die('Error: Database 3 server connection failed!');
mysql_select_db('database_3',  $db_connector_3) or die('Error: Database 3 selection failed!');



?>
