<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<form method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Numbers</label>
    <input  class="form-control" id="exampleFormControlInput1" name="numbers">
  </div>
  
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Text</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name ="text" ></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Id</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name ="SenderID" ></textarea>
  </div>

  <button type="submit" name="submit" class="btn btn-primary" >Send</button>

</form>
</div>
<?php


if (isset($_POST['submit'])){
$text = '';
$numbers = '';
$id = '';

echo "are we here";

$text = $_POST['text'];
$numbers = explode(',', $_POST['numbers']);
$id = $_POST['SenderID'];


header("location: http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to=".$numbers[0]."+".$numbers[1]."+".$numbers[2]."+".$numbers[3]."+"."&from=".$id."&text=".$text."&dlr-mask=31");
}
?>


</body>
</html>