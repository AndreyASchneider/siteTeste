<?php

    $username = $_POST["userlogin"];
    $fullname = $_POST["nomecompleto"];
    $document = $_POST["cpf"];
    $email = $_POST["email"];


    $user = array(
        "username" => $username,
        "fullname" => $fullname,
        "document" => $document,
        "email" => $email
    );

    print_r($user);
?>  