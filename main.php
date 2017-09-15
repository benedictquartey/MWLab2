<?php
    $sender = $phone = $message = "";

    if (isset($_POST["sender"]) && $_POST["phone"] && $_POST["message"]){
        $sender = $_POST["sender"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
    }

    echo "Hello $sender. Number: $phone. Message: $message";
    
    $url = ""

?>
