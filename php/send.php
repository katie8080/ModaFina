<?php
if(!$_POST) exit;

if($location = 1){
  $to = "desk@modafina.ca";
}
if($location = 2){
  $to = "desk@hairfantasy.ca"
}
	$name = $_POST['name'];
  $phone = $_POST['phone'];
	$email    = $_POST['email'];
	$subject  = 'An appointment reqest from your website';
  $comment  = $_POST['msg'];

	if(get_magic_quotes_gpc()) { $comment = stripslashes($comment); }

	 $e_subject = 'You\'ve been contacted by ' . $name . '.';

	 $msg  = "You have been contacted by $name with regards to $subject.\r\n\n";
	 $msg .= "$comment\r\n\n";
	 $msg .= "You can contact $name via email, $email , or via phone $phone.\r\n\n";
	 $msg .= "-------------------------------------------------------------------------------------------\r\n";

	 if(@mail($to, $e_subject, $msg, "From: $email\r\nReturn-Path: $email\r\n"))
	 {
     echo $msg;
		 echo '<div class="dt-sc-success-box aligncenter"><i class="fa fa-check"></i><strong>Success!</strong>Thanks for <span> Contacting Us </span>, We will call back to you soon.</div> ';
	 }
	 else
	 {
		 echo '<div class="dt-sc-error-box aligncenter"><i class="fa fa-times-circle"></i><strong>Error!</strong>Sorry your message <span>not sent</span>, Try again Later. </div> ';
	 }
?>
