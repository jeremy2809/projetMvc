<?php

    include '../modele/add_comment.modele.php';
    // Retour à l'article détaillé une fois que le nouveau commentaire a été ajouté.
    header('Location: article-'.$_POST['postId']);
    exit();