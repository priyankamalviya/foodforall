<?php
include_once 'database_config.php';
session_start();
error_reporting(E_ERROR | E_PARSE);
//date_default_timezone_set('America/Los_Angeles');

$email = $_SESSION['email'];
//$email = "khushbu123@gmail.com";

$address = $_POST['address'];
$pickuptime = $_POST['pickuptime'];

$typeFood= json_encode($_POST['typeFood']);

$recepientname = $_POST['select-recipient'];
$phonenumber = $_POST["phone"];

$conn=get_connection();

$sql1="SELECT * FROM `donor` where `email`='$email'";

$result1 = mysqli_query($conn, $sql1);

$row=$result1->fetch_assoc();

$donorfullname =$row["fullname"];
//echo $donorfullname;



$sql = "INSERT INTO `request` VALUES ('0','$donorfullname','$email','ksheth@gmail.com','kk','$pickuptime','$address','$typeFood','$phonenumber','$recepientname')";


if ($conn->query($sql) === TRUE) 
{
	$conn->close();
   $response_data = array("status"=>200,"url"=>"../HTML/donoractivitypage.html");
    header('Content-Type: application/json');
    echo json_encode($response_data);
} 
else
{
	$conn->close();
    $response_data = array("status"=>401);
    header('Content-Type: application/json');
    echo json_encode($response_data);
}
?>

