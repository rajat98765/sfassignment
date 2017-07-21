<?php
session_start();
$user=$_SESSION['select1'];
$link=mysql_connect("localhost","id2212267_rajat","arpanchutia");
mysql_select_db("id2212267_sf5");
$res=mysql_query("SELECT * FROM chat WHERE username='$user'");
$row=mysql_fetch_array($res);
	echo $row["username"]." ".":"." ".$row["msz"]." ".$row["date"];
	echo "<br>";

?>