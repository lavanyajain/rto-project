<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db('rto_new',$conn) or die("unable to connect to database");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$lno=$_POST['lno'];
$dob=$_POST['dob'];
$bgrp=$_POST['bgrp'];
$gender=$_POST['gender'];
$pat=$_POST['imgp'];
if($gender=="male")
	$gender="Male";
else
	$gender="Female";
$phno=$_POST['phno'];
$tphno=$_POST['tphno'];
$addr=$_POST['addr'];
$adrive=$_POST['adrive'];
$idate=$_POST['idate'];
$edate=$_POST['edate'];
$avno=$_POST['avno'];
$pwd=$_POST['pwd'];
$query1="INSERT INTO admin_user_reg VALUES('$fname','$lname','$lno','$dob','$bgrp','$gender','$addr','$adrive','$idate','$edate','$avno','$pwd')";
$res1=mysql_query($query1,$conn);
$query2="insert into user_phno_values values('$lno','$phno','$tphno')";
$res2=mysql_query($query2,$conn);

if($res1)
	if($res2)
{
// $iquery="insert into image_table values('$lno','$fppath')";
//$ires=mysql_query($iquery,$conn);
$pat=str_replace('fakepath','',$pat);
$pat=str_replace('\\','',$pat);
$pat=str_replace('C:','',$pat);
$imquery="insert into image_table values('$lno','$pat')";
$imres=mysql_query($imquery);

 echo "<script type='text/javascript'>";
 echo "alert('data inserted')";
echo "</script>";
header("Location: http://localhost/RTO_NEW/Login_form/SelectOPT.php");
}

else
{
	header("Location: http://localhost/RTO_NEW/Admin_user_reg_form/admin_page.html");	
	echo "mysql_error($conn)";
	echo "<script type='text/javascript'>";
	echo "alert('data not inserted')";
	echo "</script>";
	



}






?>

