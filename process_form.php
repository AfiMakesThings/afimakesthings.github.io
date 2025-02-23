<?php
$to = "abbasi.a92@gmail.com";
$subject = "Message from your website";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$message_body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

if (mail($to, $subject, $message_body)) {
  echo "Message sent successfully!";
} else {
  echo "Message failed to send.";
}
?>