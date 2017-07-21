<?php
include('connection.php');

//set variable
$passkey=$_GET['passkey'];		//get the value from email and sets it here in our program
//now look at yor tableand make sure there is only one passkey
$sql1="SELECT * FROM temp WHERE code='$passkey'" ; 		//1 user per email now what acton we wnna perform select all the informatio from table where code =passkey
$result1=mysql_query($sql1) ;
//if success queried then go an d insert in perm table
if($result1){
	
	//how many rows have paasske
	$count=mysql_num_rows($result1);
	
	//if passkey is in database ,retrieve data
	if($count ==1){
		
		$rows=mysql_fetch_array($result1);
		$namex=$rows['username'];		//convert into variable by takng data from your temp database and use here
		$emailx=$rows['email'];
		$passwordx=$rows['password'];
		
		//takeoutspaces in username to test out spam
		$name=str_replace(' ','',$namex);
		$email=str_replace(' ','',$emailx);
		$password=str_replace(' ','',$passwordx);
		
		//insert into users table permananent able
		$sql2 = "INSERT INTO game SET username='$name', email='$email', password='$password'";
		$result2 = mysql_query($sql2);
			//remove tem database
	if($result2){
		echo ("Your have created your account successfully.You can now login from home page.");
		
		//remove from temp
		$sql3="DELETE FROM temp WHERE code='$passkey'";
		$result3 = mysql_query($sql3);
	}
	}else{
		echo "wrong confirmation code";
	}

}else{
	echo "you are doing something wrong";
}
?>