<?php
include('connection.php');


session_unset();

session_start();

session_destroy();

header("Location:index.php");
?>