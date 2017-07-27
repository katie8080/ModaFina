<?php


if(isset($_POST['submit'])){
  $location = trim($_POST['location']);
  $name = trim($_POST['name']);
  $phone = trim($_POST['phone']);
  $email = trim($_POST['email']);
  $message = trim($_POST['message']);
}
function sendMessage($location, $fname, $lname, $phone, $email, $message){
  if($location = 1){
    $to = "desk@modafina.ca";
    $subj = "Appointment request from your website"
    $extra = "Reply to:{$email}";
    $body = "Name:{$name}\n\n Email: {$email}\n\n Phone: {$phone}\n\n Request: {$message}\n\n {$extra}"
  }
  if($location = 2){
    $to = "desk@hairfantasy.ca";
    $subj = "Appointment request from your website"
    $extra = "Reply to:{$email}";
    $body = "Name:{$name}\n\n Email: {$email}\n\n Phone: {$phone}\n\n Request: {$message}\n\n {$extra}"
  }
  echo $body;
  mail($to, $subj, $body, $extra);
}




?>
