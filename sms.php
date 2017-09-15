<?php

	$userID="";
	$phonenumber="";
	$msg="";

	if(isset($_POST["Send"]))
			{
				$userID=$_POST["SenderID"];
				$phonenumber=$_POST["recipients"];
				$msg=$_POST["Message"];
				$printArray=explode(";", $phonenumber);
				$temp="";
				foreach ($printArray as $value) {
					$temp=$temp.$value."+";
				}
				header('location: http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to='.$temp.'&from='.$userID.'&text='.$msg.'&dlr-mask=31');

				//echo $printArray;
			}

?>
