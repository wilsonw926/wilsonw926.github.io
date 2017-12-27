<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "wilsons926@berkeley.edu";
$subject = "Message from wilsonw926.github.io";
$body = "This is a message from wilsonw926.github.io. \n\n $message";

mail ($to, $subject, $body);

echo "Message Sent! <a href='index.html'>Click Here to send another email."

?>