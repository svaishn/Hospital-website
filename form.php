<?php
if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "someone@example.com";
  $email = $_REQUEST['email'];
  $mobile = $_REQUEST['mobile'];
  $comment = $_REQUEST['message'];
  
  //send email
  mail($admin_email, "$mobile", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
?>