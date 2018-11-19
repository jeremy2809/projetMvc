<?php
  
    include '../modele/add_post.modele.php';

   if ($_POST){
        addPost();

        // Retour à la page d'accueil une fois que le nouvel article du blog a été ajouté.
        header('Location: index.php');
        exit();
   } else {
        $result = loadListe();
        $authors = $result["authors"];
        $categories = $result["categories"];
        // Sélection et affichage du template PHTML.
        $template = 'add_post';
        include '../vue/layout.phtml';
   }