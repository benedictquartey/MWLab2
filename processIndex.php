<?php 
    /**
    *@author Warihana Gumah
    */

    
    $okay = false;
    $receipientNumber; $Message;

    /*
    *gets receipinet(S) number
    */    
    
    if (isset($_POST['contact']) && !empty($_POST['contact']))
    {
        $receipientNumber = $_POST['contact'];
        $okay=true;
    }

    /*
    *Gets senders message
    */

    if (isset($_POST['message']) && !empty($_POST['message'])) 
    {
        $Message = $_POST['message'];
        $okay=true;
    }


    /*
    *check if the send button is clicked
    */
    if (isset($_POST['send']))
    {
        if($okay=true)
        {
            $receipientNumber=str_replace(",","+",$receipientNumber);
            header("Location: http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to=" .$receipientNumber."&from=Warihana&text=" .$Message. "&dlr-mask=31");
        }
        $okay=false;
    }

?>


        
        


      