<?php

error_reporting(E_ALL ^ E_DEPRECATED);
$servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('RTO_new',$conn) or die("unable to connect to database");
	   $query="select * from user_log where status=1";
	   $res=mysql_query($query);
	   
	   while($row=mysql_fetch_row($res))
	   {
	   $alno=$row[0];
	   
	   }
	  
	   
	   $squery="select * from image_table where lno=$alno";
	   $sres=mysql_query($squery);
	   	   while($row=mysql_fetch_row($sres))
	   {
	   $photo=$row[1];
	  echo $photo;
	   $sign=$row[2];
	   echo $sign;
	   }

	  ?>