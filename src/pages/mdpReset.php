<?php
include '../pages/menuNav.php';
include '../database/database.php';

$conn = getDatabaseConnection();

if (isset($_POST['resetPassword'])) {
    $email = $_POST['email'];

    $token = uniqid();
    $url = "http://localhost:8000/pages/newPassword.php?token=$token";

    $message = "Bonjour, cliquez sur ce lien pour réinitialiser votre mot de passe : $url";
    $headers = "Content-Type: text/plain; charset=UTF-8";

    if (mail($email, 'Mot de passe oublié', $message, $headers)) {
        $sql = "UPDATE users SET token = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $token, $email);
        $stmt->execute();
        echo "Email envoyé";
    } else {
        echo "Erreur lors de l'envoi de l'email";
    }
}
?>
<link rel="stylesheet" href="../styles/style.css">
<link rel="stylesheet" href="../styles/formulaire.css">

<div class="form-container">
    <h2>Réinitialisation du mot de passe</h2>
    <p>Veuillez entrer votre adresse email pour réinitialiser votre mot de passe.</p>
    <form method="post">
        <input type="email" name="email" placeholder="Votre email" required><br>
        <input type="submit" name="resetPassword" value="Envoyer l'email pour la réinitialisation du mot de passe">
    </form>
</div>

<

