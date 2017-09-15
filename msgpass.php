

<?php 
/**
 * @author Kwabena Adu-Darkwa
**/
$message= $_GET["msg"];
$listNum= $_GET["num"];
$submit = $_GET["submit"];


// if the submit button is entered
if (isset($submit))
{
	// ensures that there are numbers 
	if (isset($message)&isset($listNum))
		{
			// concatenates the numbers
	        $num=str_replace(",","+",$listNum);
	        echo "$num";
	        // sends for delivery
	        header("Location: http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to=".$num."&from=KwabenaAduDarkwa&text=".$message."&dlr-mask=31/");

		}
}

 ?>