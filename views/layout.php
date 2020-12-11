<html>
    <head>
        <title><?php echo $title?></title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
        <script src="scripts.js"></script>
    </head>
    <?php 
    if (isset($_SESSION['userID'])) {?>
    <aside>
        <input type="button" id="rollTab" value="Regular Dice">
        <div id="rollingArea">
            <div class="flexRowContainer">
                <h1>Roll die</h1>
            </div>
            <hr>
            <div class="flexRowContainer">
                <div id="d6">
                    <h3>D6</h3>
                    <br>
                    <div class="flexRowContainer">
                        <input id="minusd6" type="button" value="-">
                        <input id="quantityAread6" type="text" value="1" disabled>
                        <input id="plusd6" type="button" value="+">
                    </div>
                    <br>
                    <input type="button" id="submitD6" value="Roll D6">
                </div>
            </div>
            <hr>
            <div class="flexRowContainer">
                <div id="d10">
                    <h3>D10</h3>
                    <br>
                    <div class="flexRowContainer">
                        <input id="minusd10" type="button" value="-">
                        <input id="quantityAread10" type="text" value="1" disabled>
                        <input id="plusd10" type="button" value="+">
                    </div>
                    <br>
                    <input type="button" id="submitD10" value="Roll D10">
                </div>
            </div>
            <hr>
            <div class="flexRowContainer">
                <div id="d12">
                    <h3>D12</h3>
                    <br>
                    <div class="flexRowContainer">
                        <input id="minusd12" type="button" value="-">
                        <input id="quantityAread12" type="text" value="1" disabled>
                        <input id="plusd12" type="button" value="+">
                    </div>
                    <br>
                    <input type="button" id="submitD12" value="Roll D12">
                </div>
            </div>
            <hr>
            <div class="flexRowContainer">
                <div id="resultsArea">
                    <label id="results">Results:</label>
                    <hr>
                    <label id="total">Total:</label>
                </div>
            </div>
        </div>
    </aside>
    <userTabAside>
        <input type="button" id="userTab" value="<?php echo $_SESSION["userID"]; ?>" >
        <div id="userInfoArea">
            <div class="flexRowContainer">
                <h1>User Information</h1>
            </div>
            <hr>
            <div class="flexRowContainer">
                <label>Email:</label>
                <label><?php echo $_SESSION["userID"]; ?></label>
            </div>
            <hr>
            <div class="flexRowContainer">
                <!--Currently has no functionality-->
                <form id="changePassword" method="POST" action="#">
                    <input type="submit" value="Change Password">
                    <input type="hidden" name="requestType" value="changePassword">
                </form>
            </div>
            <hr>
            <div class="flexRowContainer">
                <form id="logoutForm" method="POST" action="/ForceAndDestinyHub/">
                    <input type="submit" value="Log-out">
                    <input type="hidden" name="requestType" value="logout">
                </form>
            </div>
        </div>
    </userTabAside>
    <?php } ?>
    <contentArea>
        <?php echo $content?>
    </contentArea>
</html>