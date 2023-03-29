<?php

if(issets($_POST['submit'])){
  
    $name= $_POST['name'];
    $subject = $_POST['subject'];
    $email= $_POST['email'];
    $mailfrom= $_POST['mail'];
    $message= $_POST['message'];


    $mailTo= "sales@dellkorse.co.bw";
    $mailTo= "motswetar@gmail.com";
    $headers= "From:".$mailfrom;
    $txt = "You have received a message from" . $name.".\n\n".$message;

    mail($mailTo. $subject, $txt, $headers);
    header ("Location: index.php?mailsend");
}











?>