
	<html>
		<head>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
			<link rel="stylesheet" href="style.css" type="text/css">

		</head>
		<body>
		   <img class ="img" src="logo.png">
		      <h2 class="Title">Lynn Jimmy's School</h2>
		      <!--The form that has the imput variables-->
		     	<form class="form" method="GET" action="">
			     	 SenderId:
		  			 <input type="text" name="senderid" id="senderid"><br><br>

			     	 Phone Numbers:
		 			 <input type="text" name="number" id="number" placeholder="separate number with commas"><br><br>

		  			 Message:
		  			<textarea rows="4" cols="50" type="text" name="message" id ="message"></textarea><br> <br>             
		     		<button type="send" name ="send" class="btn btn-primary">Send</button>
					  
				</form>


				<?php
					if(isset($_GET["send"])){

						echo "working";

						$senderid=$_GET["senderid"];
						$phonenumbers= explode(",",$_GET["number"]);
						$message= $_GET["message"];
						header("location: http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to=".$phonenumbers[1]."+".$phonenumbers[2]."+".$phonenumbers[3]."&from=".$senderid."&text=".$message."&dlr-mask=31");
				   }  
			   

                ?>
		</body>
	</html>
