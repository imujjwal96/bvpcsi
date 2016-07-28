<?php

    // configuration
    require("../includes/config.php"); 
    
    $events = query("SELECT * FROM events ORDER BY start_datetime desc");
    render("events.php", ["title" => "Technical &amp; Cultural Events", "events" => $events]);

?>
