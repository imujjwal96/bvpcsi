<?php

// configuration
require("../includes/config.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    render("login.php", ["title" => "Login", "err" => ""]);
} else if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    if(!empty(email) && !empty($password)) {
        $pass_hash = md5($password);
        $result = query("SELECT * FROM info WHERE email = ? AND password = ?", $email, $pass_hash);
        if(count($result) == 0) {
            $err = "Invalid Username or Password ";
            render("login.php", ["err" => $err, "title" => "Login"]);
        }
        else {
            $_SESSION["id"] = $result[0]["id"];
            redirect("/");
        }
    }
    else {
        $err = "Enter Credentials";
        render("login.php", ["err" => $err, "title" => "Login"]);
    }
}
