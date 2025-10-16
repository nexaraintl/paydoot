<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: paydoot_front/login.php");
    exit();
?>