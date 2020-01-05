<?php
    session_start();
    unset($email);
    session_destroy();
    header("Location: ../dangnhap.php");
?>