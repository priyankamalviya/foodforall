<?php
include_once 'database_config.php';
session_start();
error_reporting(E_ERROR | E_PARSE);
date_default_timezone_set('America/Los_Angeles');
$i=0;

$email=$_SESSION['email'];
$email="saen@gmail.com";
$conn=get_connection();
if(!$_POST) //if updatign values to front end
{
//$email="abc@gmail.com";
$sql="SELECT * FROM `recipient` where `email`='$email'";
$result1 = mysqli_query($conn, $sql);
$row=$result1->fetch_assoc();
echo json_encode($row);
}
if($_POST) //if gettign values from front end
{
$array=json_encode($_POST);
$arr1=json_decode($array,true); //comverting json object into an associative array


foreach($arr1 as $key => $value)
{
	if($key=="password")
	{
		$sql1="SELECT `password` from `recipient` where `email`='$email'"; //to check if the password was updated by the user.
		$result=mysqli_query($conn,$sql1);
		$row=$result->fetch_assoc();
		$result=$row["password"];
		
		if(strcmp($result,$value)!=0)
		{
			$value=md5($value); //encrypting password
		}
	}
	if($key == "email")
	{
		$domain=strstr($value,'@');

		$domain1=substr($domain,1);

		$has_dns_mx_record = checkdnsrr($domain1,"MX");
		if($has_dns_mx_record==false)

		{

			$i=1;
			echo '{"status":401,"msg":"ERROR! This domain does not exist!!! Please enter a proper email id."}';
			die();

		}

		
	}
	if($key == "typeFood[]")
	{
		$key="typefood";
		$value=json_encode($value);
	}
	if($key == "website")
	{
		$url=substr($value,11); //website should be of format: http://www.abc.com
		$valid=checkdnsrr($url,"A"); //check the domain name
		if(!($valid))
		{
			$i=1;
			echo '{"status":401,"msg":"ERROR!Domain does not exist for website"}';
			die();
			//$status=401;
			//$webmsg=$webmsg."ERROR!Domain does not exist for website. ";
		
		}
    }
	$sql="UPDATE recipient SET $key = '$value' WHERE email = '$email'";
	$result=$conn->query($sql);
	
	
	if($result==0)
	{
		$i=1;
		
	}
}
$_SESSION['email']=$_POST['email']; //updating the email field.

if($i==1)
{
	echo '{"status":401,"msg":" ERROR! error in updating fields".$conn->error."Please re-enter !!!"}';
}
else
{
	echo '{"status":200,"msg":" Fields Sucessfully updated."}';
}
}
$conn->close();
?>

