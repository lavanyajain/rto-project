<?php
error_reporting(E_ALL ^ E_DEPRECATED);

  $servername = "localhost";  
       $username = "root";  
       $password = "";  
       $con = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('RTO_new',$conn) or die("unable to connect to database");
	$query="select * from user_log where status=1";
	   $res=mysql_query($query);
	   
	   while($row=mysql_fetch_array($res))
	   {
	   $alno=$row[0];
	   $apwd=$row[1];
	   }
	   $mquery="select * from admin_user_reg where lno=$alno";
	   $mres=mysql_query($mquery,$conn);
	   while($row = mysql_fetch_row($mres))
	{
	
		$lno=$row[2];
		$vno=$row[10];
		
	}
	$oquery="select * from officer_offence_reg where lno=$lno";
		$ores=mysql_query($oquery,$con);
		if($ores)
		{
			while($row=mysql_fetch_row($ores))
	   {
		   echo "\n";
	   echo $row[3];
	   echo "at";
	   echo $row[2];
	   echo "\n";
		}
		
		}
		else
		{		echo mysql_error($con);
				echo "No offences made";
		}
?>		