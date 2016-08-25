<?php
include_once 'database_config.php';
session_start();
//$email ="khushbusheth133@gmail.com";
$email = $_SESSION['email'];
//$json = $_POST['data'];
//echo $email;
//$date = '2014-04-06 12:00:05';
//$json =  '{"volname": "khushbu","pickup":"'.$date.'"}';
$obj = json_decode($json); //get selected value from dropdown: $dropdown = $_POST['volName'];
$name = $obj->{'volname'};
//$name = "Khushbu";
echo $name;
$time = $obj->{'pickup'};
echo $time;
$rating = $_POST['star2']; //name attr of div or of the input element??
//$rating = 4;

$conn=get_connection();

$sql1="SELECT * FROM `request` where (`volunteername`='$name' AND `pickuptime`='$time')";

$result1 = mysqli_query($conn, $sql1);

$row=$result1->fetch_assoc();

$id =$row["volunteeremailid"];

echo $id;

$sql = "INSERT INTO `rating` VALUES ('$id','$name','$rating')";


if ($conn->query($sql) === TRUE) 
{
	$conn->close();
   $response_data = array("status"=>200,"msg"=>"Your feedback was submitted!");
    header('Content-Type: application/json');
    echo json_encode($response_data);
} 
else
{
	echo "query failed";
	$response_data = array("status"=>401,"msg"=>"Server down, try again later!");
    header('Content-Type: application/json');
    echo json_encode($response_data);
}

?>
