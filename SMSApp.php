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
				<input type="text" name="username" class="form-group" placeholder="username"><br>
			</fieldset>
			<fieldset>
				<label>To</label><br>
				<input type="text" name="number" class="form-group col-md-4" placeholder="telephoneNumber 1"><br>
			</fieldset>
			<fieldset>
				<label>Message</label><br>
				<textarea name="message"; class="form-group" style="width:300px; height:100px;""></textarea><br>
			</fieldset>
			<fieldset>
				<button name="Send" type="submit" data-submit="...Sending">Send</button>
			</fieldset>
			
		</form>
	</div>


</body>
</html>