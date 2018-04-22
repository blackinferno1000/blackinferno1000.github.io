<?php
  if (isset($_POST["submit"])){
    $to = "seanalexander360@gmail.com";

    $from = empty(trim($_POST["email"])) ? "noemail@sample.com" : sanitize_string($_POST["email"]);

    $subject = "Portfolio Form Reply";

    $message = empty(trim($_POST["message"])) ?  "No message" : sanitize_string($_POST["message"]);

    $name = empty(trim($_POST["name"])) ? "No name" : sanitize_string($_POST["name"]);

    $headers = "From: $from" . "\r\n";

    $message .= "\n\n - $name";

    $sent = mail($to,$subject,$message,$headers);
    }

  function sanitize_string($string){
$string = trim($string);
$string = strip_tags($string);
return $string;
  }
?>
