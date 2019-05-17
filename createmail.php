<?php

const STATUS_DANGER = 'alert-danger';
const STATUS_SUCCESS = 'alert-success';

// returns a message and a status
function parseMail($name, $email, $message) {
    if (!filter_has_var(INPUT_POST, 'submit')) {
        return array("", "");
    }
    
    if(empty($email) || empty($name) || empty($message)) {
        return array('Please fill in all the fields', STATUS_DANGER);
    }
    
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        return array('Please use a valid email', STATUS_DANGER);
    }
    
    if(tryToSendMail($name, $email, $message)) {
        return array('Thank You! Your message has been sent.', STATUS_SUCCESS);
    } else {
        return array('Something went wrong. Your message was not sent. Please try again.', STATUS_DANGER);
    }
}
    
function tryToSendMail($name, $email, $message) {
    $toEmail = 'balintperjesi@gmail.com';
    $subject = 'Contact Request From '.$name;
    $body = '<h2>Contact Request</h2>
			<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Message</h4><p>'.$message.'</p>
				';

    // Email Headers
    $headers = "MIME-Version: 1.0" ."\r\n";
    $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

    // Additional Headers
    $headers .= "From: " .$name. "<".$email.">". "\r\n";

    return mail($toEmail, $subject, $body, $headers);
}
