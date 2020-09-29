<?php

error_reporting(E_ALL ^ E_DEPRECATED);

  $servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('RTO_new',$conn) or die("unable to connect to database");


$query="select * from user_log";
$result=mysql_query($query,$conn);
while($row = mysql_fetch_row($result))
{
  $id = $row[0];
  $status=$row[2];
  if($status==1)
  {
  $uquery="update user_log set status=0 where id='$id'";
  $ures=mysql_query($uquery,$conn);
  if(!$ures)
  {
	  echo "un successfull";
  }
  else
  {
	  echo mysql_error($conn);
  }
   }
 }
header("Location: http://localhost/RTO_NEW/Login_form/index.php");
 ?>
  