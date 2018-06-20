<?php
//if (isset($_POST['signup'])) {
//    $register = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `users` WHERE `email`='$email'"));
//    if ($register == 0) {
//        $insert = mysqli_query($conn, "INSERT INTO `users` (`email`,`wachtwoord`) VALUES ('$email','$wachtwoord')");
//        if ($insert)
//            echo "success";
//        else
//            echo "error";
//    } else if ($register != 0)
//        echo "exist";
//} else if (isset($_POST['login'])) {
//    $login = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `users` WHERE `email`='$email' AND `wachtwoord`='$wachtwoord'"));
//    if ($login != 0)
//        echo "success";
//    else
//        echo "error";
//}

 include "connect.php";
 if(isset($_POST['insert']))
 {
     $email=$_POST['email'];
     $wachtwoord=$_POST['wachtwoord'];
     $q=mysqli_query($conn,"INSERT INTO `users` (`email`,`wachtwoord`) VALUES ('$email','$wachtwoord')");
     if($q)
         echo "success";
     else
         echo "error";
 }
 ?>