<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

header("Location: https:ecofeelia.netlify.app"); // Change to the desired website
exit();
?>
