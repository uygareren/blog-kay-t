<?php

if (isset($_SESSION['auth'])) {
    if (isset($_SESSION['role']) && $_SESSION['role'] != 1) {
        $_SESSION['message'] = "You are not authorized to access the dashboard!";
        header("Location: ../index.php");
        exit();
    }
} else {
    $_SESSION['message'] = "You must log in!";
    header("Location: login.php");
    exit();
}

?>
