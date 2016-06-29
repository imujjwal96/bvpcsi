<?php
    /*****************************************************
    * functions.php                                      * 
    * Contains all the functions required in the project *
    *                                                    *
    *****************************************************/


    /****************************************************
    * Redirects user to a location                      *
    * which can be a URL or a relative path to a page   *
    * in the Website's directory                        *
    ****************************************************/
    function redirect($location)
    {
        // When the page to be redirected to is a URL
        if (preg_match("/^https?:\/\//", $location))
        {
            header("Location: " . $location);
        }
        // When the location inside the website given is absolute
        else if (preg_match("/^\//", $location))
        {
            if(isset($_SERVER['HTTPS']))
            {  
                $protocol = "https";
            }
            else
            {
                $protocol = "http";
            }
            $host = $_SERVER["HTTP_HOST"];
            header("Location: $protocol://$host$location");
        }/*
		
			ISSUE HERE
		
        // When the location inside the website given is relative
        else
        {
            // adapted from http://www.php.net/header
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
            header("Location: $p	otocol://$host$path/$location");
        }*/
		
    }

    /************************************************************
    * Renders a template if it exists, by including the header, *
    * footer and the template                                   *
    ************************************************************/
    function render($template, $values = [])
    {
        // Checking the file of the template exists
        if (file_exists("../templates/$template"))
        {
            // extract variables into local scope
            extract($values);

            // Include the header
            require("../templates/header.php");

            // Include the template
            require("../templates/$template");

            // Includet the footer
            require("../templates/footer.php");
        }

        // else show an error (temp)
        else
        {
            trigger_error("Invalid template: $template", E_USER_ERROR);
        }
    }
    /**
     * Function to provide Mailing Feature 
     */
    function mailer($from, $from_name, $subject, $body, $alt_body, $to, $name)
    {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_NAME;
        $mail->Password = SMTP_PSWD;
        $mail->Port = SMTP_PORT;
        $mail->setFrom($from, $from_name);
        $mail->addAddress($to, $name);
        $mail->isHTML(true); 
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = $alt_body;
        $mail->send();
    } 
    /**
     * Function to implement ContactUs Feature
     */
    function contactus($from, $from_name, $subject, $message) { 
        $to = "ujjwalbhardwaj@bvpcsi.in";
        $name = "Ujjwal Bhardwaj";
        $body = '<html>
                    <body>
                        <h1>' . $subject . '</h1>
                        <p>' . $message . '</p>
                        <p><strong>' . $from_name . '</strong></p>
                    </body>   
                 </html>';
        mailer($from, $from_name, $subject, $body, $message, $to, $name);
    }
    /**
    * Checks e-mail address
    */
    function email_valid($email)
    {
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }
?>
