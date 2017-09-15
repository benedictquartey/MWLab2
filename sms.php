<?php

	$userID="";
	$phonenumber="";
	$msg="";

	if(isset($_POST["Send"]))
			{
				$userID=$_POST["username"];
				$phonenumber=$_POST["number"];
				$msg=$_POST["message"];
				str_string($phonenumber,10);
				header('location:144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to=recipients&from=SenderID&text=Message&dlr-mask=31');


			}

?>
