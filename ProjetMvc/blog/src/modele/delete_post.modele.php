<?php

  include '../application/bdd_connection.php';


    // Suppression d'un article du blog.
    $query =
    '   DELETE FROM Comment WHERE Post_Id = ?;
        DELETE FROM
            Post
        WHERE
            Id = ?
    ';
    $resultSet = $pdo->prepare($query);
    $resultSet->execute([$_GET['id'],$_GET['id']]);
