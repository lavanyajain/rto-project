<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$res="";

  $servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('RTO_new',$conn) or die("unable to connect to database");
$lno=$_POST['lno'];
$vno=$_POST['vno'];
$loc=$_POST['loc'];
$type=$_POST['type'];
$date=$_POST['date'];
$fine=0;
$time=$_POST['time'];
$cmnts=$_POST['cmnts'];

$res=0;
$squery="select * form offence_list";

$query="INSERT INTO officer_offence_reg VALUES('$lno','$vno','$loc','$type','$date','$time','$cmnts',$fine)";

$res=mysql_query($query,$conn);

if($res)
{
	echo "<script type='text/javascript'>";
	echo "alert('data inserted')";
	echo"</script>";
	header("Location:http://localhost/RTO_NEW/offence_reg_form/officer_page.html");
	
}
else
{

	
		
		echo mysql_error($conn);
		echo "<script type='text/javascript'>";
	echo "alert('data not inserted')";
	echo"</script>";
	
	
	
	
}



?>

