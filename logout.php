<?php
session_name("loginbuffet");
session_start();
session_destroy();

header("Location: index.php");
?>