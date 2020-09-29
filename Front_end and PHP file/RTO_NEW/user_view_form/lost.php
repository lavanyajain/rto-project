<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
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
	$fname=$row[0];
	$lname=$row[1];
	$lno=$row[2];
	$dob=$row[3];
	$bgrp=$row[4];
	$gender=$row[5];
	$addr=$row[6];
	$adrive=$row[7];
	$idate=$row[8];
	$edate=$row[9];
	$vno=$row[10];
	$pwd=$row[11];
}
$cdate=date('Y-m-d');
if($edate<$cdate)
$notification="licence experied on $edate";
else
	$notification="licence is valid till $edate";


$vquery="select * from lost_vehicle_info where vno=$vno";
$vres=mysql_query($vquery);
if($vres)
{
	while($row = mysql_fetch_row($vres))
{
	$fvno=$row[0];
	$floc=$row[1];
	echo $fvno;
	echo "<br/>";
	echo $floc;
	echo "<br/>";
}

	$lostv="
	
lost vehicle $fvno associated with $lno found at location $floc";
$notification=$notification.$lostv;
}
$imquery="select * from image_table where lno=$lno";
$imres=mysql_query($imquery);
while($row = mysql_fetch_row($imres))
{
	$imgname=$row[1];	
}
$imgname="user_images/".$imgname;


//echo $notification;
	   ?>