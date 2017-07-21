<!DOCTYPE html >
<html>
<head>
<title>main page</title>
<style type ="text/css">
body{background-image:url(background.jpg);
	background-repeat:no-repeat;
	background-size:cover;}

#sf img{
	border:7px solid white;
	position:absolute;
	top:20px;
    left:360px;;
	width:600px;
	height:200px;}
	
	
	
	/*full widyh input field*/
	input[type=text],input[type=password],input[type=email] {
		width:100%;			/*otherwise passord may start from same line*/
		padding:12px 20px;  /* padding in text inside boxes*/
		margin:8px 0;      /* spaces between boxes and 0 create symm*/
		display: inline-block;
		border: 1px solid #ccc; /*border for input box*/
		box-sizing: border-box; /*keep input box inside outer box*/
	}
input[type="date"]{
		width:22%;
		padding:12px 20px; 
		margin:8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
}
button {
		background-color: #4CAF50;
		color:white;
		padding:14px 20px;
		margin: 8px 0;
		border:none;			/*styles for buttons and width 100% to match box size*/
		cursor: pointer;
		width: 100%;
		}
button:hover {
		opacity: 0.8;
}
.cancelbtn1 {			/*extra style for cancel button*/
		width:auto;		/* width auto == whatever is needeed othrwise may go to full lenth also*/
		padding: 10px 18px;
	    background-color: #f44336;
}
.cancelbtn2 {  
		width:auto;
		padding: 14px 20px;
	    background-color: #f44336;
}
.imgcontainer {
		text-align: center;
		margin: 24px 0 12px 0;			/* ceter the image and position the close button*/
		position:relative;
} 
img.avatar {
		width: 40%;
		border-radius: 50%;
}
.cancelbtn2,.signupbtn{
		float:left;
		width:50%;
}
.container {
		padding:16px;  /*provide padding in all things that come under it*/
}
span.psw {
		float: right;
		padding-top:16px;
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
.clearfix::after{
		content:"";
		clear:both;
		display:table;
}
		
					/*changing styles for span and cancel button on extra small screen*/
@media screen and (max-width: 300px){
		span.psw{
			display:block;
			float: none;
		}
		.cancelbtn1{
			width:100%;
		}
}
@media screen and (max-width: 300px){
		.cancelbtn2,.signupbtn{
			width:100%;
		}
}
	
	
	
#loginbox {background-color:white;
			position:absolute;
			top:300px;
			left:370px;
			width:580px;
			height:300px;
			border:5px solid black;
			text-align:center;}
			
</style>
<script type="text/javascript">
	function checkForm(form)
	{   var errors=[];
		if(form.username.value == ""){
			errors.push("Username cannot be blank!");
			
		}
		re = /^\w+$/;
		if(!re.test(form.username.value)){
			errors.push("Username must contain only letters, number and underscores!");
			
		}
		if(form.pwd1.value != "" && form.pwd1.value==form.pwd2.value)
		{
			if(form.pwd1.value.length < 6){
				errors.push("Password must contain atleast six characters !");
				
			}
		
		if(form.pwd1.value == form.username.value){
			errors.push("Password must be different from Username!");
			
		}
		re = /[0-9]/;
		if(!re.test(form.pwd1.value)){
			errors.push("Password must contain at least one number betweeen (0-9)!");
			
		}
		re = /[a-z]/;
		if(!re.test(form.pwd1.value)){
			errors.push("Password must contain at least one lower case letter (a-z)!");
			
		}
		re = /[A-Z]/;
		if(!re.test(form.pwd1.value)){
			errors.push("Password must contain at least one upper case letter (A-Z)!");
		
		}
		
	    }else{
		errors.push("Please  check that you have entered and confirmed your password correctly!");
		
	    }
	if(form.email1.value =="" || form.email1.value!==form.email2.value)
	{
			errors.push("Please check that you have entered and confirmed your email Correctly! ");
			
	}
	if (errors.length>0){
		var msg = "ERRORS:\n\n";
		for (i=0;i<errors.length;i++){
			msg+=errors[i] + "\n";
		}
		alert(msg);
		return false;
	}
	alert("Your email and password are MATCHED !!");
	return true;
	}
</script>
</head>
<body>
<div id="sf"><img src="sfnewe.jpg"/></div>
<div id="loginbox">
<h2>Welcome to SF IIT KHARAGPUR</h2>
<h2>Log in here!!!!!</h2>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Log In</button>
<div id="id01" class="modal">
	<form class="modal-content animate" action="/action_page.php">
	<div class="imgcontainer">
	<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	<img src="images.jpg" alt="Avatar" class="avatar">
	</div>
	<div class="container">
		<label><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="uname" required>
		<label><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="psw" required>
		<button type="submit">Login</button>
		<input type="checkbox" checked="checked">Remember me
	</div>
<div class="container" style="background-color:#f1f1f1">
<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn1">Cancel</button>
<span class="psw">Forgot <a href="#">password?</a></span>
</div>
	</form>
</div>
<script>
// get the modal
var modal = document.getElementById('id01');
// when the user click anywhere outside of the modal,close it
window.onclick = function(event){
	if (event.target == modal){
		modal.style.display="none";
	}
}
</script>
<h2>NOT REGISTERED YET  &nbsp&nbsp (-_-) </h2>

<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>
<div id="id02" class="modal">
<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">x</span>

<form class="modal-content animate" action="registernext.php" name="myform" method="post" onsubmit="return checkForm(myform);">
	<div class="imgcontainer">
	<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
	<img src="image.jpg" alt="Avatar" class="avatar">
	</div>
	
	<div class="container">
	<label><b>Username</b></label>
	<input type="text" placeholder="" name="username"/>
	<label><b>Password</b></label>
	<input type="password" placeholder="" name="pwd1" />
	<label><b>Confirm Password</b></label>
	<input type="password" placeholder="" name="pwd2" />
	<label><b>Email</b></label>
	<input type="email" placeholder="" name="email1" />
	<label><b>Confirm Email</b></label>
	<input type="email" placeholder="" name="email2" />
	<label><b>Date of Birth</b></label><br/>
	<input type="date" placeholder="" name="bday" required /><br/>
	<input type="radio" name="gender" value="male" required />Male
	<input type="radio" name="gender" value="female" required />Female
	<input type="radio" name="gender" value="other" required />Other<br/><br/>
	
	<input type="checkbox" checked="checked">Remember me
	<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
	<div class="container" style="background-color:#f1f1f1">
	<div class="clearfix">
	<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn2">Cancel</button>
	<button type="submit" class="signupbtn">Sign Up</button>
	</div>
	</div>
	</div>
	</form>
	</div>
<script>
var modal = document.getElementById('id02');
window.onclick = function(event){
	if (event.target == modal){
		modal.style.display="none";
	}
}
</script>

</div>
</body>
</html>