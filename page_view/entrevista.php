<?php
include '../config/dbcon.php';

$slug = $_GET['slug'] ?? '';

$stmt = $pdo->prepare(
  "SELECT * FROM entrevistas WHERE slug = ? LIMIT 1"
);
$stmt->execute([$slug]);
$entrevista = $stmt->fetch();

if (!$entrevista) {
  die("Entrevista no encontrada");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Entrevista | GECAR</title>
  <link rel="stylesheet" href="../bulma/css/bulma.css">
</head>
<body class="has-navbar-fixed-top">

<?php include '../header.php'; ?>

<section class="section">
  <div class="container is-max-desktop">
    <h1 class="title is-2"><?= $entrevista['titulo'] ?></h1>

      <p class="subtitle is-6">
        Por <?= $entrevista['autor'] ?> · <?= $entrevista['fecha'] ?>
      </p>

      <img src="<?= $entrevista['imagen'] ?>">

      <div class="content">
        <?= nl2br($entrevista['contenido']) ?>
      </div>
      <h3>¿Cómo empezó?</h3>
      <p>
        De forma autodidacta, aprendiendo HTML, CSS y luego backend.
      </p>
    </div>
  </div>
</section>

<?php include '../footer.php'; ?>

</body>
</html>
