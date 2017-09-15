<?php
class Message
{
  public function get_numbers_array($numbers)
  {
    return explode(',', $numbers);
  }

  public function send_messages($receivers, $message)
  {
    $receivers = $this->get_numbers_array($receivers);
    foreach($receivers as $receiver)
    {
      $url = "http://144.76.58.179:16243/cgi-bin/sendsms?username=senduser&password=sendpass&to=".$receiver."&from=". "BrandonWO". "&text=" . $message."&dlr-mask=31";
      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      $response = curl_exec($curl);
    }
  }
}
?>
