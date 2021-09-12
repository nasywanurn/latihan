<?php
    $username = "user123";
    $email = "user123@gmail.com";
    $password = "pass123";

    echo "username/email : <b>$username</b>";
    //echo "email: $email";
    echo "<br>password : <b>$password</b>";
    
    echo "<br> cek login: ".(($username == "user123" || $email == "user123@gmail.com") && ($password == "pass123"));

?>