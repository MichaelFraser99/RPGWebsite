<?php

//Gets all games player has been invited to and maps an gameID to a game name
$games[1] = "Game_1";
$games[2] = "Game_3";
$games[5] = "Game_8";
//var_dump($games);


if (sizeof($games) >= 1) {
    $gamesListKeys = array_keys($games);
    $gamesListHTML = "<div id=\"gamesList\" class=\"flexColumnContainer\">";

    foreach ($gamesListKeys as $key) {
        $gamesListHTML = $gamesListHTML . "
        <hr>
        <br>
        <div class=\"flexRowContainer\">
            <form class=\"joinGameForm\" method=\"POST\" action=\"#\">
                <label>" . $games[$key] . "</label>
                <input type=\"submit\" value=\"Join\">
                <input type=\"hidden\" name=\"requestType\" value=\"joinGame\"
                <input type=\"hidden\" name=\"gameID\" value=\"" . $key . "\">
            </form>
        </div>
        <br>
        ";
    }
    
    $gamesListHTML = $gamesListHTML . "<hr></div>";
} else {
    $gamesListHTML = "<h3>You have not been invited to any games</h3>";
}

$content = 
"
<h1>Welcome to the game hub</h1>
<br>
<hr>
<br>
<h2>Games</h2>
<br>
" . $gamesListHTML . "
<br>
<br>
<form id=\"createGameForm\" method=\"POST\" action=\"#\">
    <input type=\"submit\" value=\"Create a game\">
    <input type=\"hidden\" name=\"requestType\" value=\"createGame\">
</form>
";


$title = "Force and Destiny Hub";
require 'layout.php'
?> 