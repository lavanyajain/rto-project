<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$res1="";
  $servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('rto_new',$conn) or die("unable to connect to database");
$id=$_POST['oid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$phno=$_POST['phno'];
$sno=$_POST['sno'];
$city=$_POST['city'];
$pwd=$_POST['pwd'];

if($fname=="" OR $lname=="" OR $id=="" OR $dob=="" OR $phno=="" OR $sno=="" OR $pwd=="" OR $city=="")
{
echo("error");
}
else
{
$query="insert into officer_reg values('$id','$fname','$lname','$dob','$phno',$sno,'$city','$pwd')";
$res=mysql_query($query,$conn);


if($res)
{
	header("Location: http://localhost/RTO_NEW/Login_form/SelectOPT.php");
echo "<script type='text/javascript'>";
	echo "alert('data inserted')";
	echo "</script>";
	}
else
{
	header("Location: http://localhost/RTO_NEW/officer_reg/officer_reg.html");
	echo "<script type='text/javascript'>";
	echo "alert('data not inserted')";
	echo"</script>";
	echo mysql_error($conn);
}

}

?>

