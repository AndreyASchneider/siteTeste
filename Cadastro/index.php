<?php
    $user = array(
        "username" => isset($_POST["userlogin"])?$_POST["userlogin"]:"[ERRO! USUAŔIO NÃO INFORMADO!]",
        "fullname" => isset($_POST["nomecompleto"])?$_POST["nomecompleto"]:"[ERRO! NOME COMPLETO NÃO INFORMADO!]",
        "document" => isset($_POST["cpf"])?$_POST["cpf"]:"[ERRO! CPF NÃO INFORMADO!]",
        "email" => isset($_POST["email"])?$_POST["email"]:"[ERRO! EMAIL NÃO INFORMADO!]"
    );

    print_r($user);
?>  