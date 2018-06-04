<?php
if (isset($_POST['signup'])) {
    $register = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `users` WHERE `email`='$email'"));
    if ($register == 0) {
        $insert = mysqli_query($con, "INSERT INTO `users` (`email`,`wachtwoord`) VALUES ('$email','$password')");
        if ($insert)
            echo "success";
        else
            echo "error";
    } else if ($register != 0)
        echo "exist";
} else if (isset($_POST['login'])) {
    $login = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'"));
    if ($login != 0)
        echo "success";
    else
        echo "error";
}