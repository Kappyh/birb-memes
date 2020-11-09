<?php
    $name = $_POST["name"];
    $email = $_POST["email"];

    if($email && $name){
        echo "<p>E-mail: $email</p>";
    };
?>