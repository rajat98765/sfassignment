 <!DOCTYPE html >
 <html>
 <head>
 <title>untitled documeny</title>
 
 </head>
 <body>
 <div id="getdata"></div>
 autorefresh
 <script type="text/javascript">
 
 function dis(){
	 xmlhttp=new XMLHttpRequest();
	 xmlhttp.open("GET","select.php",false);
	 xmlhttp.send(null);
	 document.getElementById("getdata").innerHTML=xmlhttp.responseText;
 }
 dis();
 
 
 setInterval(function(){
	 dis(); 
 },2000);
 </script>
  </body>
  </html>