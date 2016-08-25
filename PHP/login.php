<?php
include_once 'database_config.php';
session_start();
error_reporting(E_ERROR | E_PARSE);
date_default_timezone_set('America/Los_Angeles');


//$rollofuser = $_POST['rolesign'];

$email = $_POST['email'];

$pass= $_POST['password'];

$domain=strstr($email,'@');

$domain1=substr($domain,1);

$_SESSION['email']=$email;

$has_dns_mx_record = checkdnsrr($domain1,"MX");

if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    
    //echo '<span style="color:red; text-align:center;">ERROR! The EMAIL ID is not a valid one!</span>';
    echo '{"status":401,"msg":"ERROR! The EMAIL ID is not a valid one!"}';
    die();
}
if($has_dns_mx_record==false)
{
    //echo '<span style="color:red; text-align:center;">ERROR! This domain does not exist!!! Please enter a proper email id.</span>';
     echo '{"status":401,"msg":"ERROR! This domain does not exist!!! Please enter a proper email id"}';
    die();
}
//$sql = "SELECT * FROM recipient where `email` = '$email'";       
$sql = "SELECT * FROM donor WHERE `email` = '$email'";
$conn = get_connection();
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if(!($row))
{
    $sql = "SELECT * FROM volunteer WHERE `email` = '$email'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if(!($row))
    {
        $sql = "SELECT * FROM recipient WHERE `email` = '$email'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if(!($row))
        {
            echo '{"status":401,"msg":"ERROR!This EMAIL ID  does not exist in our records. Please check your EMAIL ID !!!"}';
            die();
        }
    }
} 

$pass = md5($pass);   
if(strcmp($row["password"],$pass)==0)
{
    $_SESSION['fullname']=$row["fullname"];
    $fullname= $row["fullname"];
    $_SESSION['varname'] = $fullname;
	echo '{"status":200,"url":"../HTML/donoractivitypage.html?name=$fullname"}';
    //echo '{"status":200,"url":"activitypage.phtml"}';
    exit();
}
else
{

    echo '{"status":401,"msg":"ERROR! INVALID EMAIL ID or PASSWORD!!!"}';
}
 
$conn->close();
?>