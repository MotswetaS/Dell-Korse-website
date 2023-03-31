<?php
if(isset($_POST["submit"]));
{
    //Access the form data in the post array           
    $name = htmlspecialchars($_POST["name"]);
    $mailfrom = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["comment"]);
    $button = htmlspecialchars($_POST["submit"]); 

    // Define variables and initialize with empty values
$name = $email = $gender = $comment =
$name_err = $email_err = $gender_err = $comment_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    if(empty(trim($_POST["name"]))){
        $name_err = "Please enter your name.";
    } else{
        $name = trim($_POST["name"]);
    }
    
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter your email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Validate comment
    if(empty(trim($_POST["comment"]))){
        $comment_err = "Please enter your comment.";
    } else{
        $comment = trim($_POST["comment"]);
    }
    

    $mailTo= "sales@dellkorse.co.bw";
    $headers= "From: ".$mailfrom;
    $txt = "You have received a message from ".$name.".\n\n".$message;

    mail($mailTo. $subject, $txt, $headers);
    $_SESSION() ="Submit succcessful";
    header("location: index.html");
    exit();
}

?>