 <?php


  include '../application/bdd_connection.php';

    function loadListe()
    {
    	global $pdo;
        // Récupération de tous les auteurs du blog.
        $query =
        '
            SELECT
                Id,
                FirstName,
                LastName
            FROM
                Author
        ';
        $resultSet = $pdo->query($query);
        $authors = $resultSet->fetchAll();

        // Récupération de toutes les catégories du blog.
        $query =
        '
            SELECT
                Id,
                Name
            FROM
                Category
        ';
        $resultSet = $pdo->query($query);
        $categories = $resultSet->fetchAll();

        return ["authors" => $authors, "categories" => $categories] ;
        
    }

    function addPost()
    {
    		global $pdo;
        // Ajout d'un article du blog.
        $query =
        '
            INSERT INTO
                Post
                (Title, Contents, Author_Id, Category_Id, CreationTimestamp)
            VALUES
                (?, ?, ?, ?, NOW())
        ';
        $resultSet = $pdo->prepare($query);
        $resultSet->execute([$_POST['title'], $_POST['contents'], $_POST['author'], $_POST['category']]);

        
    }