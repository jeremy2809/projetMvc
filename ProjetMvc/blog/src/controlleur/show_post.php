<?php

    // Validation de la query string dans l'URL.
    if(!array_key_exists('id', $_GET) OR !ctype_digit($_GET['id']))
    {
        header('Location: index.php');
        exit();
    }

    include '../modele/show_post.modele.php';

    // Sélection et affichage du template PHTML.
    $template = 'show_post';
    include '../vue/layout.phtml';

