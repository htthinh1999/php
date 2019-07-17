<?php
    $email = $_POST["email"];
    $password = $_POST["password"];
    echo ($email == "admin" && $password == "admin")? "Đăng nhập thành công!": "Đăng nhập thất bại!";