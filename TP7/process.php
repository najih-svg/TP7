<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title> le resultat </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="result-container">
        <h1>Merci pour votre inscription !</h1>
        
        <?php
       
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
           
            $name = htmlspecialchars($_POST['name'] ?? '');
            $email = htmlspecialchars($_POST['email'] ?? '');
            
            
            echo "<p><strong>name:</strong> $name</p>";
            echo "<p><strong> email:</strong> $email</p>";
            
            
            if (!empty($_POST['hobbies'])) {
                $hobbies = array_map('htmlspecialchars', $_POST['hobbies']);
                echo "<p><strong>pasLes hobbiesion :</strong> " . implode('، ', $hobbies) . "</p>";
            } else {
                echo "<p>Aucun passe-temps choisi</p>";
            }
            
            
            echo "<p class='note'> Remarque : le mot est enregistré</p>";
        } else {
            echo "<p class='error'>   Erreur : je n'ai pas reçu le formulaire </p>";
        }
        ?>
        
        <a href="index.html"> Retour</a>
    </div>
</body>
</html>