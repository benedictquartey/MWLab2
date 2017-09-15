<?php

	$userID="";
	$phonenumber="";
	$msg="";

	if(isset($_POST["Send"]))
			{
				$userID=$_POST["SenderID"];
				$phonenumber=$_POST["recipients"];
				$msg=$_POST["Message"];
				str_string($phonenumber,10);
				header('location:144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to=recipients&from=SenderID&text=Message&dlr-mask=31');


			}

?>
