<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$res="";
$res1="";
  $servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('RTO_new',$conn) or die("unable to connect to database");
$vno=$_POST['vno'];
$loc=$_POST['loc'];
$date=$_POST['date'];
$time=$_POST['time'];
$cmnts=$_POST['cmnts'];



$query="INSERT INTO lost_vehicle_info VALUES('$vno','$loc','$date',$time,'$cmnts')";

$res=mysql_query($query,$conn);

if($res)
{

	header("Location:http://localhost/RTO_NEW/civil_officer/civil_officer.html");
	
}
else
{

	
		echo "<script type='text/javascript'>";
	echo "alert('data not inserted')";
	echo"</script>";
	echo mysql_error($conn);
	
}



?>

