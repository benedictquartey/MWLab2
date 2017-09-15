<?php 

/**
 *@author Isaac Coffie
 *@version Version 1.0
 */

$receipientListBefore = "";
$receipientListAfter = "";
$senderId = "";
$message = "";
$okay = false;

//if a post request is sent to this page
if(isset($_POST["send"])){

if(isset($_POST["recipientsNumber"]) && !empty($_POST["recipientsNumber"])){
	$receipientListBefore = $_POST["recipientsNumber"];
	$okay = true;
}
if(isset($_POST["senderId"]) && !empty($_POST["senderId"])){
	$senderId = $_POST["senderId"];
	$okay = true;
}

if(isset($_POST["message"]) && !empty($_POST["message"])){
	$message = $_POST["message"];
	$okay = true;
}
//if there is no error or everything is okay
if($okay){

          $receipientListAfter = str_replace(",", "+", $receipientListBefore);  // replace comma with +

	header("location: http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to=".$receipientListAfter."&from=".$senderId."&text=".$message."&dlr-mask=31");
}

}

 ?>
