<!--
@author : Jessica Akua Annor
ID     : 59982018
 -->
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <title>PTA</title>
    <link rel="stylesheet" href="form.css">
    </head>
    <body>

      <?php
//check if the Send butto has been clicked
if(isset($_POST['Send'])){
  //declare variables to capture form data
  $senderid=$_POST["id"];
  $number=$_POST["mobile"];
  $message=$_POST["message"];
//create an array for the phone numbers and store
  $phone_nums = [];
  $phone_nums = explode(" ", $number);

//after collecting the data, send uses the URL
header('Location: https://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to=$phone_nums&from=$senderid&text=$message&dlr-mask=31');
}
       ?>



       <div class = "container">
<form id = "contact" method="post" action="pta.php">
  <center><h3>St. Andrews High School</h3></center>
  <fieldset>
  <h4> Sender ID: </h4> <input type="text" name="id" maxlength="10"><br>
</fieldset>
<fieldset>
  Please separate the phone numbers with a space
  <h4>Phone Number: </h4> <input type="text" name="mobile"><br>
</fieldset>
<fieldset>
  <h4> Message: </h4> <textarea name="message"></textarea><br>
</fieldset>
<button name="Send" type="submit" id="send" data-submit="...Sending" onclick="return validate()">Send</button>
</form>

    </body>
</html>
