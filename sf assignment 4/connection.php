<?php

$host ="localhost"; //hostname
$username="id2145676_rajat"; //usernameto data base
$password ="arpanchutia";  
$db_name ="id2145676_sf4";

//connect to database
mysql_connect("$host","$username","$password")or die("cannot connect to server");
//select database
mysql_select_db("$db_name")or die("cannot select database");
//this file we have to include so no html is needed whenever we wanna connect to data base
?>