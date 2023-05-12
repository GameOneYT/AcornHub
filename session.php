<?php
session_start();
if (isset($_GET['action']) && $_GET['action'] == "logout") {
    session_destroy();
    // header('Location: /acornhub/');
    // header("location:javascript://history.go(-2)");
    // header('Refresh: 1; url=');
    header("Location: ", 303);
}
if (isset($_POST['login_username']) && isset($_POST['login_psw'])) {

    $login = SQLite3::escapeString($_POST['login_username']);
    $pass = SQLite3::escapeString($_POST['login_psw']);


    // $conn = new SQLite3('db/db_member.sqlite3');
    $conn = new SQLite3($_SERVER["DOCUMENT_ROOT"].'/acornhub/db/db_member.sqlite3');

    $query = $conn->query("SELECT COUNT(*) AS count FROM 'user' WHERE user.username LIKE '$login' AND user.password LIKE '$pass'");
    $row = $query->fetchArray();
    $users_count = $row['count'];

    if ($users_count < 1) {
        echo "Invalid username or password";
    } else {
        $query = $conn->query("SELECT * FROM 'user' WHERE user.username LIKE '$login' AND user.password LIKE '$pass' LIMIT 1");
        while ($fetch = $query->fetchArray()) {
            $_SESSION["user_id"] = $fetch['user_id'];
            $_SESSION["username"] = $fetch["username"];
            $_SESSION["type"] = $fetch['type'];
            // header('Location: /acornhub/');
            // header("location:javascript://history.go(-1)");
            header("Location: ", 303);


        }
    }
}
