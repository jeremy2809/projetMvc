<?php
    include '../application/bdd_connection.php';

    // Récupération d'un article du blog.
    $query =
    '
        SELECT
            Post.Id,
            Title,
            Contents,
            CreationTimestamp,
            FirstName,
            LastName
        FROM
            Post
        INNER JOIN
            Author
        ON
            Post.Author_Id = Author.Id
        WHERE
            Post.Id = ?
    ';
    $resultSet = $pdo->prepare($query);
    $resultSet->execute([$_GET['id']]);
    $post = $resultSet->fetch();

    // Récupération de tous les commentaires de l'article du blog.
    $query =
    '
        SELECT
            NickName,
            Contents,
            CreationTimestamp
        FROM
            Comment
        WHERE
            Post_Id = ?
    ';
    $resultSet = $pdo->prepare($query);
    $resultSet->execute([$_GET['id']]);
    $comments = $resultSet->fetchAll();
