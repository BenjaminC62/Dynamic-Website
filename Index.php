<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site</title>
</head>
<body>

<?php include 'menuNav.php'; ?>

<form method="post">
    <input type="text" name="speudo" id="speudo" placeholder="Votre identifiant" required><br>
    <input type="text" name="age" id="age" placeholder="Votre âge" required><br>
    <input type="email" name="email" id="email" placeholder="Votre email" required><br>
    <input type="submit" name="formsend" id="formsend">
</form>

<?php
    if (isset($_POST['formsend'])) {

      $speudo = $_POST['speudo'];
      $age = $_POST['age'];
      $email = $_POST['email'];

       if(!empty($speudo) && !empty($age) && !empty($email)) {
              echo "Votre identifiant est : " . $speudo . "<br>";
              echo "Votre âge est : " . $age . "<br>";
              echo "Votre email est : " . $email . "<br>";
         } else {
              echo "Veuillez remplir tous les champs";
         }
}
?>
</body>
</html>
