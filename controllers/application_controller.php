<?php
require_once('../includes/helpers.php');

if (isset($_GET['page']))
  $page = $_GET['page'];
elseif(isset($_POST['page']))
  $page = 'post_' . $_POST['page'];
else
  $page = 'index';

switch($page)
{
  case 'index':
    require_once('messages_controller.php');
    render_messages_form();
    break;
  case 'post_send_message':
    require_once('messages_controller.php');
    $message = htmlspecialchars($_POST['message']);
    $receivers = htmlspecialchars($_POST['receivers']);
    send_message($receivers, $message);
    break;
}

?>
