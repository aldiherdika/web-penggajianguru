<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "penggajian";

mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("penggajian") or die(mysql_error());

?>