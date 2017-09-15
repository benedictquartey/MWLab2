<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

	<style >
		body
		{
			background: -webkit-linear-gradient(to right, #DDEFBB, #FFEEEE);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #DDEFBB, #FFEEEE); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}
	</style>

</head>
<body>


<!-- Php code to execute the required task -->
	<?php

		// Check if the submit button has been clicked
	    if (isset($_POST["submit"])) 
        {

        	//Create variables to accept input from user
        	$number = '';
         	$message = '';
         	$senderid = "chrisasante";

        	$ok = true;

        	//check if number has been set, then concatenate the numbers
            if (!isset($_POST['numb']) || $_POST['numb'] === '') 
            	{
                	$ok = false;
            	}

            else 
            	{
                	$number = $_POST['numb'];


                	$phnum = str_replace(" ","+", $number);


            	}

            //check if message has been set
            if (!isset($_POST['mess']) || $_POST['mess'] === '') 
            	{
                	$ok = false;
            	}

            else 
            	{
                	$message = $_POST['mess'];
            	}

            //if everything checks out, redirect the page to send message
            if ($ok = true)
            {
            	header("Location: http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to=" . $phnum ."&from=" . $senderid . "&text=". $message . "&dlr-mask=31");

            }

        }

	?>

	<!-- A form to create the platform for user to enter receipients and message to be sent -->
	<div class="container">
		<form class="col s12" action="" method="POST">


			<div class="row">
				
			</div>
	       	
	       	<!-- Row to accept multiple numbers -->
	       	<div class="row">
		        <!-- <div class="input-field col s6"> -->
		        <label class="active" for="number"><b>NUMBER(S)</b></label>
		          <input placeholder = "Type number(s) here. Separate each number with a space." id="number"  name="numb" type="text">
		          
		        <!-- </div> -->
	        </div>

	        <!-- Row to type text -->
	        <div class="row">
		        <!-- <div class="input-field col s6"> -->
		        <label class="active" for="message"><b>MESSAGE</b></label>
		        <textarea id="textarea1" class="materialize-textarea" name="mess" placeholder = "Type your message here" id="message"></textarea>
		        
		        <!-- </div> -->
	        </div>


	        <!-- Submit button -->
	        <input class="waves-effect waves-light btn" type="submit" name="submit">
		</form>
		
	</div>




</body>
</html>


          


