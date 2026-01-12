<?php
include '../config/dbcon.php';

$stmt = $pdo->query("SELECT * FROM entrevistas ORDER BY fecha DESC");
$entrevistas = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Entrevistas | GECAR</title>
  <link rel="stylesheet" href="../bulma/css/bulma.css">
</head>
<body class="has-navbar-fixed-top">

<?php include '../header.php'; ?>

<section class="section">
  <div class="container">
    <h1 class="title is-2">Entrevistas</h1>
    <p class="subtitle is-6">
      Conversaciones con profesionales del mundo tecnológico.
    </p>

    <div class="columns is-multiline">

      <?php foreach ($entrevistas as $e): ?>
        <div class="column is-4">
          <div class="card">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="<?= $e['imagen'] ?>">
              </figure>
            </div>
            <div class="card-content">
              <p class="title is-6"><?= $e['titulo'] ?></p>
              <p class="is-size-7"><?= $e['resumen'] ?></p>

              <a href="entrevista.php?slug=<?= $e['slug'] ?>"
                class="button is-link is-small mt-3">
                Leer entrevista
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

      
    </div>
  </div>
</section>

<?php include '../footer.php'; ?>

</body>
</html>
