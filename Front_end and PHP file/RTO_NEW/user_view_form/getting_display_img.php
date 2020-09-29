<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db('rto_new',$conn) or die("unable to connect to database");
		
	   $query="select * from image_table where lno='1234567890678'";
	   $res=mysql_query($query);
	   while($row = mysql_fetch_row($res))
		{
			$name=$row[1];
		}
?>
				