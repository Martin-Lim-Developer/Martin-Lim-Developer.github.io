<?php 

if (isset($_POST['submit'])) {
  $name = htmlspecialchars($_POST['name']);
  $emailFrom = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // Validation
  $msg = '';

  if(!empty($name) && !empty($name) && !empty($message)) {
    $emailTo = "martin@martinlim.technology";
    $headers = "From: " . $emailFrom;
    $text = "Received an email from " . $name . ".\n\n\n" . $message;
  
    if(mail($emailTo, 'Email from Portfolio website', $text, $headers)){
      header("Location: contactSuccess.html");
    }
    else
    {
      header("Location: contactFail.html");
    }
    
  }
  else {
    $msg = 'Please fill in all fields';
    header("Location: contactFail.html");
  }
}

?>