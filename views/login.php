<?php

$content = 
"
<div id=\"loginFormContainer\" class=\"flexRowContainer\">
    <form id=\"loginForm\" action=\"/ForceAndDestinyHub/\" method=\"POST\" class=\"flexColumnContainer flexCentre\">
        <h1>Log-in</h1>
        <hr>
        <label for=\"emailInput\">Email</label>
        <input type=\"text\" name=\"email\" id=\"emailInput\">
        <label>Password</label>
        <input type=\"password\" name=\"password\" id=\"passwordInput\">
        <input type=\"submit\" value=\"Log-in\">
        <input type=\"hidden\" name=\"requestType\" value=\"login\">
    </form>
</div>
";

$title = "Force and Destiny Hub";

require 'layout.php';

?>