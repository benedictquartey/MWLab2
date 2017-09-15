<?php 
/**
 *@author Isaac Coffie
 *@version Version 1.0
 */
?>
<!DOCTYPE html>
<html>
<head>
	<title>SMS Web Application</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style>
		label{color: #fff}
	</style>
</head>

<body style="background-color: #DBDBDB">

	<div class="container" style="margin: 2%">

		<div class="row">
			<div class="col-md-2 col-sm-2"></div>
			<div class="col-md-2 col-sm-2"></div>
			<div class="col-md-8 col-sm-8" style="background-color: #4169e1">

				<form role="form" class="form-horizontal" method="POST" action="processSMS.php" style="padding: 2%">
					<center><h3 style="color: #fff">SMS Web Application</h3></center>

					<div class="form-group">
						<label for="inputTo">To</label>
						<div class="col-sm-12 col-md-12">
							<input type="text" name="recipientsNumber" class="form-control" id="inputTo" placeholder="comma separated list of recipients number" required="required">
						</div>
					</div>

					<div class="form-group">
						<label for="inputSenderId">SenderID</label>
						<div class="col-sm-12 col-md-12">
							<input type="text" name="senderId" class="form-control" id="inputSenderId" placeholder="Sender Id / Subject" required="required">
						</div>
					</div>

					<div class="form-group">
						<label for="inputBody">Message</label>
						<div class="col-sm-12 col-md-12">
							<textarea class="form-control" id="inputBody" rows="10" name="message" placeholder="Type your message here..." required="required"></textarea>
						</div>
					</div>
					
					<button type="submit" class="btn btn-danger">Cancel</button>
					<button type="submit" class="btn btn-success" name="send">Send Message</button>
				</form>

			</div>

		</div>
		
		
	</div>
	
	<script type="text/javascript" scr="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" scr="js/bootstrap.js" ></script>
</body>
</html>