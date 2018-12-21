<?php 
function is_ajax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}

if(is_ajax()) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $header = 'From: ' . $email . "\r\n";
    $header .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
    $header .= 'Mime-Version: 1.0 \r\n';
    $header .= 'Content-Type: text/plain';
    $bodyMessage = "This message was sent by: " . $name . "\r\n";
    $bodyMessage .= "Email: " . $email . "\r\n";
    $bodyMessage .= "Message: " . $message . "\r\n";
    $for = "madushanperera3817@gmail.com";
    $subject = "Contact from website";
    mail($for, $subject, utf8_encode($bodyMessage), $header );
    
    echo json_encode(array(
        'message' => sprintf('Your Message has been sent!')
    ));
    
} else {
    die("That's not allowed!!");
}


?>