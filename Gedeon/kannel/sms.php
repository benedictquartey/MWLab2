<?php


$message;
$fistnum;
$secondnum;
$thirdnum;
$link;
$numbers="";
$array = array();

//Getting the variables to pass through the link
$message = $_POST["message"]?  $_POST["message"]: false;

//Getting the numbers and putting them into an array
$firstnum = $_POST["1"]?  $_POST["1"]: false;
if($firstnum)array_push($array,$firstnum);
$secondnum = $_POST["2"]?  $_POST["2"]: false;
if($secondnum)array_push($array,$secondnum);
$thirdnum = $_POST["3"]?  $_POST["3"]: false;
if($thirdnum)array_push($array,$thirdnum);


$format = "%s,%s,%s"; // pattern for building the string
$numbers = vsprintf($format, $array);// creating a string of numbers to be submitted

echo "what is this ".$numbers;


$url = "http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to='.$numbers.'&from=Gedeon&text=".$message."&dlr-mask=31";
header('Location:'.$url);

?>