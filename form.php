<?php
$action=$_REQUEST['action'];
    /* The contact form UI */
    ?>
    <form   method="POST">
    <input type="hidden" name="action" value="submit">
    Receipient1:<br>
    <input name="R1" type="text" size="15"/><br>
    Receipient2:<br>
    <input name="R2" type="text" size="15"/><br>
    Receipient3:<br>
    <input name="R3" type="text" size="15"/><br>
    Text Message:<br>
    <textarea name="sms" rows="7" cols="30"></textarea><br>
    <a href="<?php echo $link_address;?>"> Send </a>
    </form>
    <?php 
               /* Variables entered by the user*/
    
    $No1=$_REQUEST['R1'];
    $No2=$_REQUEST['R2'];
    $No3=$_REQUEST['R3'];
    $Message=$_REQUEST['sms'];
    if (($No1=="")||($No2=="")||($No3=="")||($Message==""))
        {
        echo "Please fill all the films";
        }else{
            /*Creating the url with the right variables*/
            $recepients=$No1."+".$No2."+".$No3;
                    $link_address="http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to=".$recepients."&from=lesapiti&text=".$Message."&dlr-mask=31";
            
        }

?>
                        