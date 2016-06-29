<?php
    /********************************
    * Configures Pages              *
    ********************************/  
    
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    //Requiring the functions
    require("functions.php");

   // require("../phpmailer/PHPMailerAutoload.php");

    // Not allowing the user to access any pages except the one mentioned
    if (!in_array($_SERVER["PHP_SELF"], ["/index.php", "/council.php", "/gallery.php", "/events.php"]))
    {
        redirect("index.php");
    }
?>
