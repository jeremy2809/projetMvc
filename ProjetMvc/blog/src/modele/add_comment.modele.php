<?php

include '../application/bdd_connection.php';

    // Ajout d'un commentaire à un article du blog.
 
    $query =
    '
        INSERT INTO
            Comment
            (NickName, Contents, Post_Id, CreationTimestamp)
        VALUES
            (?, ?, ?, NOW())
    ';
    $resultSet = $pdo->prepare($query);//[$_POST['nickName'], $_POST['contents'], $_POST['postId']]
    $resultSet->bindParam(1, $_POST['nickName'], PDO::PARAM_STR);
    $resultSet->bindParam(2, $_POST['contents'], PDO::PARAM_STR);
    $resultSet->bindParam(3, $_POST['postId'], PDO::PARAM_INT);
    $resultSet->execute();
