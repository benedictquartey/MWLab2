<!DOCTYPE html>
<html>
<head>
	<title>SMS App</title>
	<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
</head>
<body>
	<div class="container">
		<form action="processMessage.php" method="post">
			<div class="form-group">
				<label class="form-label">Enter the Phone Numbers</label>
				<span style="color: red;">**Seprate phone numbers with comma</span><br>
				<input type="text" name="phone_numbers" id="phone_numbers" class="form-input">
			</div>

			<div class="form-group">
				<label class="form-label">Message</label><br>
				<textarea name="Message" class="form-input" cols="20" rows="5"></textarea>
			</div>

			<div class="form-group">
				<input type="submit" name="send" value="Send Message">
			</div>
		</form>
	</div>
</body>
</html>