<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['level']);
session_destroy();
header("Location:/efoody2/front_page/home");
?>