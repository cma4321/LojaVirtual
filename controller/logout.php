<?php

session_start();
unset($_SESSION['cart']);
session_destroy();
header("refresh:1;url= ../index.php");
