<?php
/**
 * Created by PhpStorm.
 * User: hudson.lekunze
 * Date: 9/15/2017
 * Time: 9:27 AM
 */

if(isset($_POST['sent'])){




    $SENDER_ID = $POST['senderID'];
    $RECIPIENTS = $POST['recipients'];
    $MESSAGE = $POST['message'];

    $url = "http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to=233213996515;233265057796&from=MWTest&text=Hello&dlr-mask=31";

    $ch = curl_init($url);

    $result = curl_exec($ch);
    curl_close($ch);


}
