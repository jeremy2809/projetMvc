<?php

    include '../modele/edit_post.modele.php';

    if(empty($_POST))
    {
        // Validation de la query string dans l'URL.
        if(!array_key_exists('id', $_GET) OR !ctype_digit($_GET['id']))
        {
            header('Location: index.php');
            exit();
        }

        $post = loadPost();
        // Sélection et affichage du template PHTML.
        $template = 'edit_post';
        include '../vue/layout.phtml';
    }
    else
    {
        // Edition d'un article du blog.
        editPost();
        // Retour au panneau d'administration.
        header('Location: admin.php');
        exit();
    }
