<?php

$to = "james@thekao.com";

$name = $_POST['name'];
$email=$_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$headers = "From:" . $email . "\r\n" .
           "Reply-To: james@thekao.com" . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

$isSent = mail($to,$subject,$message);
// echo "Mail sent."


// if(isset($_POST["submit"])) {
//
//     // Email receipient
//     $to ='james@thekao.com';
//
//     // // Checking For Blank Fields..
//     // if($_POST["name"]==""||$_POST["email"]==""||$_POST["subject"]==""||$_POST["message"]=="") {
//     //     echo "Fill All Fields..";
//     // }
//
//     else {
//         // Check if the "Sender's Email" input field is filled out
//         $email=$_POST['email'];
//         // Sanitize and Validate E-mail Address
//         $email =filter_var($email, FILTER_SANITIZE_EMAIL);
//         $email= filter_var($email, FILTER_VALIDATE_EMAIL);
//
//         if (!$email){
//             echo "Invalid Email";
//         }
//         else {
//             $subject = $_POST['subject'];
//             $message = $_POST['message'];
//             $headers = 'From:'. $email . "\r\n"; // Sender's Email
//             $headers .= 'Cc:'. $email . "\r\n"; // Carbon copy to Sender
//
//             // Message lines should not exceed 70 characters (PHP rule), so wrap it
//             $message = wordwrap($message, 70);
//
//             // Send Mail By PHP Mail Function
//             $send_contact = mail($to, $subject, $message, $headers);
//
//             // Check, if message sent to your email
//             // display message "We've recived your information"
//             if($send_contact) {
//                 echo "Thanks!";
//             } else {
//                 echo "ERROR";
//             }
//         }
//     }
// }
?>
<html>
  <head>
    <title>Does it work?</title>
  </head>
  <body>
    <h3><?php if($isSent) echo 'Sent';?></h3>

  </body>
</html>
