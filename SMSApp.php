<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PTA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="sms.php" method="post">
			<fieldset>
				<label>From</label><br>
				<input type="text" name="SenderID" class="form-control" placeholder="username"><br>
			</fieldset>
			<fieldset>
				<label>To</label><br>
				<input type="text" name="recipients" class="form-control" placeholder="telephoneNumber 1"><br>
			</fieldset>
			<fieldset>
				<label>Message</label><br>
				<textarea name="Message"; class="form-control" style="width:500px; height:200px;""></textarea><br>
			</fieldset>
			<fieldset>
				<input name="Send" type="submit" class="btn btn-success" data-submit="...Sending" value="send">
			</fieldset>
			
		</form>
	</div>


</body>
</html>