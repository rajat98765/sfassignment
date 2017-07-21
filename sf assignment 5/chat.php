<html>
<?php

$host ="localhost"; //hostname
$username="id2212267_rajat"; //usernameto data base
$password ="arpanchutia";  
$db_name ="id2212267_sf5";

//connect to database
mysql_connect("$host","$username","$password")or die("cannot connect to server");
//select database
mysql_select_db("$db_name")or die("cannot select database");
//this file we have to include so no html is needed whenever we wanna connect to data base


$query = "SELECT * FROM game";  //select all from table where options are located 
$result = mysql_query($query);
   //now back to html code as dropdown is html
?>
<div class="select">
 <span class="arr"></span>
<select name="select1">    
<?php 
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {    //we will go througgh mysql table which we selected one by one and see if it met the criteria
?>
<option value="<?php echo $line['username'];?>"> <?php echo $line['username'];?> </option>
<?php
}  //end the loop and then close the dropdown
?>
</select>
</div>





<style type ="text/css">  
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


</style>

<div class="select">
    <span class="arr"></span>
    <select>
      <option>All about that bass</option>
      <option>Dear Future Husband</option>
      <option>Close Your Eyes</option>
    </select>
  </div>
  
  
  

</html>