<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site</title>
    <link rel="stylesheet" href="./styles/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<?php include './pages/menuNav.php'; ?>


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
    if(!empty($first_name) && !empty($last_name) && !empty($age) && !empty($email)) {
        echo "Votre prenom est : " . $first_name . "<br>";
        echo "Votre nom est : " . $last_name . "<br>";
        echo "Votre âge est : " . $age . "<br>";
        echo "Votre email est : " . $email . "<br>";

        // Envoie des données dans la base de données
        $query = "INSERT INTO users (first_name, name, email) VALUES ('$first_name', '$last_name', '$email')";
        if (mysqli_query($conn, $query)) {
            echo "Les données ont été insérées avec succès";
            // Redirection après l'insertion
            header("Location: ./index.php");
            exit();
        } else {
            echo "Erreur lors de l'insertion : " . mysqli_error($conn);
        }
    } else {
        echo "Veuillez remplir tous les champs";
    }
}
?>

</body>
</html>