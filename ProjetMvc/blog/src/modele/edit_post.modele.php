<?php

    include '../application/bdd_connection.php';

    function loadPost()
    {
        global $pdo;
        // Validation de la query string dans l'URL.
        

        // Récupération d'un article du blog.
        $query =
        '
            SELECT
                Id,
                Title,
                Contents
            FROM
                Post
            WHERE
                Id = ?
        ';
        $resultSet = $pdo->prepare($query);
        $resultSet->execute([$_GET['id']]);
        $post = $resultSet->fetch();
        return $post;
    }
    
    function editPost()
    {
        global $pdo;
        // Edition d'un article du blog.
        $query =
        '
            UPDATE
                Post
            SET
                Title = ?,
                Contents = ?
            WHERE
                Id = ?
        ';
        $resultSet = $pdo->prepare($query);
        $resultSet->execute([$_POST['title'], $_POST['contents'], $_POST['postId']]);

    
    }
