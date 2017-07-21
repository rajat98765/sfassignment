<html>
<body>
<?php
//to validate somethings
include('connection.php'); //include this whenever we need or post into databasew

//test to see if username is alphanumeric
$test=$_POST['username']; //we wnna store username entered in a variable

 				//test whether the variable is alpha numerivc which we have passed built in php function
	
	//duplicate name
	$query="SELECT * FROM game WHERE username = '{$_POST['username']}'"; //look into databse to check if name is alredy taken or not *sleevt all nmae to check
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	
	if($num==0){
		//test for duplicate email
		$query2="SELECT * FROM game WHERE email ='{$_POST['email1']}'";
		$result2= mysql_query($query2);
		$num2 = mysql_num_rows($result2);
		
			if($num2==0){
				//if emails and passwords match up
				if(($_POST['pwd1']==$_POST['pwd2'])&&($_POST['email1']==$_POST['email2'])){
					
					//generate random confirmation code
					$confirm_code=md5(uniqid(rand()));  
					
					//get rid of all html from  hackers
					$name=strip_tags($_POST['username']);
					$email=strip_tags($_POST['email1']);
					$pwd=strip_tags($_POST['pwd1']);
					
					// insert data into database temporary
					$sql="INSERT INTO temp SET code='$confirm_code', username='$name',email='$email',password='$pwd'";
					$result=mysql_query($sql);
						
						//sending them a confirmatio  email after succesfull storage into temp dsatabse
					    if($result){
							$to=$email;
							$subject="Registration Confirmation";	//give the email a subject
							
							//your message including link
							$message='
							
							Thanks for signing up !
							Your account has been created with the following credential
							
							-------------------------
							username: '.$name.'
							password: '.$pwd.'
							-------------------------
							
							You have to activate it first by clicking the URL given below:
							Click here to Activate your Account : 
							https:https://rajatsf5.000webhostapp.com/confirmation.php?passkey='.$confirm_code.'  
							
							';
							$header="From:Rajat <rajatsinghk4@gmail.com>";
	// passkey='.$confirmcode.' will transfer value of confirm code to passkey in next page otherwise passkey=$confirm code only equate whatever is wriitten ie confirm code only and not go further
							$sentmail=mail("$to","$subject","$message","$header"); 
							echo ("Thank You !!!") ;   
						}
						else{
							echo "Not found your email in our database";
						}
						
						//if your email successfully sentmail ie they are able to click it
						
						if($sentmail){
							echo "  Your Conformation link Has Been Sent To Your Email Address.";
						}
						else{
							echo "Cannot send Conformation link to your email address";
						}
						
				}else{
					echo ("Matching is not right!!!");
				}
			
		
		}else{
			echo ("Email already in use .Try any other email address.");
		}
		
	}else{
		echo ("Sorry we are unable to send confiration link because username already in use please try another.");
	}
	

?>
</body>
</html>