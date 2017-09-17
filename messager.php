<?php

$rec1 = $_REQUEST['receip1'];
$rec2 = $_REQUEST['receip2'];
$rec3 = $_REQUEST['receip3'];

$message = $_REQUEST['smsMessage'];

if (($rec1=="") || ($rec2=="") || ($rec3=="") {
  echo "Kindly enter the three numbers";
}
else{
  $rec = $rec1."+".$rec2."+".$rec3;
  $senderLink = "http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to=".$rec."&from=James&text=".$message."&dlr-mask=31";
}

?>