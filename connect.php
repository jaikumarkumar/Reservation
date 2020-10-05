<?php

try {
	$con = new pdo ('mysql:host=localhost;dbname=front_desk','root','');
} 
catch (Exception $e) 
{
	echo $e->getMessage();
}

if($con)
{
	//echo "connect";
}
/* 
$name="root";
$password="";
$server="127.0.0.1";
$database="front_desk";
define ("TITLE","login");
define ("URL", "/login/");

if($name!='')
{
 if($server!='' && $database!='')
  {
	 $con=mysqli_connect($server,$name,$password,$database) or die('not connect');
	   if($con)
	  {
		 $suc=mysql_select_db($database,$con) or die('database not found');
	  } 
	  
  }
  else
   {
		?> alert("Server and Database Not Connected.."); <?php
   }
}
else
{
  ?> alert("Username not Connected.."); <?php 
}
 */
?>