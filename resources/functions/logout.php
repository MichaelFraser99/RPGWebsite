<?php
function logout() {
    //Should unset all session values set during use
    unset($_SESSION['userID']);
}
?>