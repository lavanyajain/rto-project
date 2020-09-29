
<?php
error_reporting(E_ALL ^ E_DEPRECATED);

  $servername = "localhost";  
       $username = "root";  
       $password = "";  
	   $flag=0;
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('RTO_new',$conn) or die("unable to connect to database");
$uname=$_POST['uid'];
$pwd=$_POST['pwd'];
$query="select * from admin_info";
$res=mysql_query($query);
while($row = mysql_fetch_row($res))
{
  $id = $row[0];
  $tpwd = $row[1];
  //$type=$row['loc'];
if($uname == $id AND $pwd == $tpwd)
{
	$flag=1;
	header("Location: http://localhost/RTO_NEW/Login_form/SelectOPT.php");
}	
}

$query="select * from civil_officer_info";
$res=mysql_query($query);


while($row = mysql_fetch_row($res))
{
  $id = $row[0];
  $tpwd = $row[7];
if($uname == $id AND $pwd == $tpwd)
{
	$flag=1;
	header("Location: http://localhost/RTO_NEW/civil_officer/civil_officer.html");
	
}	
}	
$query="select * from officer_reg";
$res=mysql_query($query);

while($row = mysql_fetch_row($res))
{
  $id = $row[0];
  $tpwd = $row[7];
if($uname == $id AND $pwd == $tpwd)
{
	$flag=1;
	header("Location: http://localhost/RTO_NEW/offence_reg_form/officer_page.html");
	break;
}	
}	
$query="select * from admin_user_reg";
$res=mysql_query($query,$conn);

while($row = mysql_fetch_row($res))
{
  $id = $row[2];
  $tpwd = $row[11];
if($uname == $id AND $pwd == $tpwd)
{
	$flag=1;
	$cdate=date('Y-m-d');
	$dump="insert into user_log values('$uname','$pwd',1,'$cdate')";
	$dres=mysql_query($dump);
	header("Location: http://localhost/RTO_NEW/user_view_form/user_form.php");
	break;
}	
}
if($flag==0)
{
	header("Location: http://localhost/RTO_NEW/Login_form/index.php");
	echo mysql_error($conn);
	
}
  
?>


