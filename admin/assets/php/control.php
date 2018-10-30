<?php
    session_name("loginbuffet");
    session_start();
    if (!isset($_SESSION["documento"]) || $_SESSION["documento"] =="") {
        header("Location: index.php");
    }
?>