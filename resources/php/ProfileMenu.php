<?php 
    include $_SERVER["DOCUMENT_ROOT"] . "/acornhub/session.php";
?>
<div id="profileMenu">
    <?php
    if (isset($_SESSION["username"])) {
        echo "user: " . $_SESSION["username"];
        echo '<a href="?action=logout"><button>Log out</button></a>';
    } else {
    ?>
        <form action="" method="POST" class="form-container">
            <input type="text" placeholder="Enter Username" name="login_username" required>

            <input type="password" placeholder="Enter Password" name="login_psw" required>

            <button type="submit" class="login-submit">Login</button>
        </form>
    <?php
    }
    ?>
</div>