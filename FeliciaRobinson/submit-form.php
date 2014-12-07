<?php
  // A very basic PHP form sample. A mix of the below examples:
  //------------------------------------------------------------
  // http://css-tricks.com/nice-and-simple-contact-form/
  // http://www.formget.com/send-an-email-on-form-submission-using-php/
  // http://stackoverflow.com/questions/16818279/how-to-redirect-to-success-fail-pages-after-php-form-submission

 
  $to = "ssnd0038@humbermail.ca";
  $subject = "Hey";

  $from = $_POST["email"]; //this will need to exactly match as entered
  $name = $_POST["name"]; 
  $email = $_POST["email"]; 
  $message = $_POST["message"]; 

  //Check if fields are blank
  if($_POST["name"] == "" || $_POST["email"] == "" || $_POST["message"] == ""){

  	echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Fill in all fields.')
        window.location.href='index.php#contact';
      </SCRIPT>");

  } else {

  	// prepare email body text
  	$body = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Message: " . $message;
  	// send email 
  	$success = mail($to, $subject, $body, "From: <$email>");

    if($success){
    	//redirects to a new page
      //header("Location: success.php");
      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Success!\\n\\nYour message has been sent.')
        window.location.href='index.php#contact';
      </SCRIPT>");
    } else { 
      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Error!\\n\\nYour message has not been sent.')
        window.location.href='index.php#contact';
      </SCRIPT>");
     }    
  }
?>

