<?php
require "config.php";
$_SESSION['variable'];
session_unset();
session_destroy();
header("location: login.php");
?>