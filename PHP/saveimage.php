<?php
header('Access-Control-Allow-Origin: *');
include_once 'database_config.php';
session_start();
error_reporting(E_ERROR | E_PARSE); 
$i=1;
///echo '{"status":401,"msg":"ERROR!invalid website"}';
//$email = $_GET[Emailid];
$email = $_SESSION['email'];
$mainemail=$email;
$email = strtr($email, array('.' => '','@' => ''));
//$target_dir = './'.$email;
$target_dir = "../uploads";
$result=mkdir($target_dir,0755);
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//echo $_FILES["fileToUpload"]["name"];
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$imageFileType=strtolower($imageFileType);
$msg="";
$src="";
//echo $target_file;
//echo $imageFileType;
//$fname = basename($_FILES["fileToUpload"]["name"]);

//$filename=$target_dir . '/'.basename($_FILES["fileToUpload"]["name"]);//Appends the filename to directory //path
$filename=$target_dir . '/'.$email.".".$imageFileType;//Appends the filename to directory //path
//echo $filename;
$src = "../uploads".'/'.$email.".".$imageFileType;
$conn=get_connection();

      
/*if (file_exists($filename)) {
    //$msg = "**Sorry, file already exists.";
    $i = 0;
    }*/
if ($_FILES["fileToUpload"]["size"] > 10000000) { //file size greater than the specified bytes
    //$msg = $msg."Sorry, your file is too large.";
    $i= 0;
}
if($i==0)
{
    //$msg = $msg."**Error in uploading the file";
    echo '{"status":401,"msg":"Sorry, file already exists."}';

}
else{
    $flag = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $filename);
    if ($flag == true) {
        //$src = $src.$filename;
        $msg = $msg."file uploaded";
        $response_data = array("status"=>200, "msg"=>$msg, "src"=>$src);
		$sql="UPDATE donor SET image = '$src' WHERE email = '$mainemail'";
		//echo $sql; 
		$result=$conn->query($sql);
		//echo $result;
		$conn->close();
		header('Content-Type: application/json');
        echo json_encode($response_data); 
        //echo $src;

    } else {
        $msg = $msg."Sorry, there was an error uploading your file.";
        $response_data = array("status"=>401, "msg"=>$msg, "src"=>$src, "filename"=>$filename , "returntype"=>$flag);
        header('Content-Type: application/json');
        echo json_encode($response_data); 
        //echo '{"status":401,"msg": "Sorry, there was an error uploading your file."}';
    }
}
?>