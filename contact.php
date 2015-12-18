<?php
 
if(isset($_POST['email'])) {
        // EDIT THE 2 LINES BELOW AS REQUIRED
     $email_to = "catt@cattkaizen.com";
     $email_subject = "[!!! NEW MESSAGE FORM CATTKAIZEN.COM]";
     $redirect_after_success = "http://www.cattkaizen.com";
   
function died($error) {

echo  "<script type='text/javascript'>alert('$error');</script>";
echo "<script type='text/javascript'>window.history.back();</script>";
die();
    }
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        
 
        !isset($_POST['email']) ||
 
       
 
        !isset($_POST['message'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
 
    $email_from = $_POST['email']; // required
 
 
    $message = $_POST['message']; // required
 
      
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.\n';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.\n';
 
  }
 
 
 
  if(strlen($message) < 2) {
 
    $error_message .= 'The message you entered do not appear to be valid.\n';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 

 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 

 
    $email_message .= "message: ".clean_string($message)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
mail($email_to, $email_subject, $email_message, $headers);  
echo  "<script type='text/javascript'>alert('Email Sent! Thank you for contacting us, we will get back to you soon! :)');</script>";
echo "<script type='text/javascript'>window.location = '$redirect_after_success'</script>";
die();
 
}
 
?>