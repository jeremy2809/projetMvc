<?php

    // Validation de la query string dans l'URL.
    if(!array_key_exists('id', $_GET) OR !ctype_digit($_GET['id']))
    {
        header('Location: index.php');
        exit();
    }

    include '../modele/delete_post.modele.php';

    // Redirection vers le panneau d'administration.
    header('Location: admin.php');
    exit();

