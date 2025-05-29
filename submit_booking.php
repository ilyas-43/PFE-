<?php
$pdo = new PDO("mysql:host=localhost;dbname=projet_fdt;charset=utf8", "root", "");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO reservations (nom, email, tel, arrivee, depart, chambre) 
                           VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $_POST['nom'],
        $_POST['email'],
        $_POST['tel'],
        $_POST['arrivee'],
        $_POST['depart'],
        $_POST['room']
    ]);

    echo "<h2>Merci " . htmlspecialchars($_POST['nom']) . " pour votre réservation !</h2>";
}
?>
