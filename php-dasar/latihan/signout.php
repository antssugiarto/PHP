<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('num', '', time() - 1);
setcookie('key', '', time() - 1);

header("Location: signin.php");