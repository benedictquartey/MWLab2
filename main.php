<?php
    //intialise variables
    $sender = $phone = $message = $response = "";

    if (isset($_POST["sender"]) && $_POST["phone"] && $_POST["message"]){
        $sender = $_POST["sender"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
    }

    echo "Hello $sender. Number: $phone. Message: $message";
    
    $url = "144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to=$phone&from=$sender&text=$message&dlr-mask=31";
    
    //echo $url;
    //create new HttpRequest object
    $req = new HttpRequest($url, HttpRequest::METH_POST);
    
    try{
        $req.send();
        if($req.getResponseCode() = 200){
            $response = $req.getRawResponseMessage();
            echo $response;
        }
    }catch(HttpException $exc){
        echo $exc;
    }
?>
