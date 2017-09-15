<!DOCTYPE html>

<!--  @author Kwabena Adu-Darkwa -->

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="mycss.css">
  </head>
    <body id="bImage">

        <!-- header for nagivation---future -->
      	<nav class="navbar navbar-light bg-light justify-content-between">
          <a class="navbar-brand">Welcome to Our SMS Service- PTA ST. Andrews High School</a>
        </nav>
        
        <!-- set the form to the midlle -->
        <div class="row">
        		<div class="col-md-5 col-md-offset-3"></div>
              <form action="msgpass.php" method="get">
                <h3 id="myTop">Send your messages to Parents</h3>
                <input class="form-control mr-sm-2" type="text" placeholder="Enter number(s); separate by commas(,)" aria-label="Number(s)" name="num"> <br>
                <textarea class="form-control mr-sm-2" type="text" placeholder="message" aria-label="Number(s)"  maxlength="10"name="msg" > Enter your message</textarea> <br>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">send</button>
              </form>
      	</div>

       <!-- links to external file --><!--  -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="bootstrap/bootstrap.js"></script>
    </body>
</html>