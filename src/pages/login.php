
<?php
include '../pages/menuNav.php';
?>

<link rel="stylesheet" href="../styles/style.css">
<link rel="stylesheet" href="../styles/formulaire.css">
    <form method="post">
        <input type="text" name="first_name"  placeholder="first_name" required><br>
        <input type="text" name="last_name"  placeholder="last_name" required><br>
        <input type="text" name="age"  placeholder="Votre âge" required><br>
        <input type="email" name="email" placeholder="Votre email" required><br>
        <input type="password" name="mdp" placeholder="Votre mot de passe" required><br>
        <input type="password" name="mdp2" placeholder="Confirmez votre mot de passe" required>
        <a href="./mdpReset.php" class="forgot-password">Mot de passe oublié ?</a>
        <br>
        <input type="submit" name="formsend">
    </form>



