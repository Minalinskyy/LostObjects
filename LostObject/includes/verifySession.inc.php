<?php
    require_once "./includes/param.inc.php";
    global $lifeTimeInMin;
    session_start();

    if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true){
        // logged in
    } else {
        session_destroy();
        echo "<h3>You don't have yet signed in.</h3>";
        echo "<p><a href=\"./index.php\">Return to homepage</a></p>";
        include "footer.inc.php";
        die();
    }

    if(isset($_SESSION["lastActivity"]) && (time() - $_SESSION["lastActivity"] > 60 * $lifeTimeInMin)) {
        session_destroy();
        echo "<p><a href=\"./index.php\">Return to homepage</a></p>";
        die("Your session is overtime.");
    } else{
        $_SESSION["lastActivity"] = time();
        session_regenerate_id(true);
    }
?>
