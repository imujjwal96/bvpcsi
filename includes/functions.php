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
		//echo "<script>console.log(\"".$template."\");</script>";
		
        // Checking the file of the template exists
        if (file_exists("../templates/$template"))
        {
			// ******************************************************
			
			// Check It @ujjwal
			
			//*******************************************************
			
			if($template == "dashboard.php"){
				// extract variables into local scope
            extract($values);

            // Include the header
            require("../templates/dashheader.php");

            // Include the template
            require("../templates/$template");

            // Includet the footer
            require("../templates/dashfooter.php");
			}
			
			// ************************************************
			
			else{
			// extract variables into local scope
            extract($values);

            // Include the header
            require("../templates/header.php");

            // Include the template
            require("../templates/$template");

            // Includet the footer
				require("../templates/footer.php");}
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
    /*******************************************************
    * Executes SQL statement                               *
    * taking the statement as an argument                  *
    * If it is a SELECT command, Fetch the output an store *
    * it in an associative array, else redirects           *
    *******************************************************/
    function query(/* $sql [, ... ] */)
    {
        $sql = func_get_arg(0);
        $parameters = array_slice(func_get_args(), 1);
        static $handle;
        if (!isset($handle))
        {
            try
            {
                $handle = new PDO("mysql:dbname=" . DATABASE . ";host=" . SERVER, USERNAME, PASSWORD);
                $handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
            }
            catch (Exception $e)
            {
                trigger_error($e->getMessage(), E_USER_ERROR);
                exit;
            }
        }
        $statement = $handle->prepare($sql);
        if ($statement === false)
        {
            trigger_error($handle->errorInfo()[2], E_USER_ERROR);
            exit;
        }
        $results = $statement->execute($parameters);
        if ($results !== false)
        {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            return false;
        }
    }
    /**
     * Function to Separate Date from the SQL DATETIME format    
     */
    function date_separator($datetime = array()) 
    {
        $date = explode("-", (explode(" ", $datetime)[0]));
        switch ($date[1]) {
            case 1: $month = "January"; break;
            case 2: $month = "February"; break;
            case 3: $month = "March"; break;
            case 4: $month = "April"; break;
            case 5: $month = "May"; break;
            case 6: $month = "June"; break;
            case 7: $month = "July"; break;
            case 8: $month = "August"; break;
            case 9: $month = "September"; break;
            case 10: $month = "October"; break;
            case 11: $month = "November"; break;
            case 12: $month = "December";break;
            default: break;
        }
        return array(
            "day" => $date[2],
            "month" => $month,
            "year" => $date[0]
        );
    }
    /**
     * Function to Separate Time from the SQL DATETIME format    
     */
    function time_separator($datetime = array()) 
    {
        $time = explode(":", (explode(" ", $datetime)[1]));
        return array(
            "hour" => $time[0],
            "minute" => $time[1],
            "second" => $time[2]
        );
    }
    /**
     * Function to Compare two Dates
     */
    function date_compare($date1, $date2) 
    {
        if ($date1["day"] == $date2["day"] && $date1["month"] == $date2["month"] && $date1["year"] == $date2["year"]) {
            return true;
        } else {
            return false;
        }
    }

    function slash_string($string) {
        $string = str_replace(" ", "", $string);
        $string = strtolower($string);
        return $string;
    }

?>
