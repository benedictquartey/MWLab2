<!DOCTYPE html>
<html>

  <head>
      <title>
	  Announcements
	  </title>
	  <link rel = "stylesheet" type="text/css" href="styles.css">
  </head>
  
  <body>
  
      <?php
	    if(!empty(isset($_POST["submit"]))){
		$msg = '';
		$recipient1 = '';
		$recipient2 = '';
		$recipient3 = '';
		sendMessage();	
		}
			
	    //the function to send the message
		function sendMessage(){
		    $msg = $_POST['message'];
			$recipient1 =$_POST['r1'];
			$recipient2 =$_POST['r2'];
			$recipient3 =$_POST['r3'];

            header("location: http://144.76.58.179:16243/cgi-bin/sendsms?
			username=senduser&password=sendpass&to=".$recipient1."+".$recipient2."+".$recipient3."&from=Bhebhe&text=".$msg."&dlr-mask=31"
			}
	     ?>
		
		
		
		
	    <!--the form-->
        <form  method="post" action=""> 
		  
		  <div id= icon>
		  <img src="smsImage.jpg"  height="100" width="100">
		  </div>
		  <div id=header>
		  <h1> St Andrews Announcements </h1> <br> 
		  </div>
		  Recipient 1: <input type="text" name="r1"> <br> <br>
		  Recipient 2: <input type="text" name="r2"> <br> <br>
		  Recipient 3: <input type="text" name="r3"> <br> <br>
          Message <textarea rows="10" cols="100" name="message">	  
		  </textarea><br> <br> 
		  
		  
          <input type="submit" name="submit" value="Send message" > 
		 
        </form>
  </body>
</html>