<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto | GECAR</title>
  <link rel="stylesheet" href="../bulma/css/bulma.css">
</head>
<body class="has-navbar-fixed-top">

<?php include '../header.php'; ?>

<section class="section">
  <div class="container is-max-desktop">
    <h1 class="title is-2">Contacto</h1>
    <p class="subtitle is-6">
      ¿Tienes alguna propuesta, entrevista o comentario? Escríbenos.
    </p>

    <div class="box">
      <form>
        <div class="field">
          <label class="label">Nombre</label>
          <div class="control">
            <input class="input" type="text" placeholder="Tu nombre">
          </div>
        </div>

        <div class="field">
          <label class="label">Correo electrónico</label>
          <div class="control">
            <input class="input" type="email" placeholder="correo@email.com">
          </div>
        </div>

        <div class="field">
          <label class="label">Mensaje</label>
          <div class="control">
            <textarea class="textarea" placeholder="Escribe tu mensaje"></textarea>
          </div>
        </div>

        <div class="field">
          <button class="button is-link">Enviar mensaje</button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include '../footer.php'; ?>

</body>
</html>
