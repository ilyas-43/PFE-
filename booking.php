<?php
$room = isset($_GET['room']) ? $_GET['room'] : 'Standard Room';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Réserver une chambre</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .booking-form {
      max-width: 600px;
      margin: 50px auto;
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .form-title {
      font-size: 24px;
      margin-bottom: 25px;
      text-align: center;
      color: #343a40;
    }
    .custom-bg {
      background-color: #00A4BD;
    }
  </style>
</head>
<body>

  <div class="booking-form">
    <h2 class="form-title">Réservation de chambre</h2>
    <form action="submit_booking.php" method="POST">
      
      <input type="hidden" name="room" value="<?php echo htmlspecialchars($_GET['room'] ?? 'Standard Room'); ?>">

      <div class="mb-3">
        <label for="nom" class="form-label">Nom complet</label>
        <input type="text" class="form-control" id="nom" name="nom" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Adresse email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <div class="mb-3">
        <label for="tel" class="form-label">Téléphone</label>
        <input type="tel" class="form-control" id="tel" name="tel" required>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="arrivee" class="form-label">Date d’arrivée</label>
          <input type="date" class="form-control" id="arrivee" name="arrivee" required>
        </div>

        <div class="col-md-6 mb-3">
          <label for="depart" class="form-label">Date de départ</label>
          <input type="date" class="form-control" id="depart" name="depart" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="adultes" class="form-label">Nombre d'adultes</label>
          <input type="number" class="form-control" id="adultes" name="adultes" min="1" max="10" value="1" required>
        </div>

        <div class="col-md-6 mb-3">
          <label for="enfants" class="form-label">Nombre d'enfants</label>
          <input type="number" class="form-control" id="enfants" name="enfants" min="0" max="10" value="0">
        </div>
      </div>

      <button type="submit" class="btn custom-bg text-white w-100">Confirmer la réservation</button>
    </form>
  </div>

</body>
</html>
