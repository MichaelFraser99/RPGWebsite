<?php
function verifyLogin($email, $password) {
    //connect to database later

    if ($email == "mj.fraser99@icloud.com" && $password == "password") {
        return true;
    } else {
        return false;
    }
}
?>