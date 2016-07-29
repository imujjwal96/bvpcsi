<?php

require("../includes/config.php");

$_SESSION = [];
if (!empty($_COOKIE[session_name()])) {
setcookie(session_name(), "", time() - 42000);
}
session_destroy();
redirect("/index.php");