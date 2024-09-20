<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site</title>
</head>
<body>

<?php include './pages/menuNav.php'; ?>

<form method="post">
    <input type="text" name="id"   placeholder="Votre identifiant" required><br>
    <input type="text" name="first_name"  placeholder="first_name" required><br>
    <input type="text" name="last_name"  placeholder="last_name" required><br>
    <input type="text" name="age"  placeholder="Votre âge" required><br>
    <input type="email" name="email" placeholder="Votre email" required><br>
    <input type="submit" name="formsend">
</form>

<?php
    if (isset($_POST['formsend'])) {

        // Récupération des données du formulaire
        $id = $_POST['id'];
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
}
?>

</body>
</html>
