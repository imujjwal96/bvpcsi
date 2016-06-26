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
        }
        // When the location inside the website given is relative
        else
        {
            // adapted from http://www.php.net/header
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
            header("Location: $protocol://$host$path/$location");
        }
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
    
   
?>
