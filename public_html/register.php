<?php

// configuration
require("../includes/config.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    redirect("login.php");
} else if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    if(!empty($name) && !empty($email) && !empty($password)) {
        if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $err = "Name should contain only letters and whitespaces";
            render("register.php", ["err" => $err, "title" => "Register"]);
        }
        else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $err = "Invalid email format";
                render("register.php", ["err" => $err, "title" => "Register"]);
            } else {
                // Checks if the email-id inputted doesn't already exist in the table
                $result2 = query("SELECT * FROM info WHERE email = ?", $email);
                if (count($result2) != 0) {
                    $err = "Email-id already registered";
                    render("register.php", ["err" => $err, "title" => "Register"]);
                } else {
                    // Encrypting the password & email-id
                    $pass_hash = md5($password);
                    $query_ins = query("INSERT INTO `info` (id, name, email, password) VALUES
                        (NULL, ?, ?, ?)", $name, $email, $pass_hash);
                    redirect("./login.php");
                }
            }
        }
    }
    else {
        $err = "Please Fill Up the Form Completely";
        render("register.php", ["err" => $err, "title" => "Register"]);
    }
}