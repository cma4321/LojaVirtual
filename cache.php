<?php

session_start(); 

unset($_SESSION['user']);
unset($_SESSION['cart']);

header("refresh:1;url= ./");