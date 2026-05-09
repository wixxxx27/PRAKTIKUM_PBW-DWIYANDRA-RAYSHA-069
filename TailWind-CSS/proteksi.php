<?php
    session_start();

    if (!isset($_SESSION['login_Un51k4'])) {
        header("Location: loginn.php?message=" . urlencode("Mengakses fitur harus login dulu bro."));
        exit;
    }
?>
