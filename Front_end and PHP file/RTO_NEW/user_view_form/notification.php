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
	
	$avno=$row[10];
	$edate=$row[9];
}
$cdate=date('Y-m-d');
if($edate<$cdate)
	$notification="Licence experied on $edate";
else
	$notification="Licence is valid till $edate";
//echo $notification;
//echo ("<br/>");


//echo $avno;
$vquery="select * from lost_vehicle_info";
$vres=mysql_query($vquery);
if($vres)
{
	while($row = mysql_fetch_row($vres))
{
	
	$fvno=$row[0];
	$floc=$row[1];
	if($fvno=$avno)
	{
		//$notification=$notification."lost vechicle $fvno found at location $floc";
		$finalvno=$fvno;
		$finalloc=$floc;
	}
}

$lostv="

Lost vehicle $finalvno found at location $finalloc";

echo $notification;
//echo "<br/>";
echo $lostv;
}
else{echo "not executed";
echo mysql_error($conn);
	}
?>

