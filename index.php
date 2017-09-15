<!DOCTYPE html>
<html >
	<head>
  		<meta charset="UTF-8">
  		<title>Sms Delivery</title> 
  		<link rel="stylesheet" type="text/css" href="bootsrap/css/bootstrap.css">
	</head>

	<body>

    <?php include_once("processIndex.php");
    ?>
      
		<div class="container">  
  			<form id="contact" action="" method="post">
    			<h3>Send New SMS</h3>
   
    			<fieldset>
      				<input placeholder="Enter Receipient(s)" type="text" name="contact" tabindex="1" required autofocus><br><br>
    			</fieldset>
    			<fieldset>
      				<textarea placeholder="Type your Message Here...." name ="message" tabindex="5" required></textarea><br><br>
    			</fieldset>
    			<fieldset>
      				<button name="send" type="submit" id="contact-submit" data-submit="...Sending">Send</button>
    			</fieldset>
    		</form>	
	</body>

</html>


