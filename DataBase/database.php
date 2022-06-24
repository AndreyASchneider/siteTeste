<?php
    $conn = new PDO("mysql:dbname=exemplo;host=localhost", "andrey", "senha");

    $stmt = $conn->prepare("SELECT * FROM USUARIOS");

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    var_dump($results);

?>