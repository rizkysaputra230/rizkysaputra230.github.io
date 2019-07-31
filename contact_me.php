<?php

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $mail = $_POST['mail'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];

   $mailTo = "rizkysptr230@gmail.com";
   $headers = "From : ".$mail;
   $txt = "You have receive message from: ".$name.".\n\n".$message;

   mail($mailTo, $subject, $txt, $headers);
   header("Location: index.php?mailsend");
}