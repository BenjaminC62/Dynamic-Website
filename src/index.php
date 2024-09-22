<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site</title>
</head>
<body>

<?php include './pages/menuNav.php'; ?>

<form method="post">
    <input type="text" name="first_name"  placeholder="first_name" required><br>
    <input type="text" name="last_name"  placeholder="last_name" required><br>
    <input type="text" name="age"  placeholder="Votre âge" required><br>
    <input type="email" name="email" placeholder="Votre email" required><br>
    <input type="submit" name="formsend">
</form>

<?php

    require './../database/database.php';
    $conn = getDatabaseConnection();


    if (isset($_POST['formsend'])) {

        // Récupération des données du formulaire
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $age = $_POST['age'];
        $email = $_POST['email'];

        // Vérification des données
        if(!empty($speudo) && !empty($age) && !empty($email)) {
            echo "Votre identifiant est : " . $speudo . "<br>";
            echo "Votre âge est : " . $age . "<br>";
            echo "Votre email est : " . $email . "<br>";
        }
        else {
            echo "Veuillez remplir tous les champs";
        }

        //Envoie des données dans la base de données
        $query = "INSERT INTO users (first_name, name, email) VALUES ('$first_name', '$last_name', '$email')";
        if (mysqli_query($conn, $query)) {
            echo "Les données ont été insérées avec succès";
        } else {
            echo "Erreur lors de l'insertion : " . mysqli_error($conn);
        }
}
?>

</body>
</html>
