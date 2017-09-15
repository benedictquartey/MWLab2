<?php
// The function displays the messages form
function render_messages_form($form_elements = array())
{
  render('templates/header', array('title' => 'Send Message'));
  render('messages_form', $form_elements);
  render('templates/footer');
}

// This broadcasts a messages to a group of users
function send_message($receivers, $message)
{
 include_once('../models/message.php');
 $message_model = new Message();
 $message_model->send_messages($receivers, $message);
}
?>
