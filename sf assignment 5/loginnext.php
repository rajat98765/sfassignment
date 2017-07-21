<!DOCTYPE html >
<html>
<head>
<title>MY CHAT APP</title>
<style type ="text/css">
html {
	height:100%;
	}
body{
	height:100%;
    margin:0;
	background: red; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(left top, grey, red); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(bottom right, grey, red); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(bottom right, grey, red); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to bottom right,grey,red);  /* Standard syntax */
	background-repeat:no-repeat;
	background-attachment: fixed ;
	}
	
	

	
	
	input[type=text],input[type=textarea]{
		width:60%;			/*otherwise passord may start from same line*/
		padding:12px 20px;  /* padding in text inside boxes*/
		margin:8px 0;      /* spaces between boxes and 0 create symm*/
		display: inline-block;
		border: 1px solid #ccc; /*border for input box*/
		box-sizing: border-box; /*keep input box inside outer box*/
		border-radius:5px;
	}
	
	

button {
		background-color: #4CAF50;
		color:white;
		padding:14px 20px;
		margin: 8px 0;
		border:none;			/*styles for buttons and width 100% to match box size*/
		cursor: pointer;
		width: 30%;
		border-radius:5px;
		}
button:hover {
		opacity: 0.8;
}	
.cancelbtn1 {			/*extra style for cancel button*/
		width:auto;		/* width auto == whatever is needeed othrwise may go to full lenth also*/
		padding: 10px 18px;
	    background-color: #f44336;
}
.container {
		padding:16px;  /*provide padding in all things that come under it*/
}
.modal {					/*the modal background*/
		display:none;		/*hidden by defalut*/
		position:fixed;		/*stay in place*/
		z-index: 1;
		left:0;
		top:0;
		width:100%;			/*full width*/
		height:100%;
		overflow: auto;		/*enable scroll if needeed*/
		background-color: rgb(0,0,0);  	/*fallback color*/
		background-color: rgba(0,0,0,0.4);		/*black with opacity*/
		padding-top: 60px;
}
.modal-content{				/*modal content box*/
		background-color: #fefefe;  /*otherwise it will also be grey*/
		margin: 5% auto 15% auto;	/*5% from top 15% from bottom and centered*/
		border: 1px solid #888;
		width:60%;		/*size*/
}
.close{					/*the close button(x)*/
		position:absolute;
		right: 25px;
		top: 0;
		color: #000;
		font-size: 35px;
		font-weight: bold;
}
.close:hover,.close:focus {
		color: red;
		cursor: pointer;
}


.animate {			/*adding zoom animation*/
		-webkit-animation: animatezoom 0.6s;
		animation: animatezoom 0.6s;
}
@-webkit-keyframes animatezoom {
		from {-webkit-transform: scale(0)}
		to {-webkit-transform: scale(1)}
}
@keyframes animatezoom{
		from {transform: scale(0)}
		to {transform: scale(1)}
}
@media screen and (max-width: 300px){
		span.psw{
			display:block;
			float: none;
		}
		.cancelbtn{
			width:100%;
		}
}

	
	
	
	
#chatbox {
    text-align:left;
    margin:0 auto;
    margin-bottom:25px;
    padding:10px;
    background:#fff;
    height:270px;
    width:430px;
    border:1px solid #ACD8F0;
    overflow:auto; }
#menu { padding:12.5px 25px 12.5px 25px; }
.welcome { float:left; }
  
.logout { float:right; }

		
		
		
		
		
		

		
  .select {
  font-size: 16px;
  position: relative;
  display: inline-block;
}



.select select {
  outline: none;
  -webkit-appearance: none;
  display: block;
  padding: 1.2em 3em 1.3em 1.5em;
  margin: 0;

  transition: border-color 0.2s;
  border: 5px solid #EB5168;
  border-radius: 5px;

  background: #fff;
  color: #555;
  line-height: normal;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}



.select .arr {
  background: #fff;
  bottom: 5px;
  position: absolute;
  right: 5px;
  top: 5px;
  width: 50px;
  pointer-events: none;
}
.select .arr:before {
  content: '';
  position: absolute;
  top: 50%;
  right: 24px;
  margin-top: -5px;
  pointer-events: none;
  border-top: 10px solid #EB5168;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
}

.select .arr:after {
  content: '';
  position: absolute;
  top: 50%;
  right: 28px;
  margin-top: -5px;
  pointer-events: none;
  border-top: 6px solid #fff;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
}



	
#hello{
	width:40%;
	margin:0 auto;
	background-color:white;
	text-align:center;
}
	
	
</style>

</head>
<body>
<?php
include('connection.php');
$username=$_POST['uname'];
$password=$_POST['password'];
$query="SELECT * FROM game WHERE username = '{$_POST['uname']}' AND password ='{$_POST['password']}'";
$result=mysql_query($query);
$num=mysql_num_rows($result);
if ($num !=1){
	echo "You Have Entered Invalid Username or Password";
die();}
?>



<div id="hello">
<h1>Hey What's Up <?php echo "$username"?>!!!<br/><br/>Wanna Chat With Someone?</h1><br/>
<h2>Select There Username </h2>
<form action="" method="post">
<?php
include('connection.php');
$query = "SELECT * FROM game";  //select all from table where options are located 
$result = mysql_query($query);
   //now back to html code as dropdown is html
?>
<div class="select">
 <span class="arr"></span>
 
<select name="select1" id="select1">    
<?php 
session_start();
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {    //we will go througgh mysql table which we selected one by one and see if it met the criteria
?>
<option value="<?php echo $line['username'];?>"> <?php echo $line['username'];?> </option>
<?php
}  //end the loop and then close the dropdown
?>
</select>

</div>
<button type="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Start Chat</button>

<?php
if(isset($_POST['select1'])){
$_SESSION['select1'] = $_POST['select1'];
}
?>
</form>
</div>


<div id="id01" class="modal">
	<form class="modal-content animate" action="">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     <div class="container">
     <div id="menu">
        <p class="welcome">Welcome</p>
        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
        <div style="clear:both"></div>
    </div>
	
	 <div id="chatbox"></div>
	  
 
 <script type="text/javascript">
 
 function dis(){
	 xmlhttp=new XMLHttpRequest();
	 xmlhttp.open("GET","select.php",false);
	 xmlhttp.send(null);
	 document.getElementById("chatbox").innerHTML=xmlhttp.responseText;
 }
 dis();
 
 
 setInterval(function(){
	 dis(); 
 },2000);
 </script>
	 
	 
	 
	 
      <input type="textarea" placeholder=""  name="message"><br/>
      <button type="submit">Send</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div>
	</form>
</div>



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
