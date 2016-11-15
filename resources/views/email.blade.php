<?php 



// Create the Transport
include_once 'public/Swiftmailer/lib/swift_required.php';
// Create the mail transport configuration
$transport = Swift_MailTransport::newInstance();

// Create the message
$message = Swift_Message::newInstance();
$message->setTo(array(
  "nza.terrence@gmail.com" => "Aurelio De Rosa",
  "progterrence@gmail.com" => "Audero"
));
$message->setSubject("This email is sent using Swift Mailer");
$message->setBody("You're our best client ever.");
$message->setFrom("account@bank.com", "Your bank");

// Send the email
$mailer = Swift_Mailer::newInstance($transport);

if ($mailer->send($message)) { echo "success"; } else { echo "failed";}
//$mailer->send($message);