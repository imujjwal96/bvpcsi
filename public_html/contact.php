<?php
    // configuration
    require("../includes/config.php"); 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $subject = htmlspecialchars($_POST["phone"]);
        $message = htmlspecialchars($_POST["message"]);
        contactus($email, $name, $subject, $message);
        redirect("/index.php");
    }
    else 
    {
        redirect("/index.php");
    }
?>