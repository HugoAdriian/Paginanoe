<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bulma/css/bulma.css">
    <style>
    body {
      background-color: #5e5ca9ff;
    }

    .box {
      border-radius: 12px;
    }

    details summary {
      cursor: pointer;
    }
  </style>
  

</head>
<body class="has-navbar-fixed-top">
<?php include 'header.php'; ?>

<section class="section pb-6">
  <div class="container">
    <div class="columns">

      <!-- CONTENIDO PRINCIPAL -->
      <div class="column is-8">
        <div class="box">

          <h1 class="title is-2">
            Entrevista con Juan Pérez: El futuro del desarrollo web
          </h1>

          <p class="subtitle is-6 has-text-grey">
            Por <strong>Hugo Adrián</strong> · 05 de enero de 2026
          </p>

          <figure class="image is-16by9 mb-5">
            <img src="https://via.placeholder.com/1200x600" alt="Entrevista">
          </figure>

          <div class="content is-medium">
              <blockquote class="has-background-light p-4 my-5">
                <p class="is-italic">
                  “Aprender a programar no es memorizar código, es aprender a pensar.memorizar código, es aprender a pensar.”
                </p>
              </blockquote>
            <p>
              En esta entrevista hablamos con Juan Pérez, desarrollador senior,
              sobre las tendencias actuales en el desarrollo web.
            </p>
            <h3>¿Cómo iniciaste en el desarrollo de software?</h3>
            <p>
              Comencé aprendiendo HTML y CSS de manera autodidacta...
            </p>

            <h3>¿Qué tecnologías recomiendas aprender hoy?</h3>
            <p>
              JavaScript, PHP, bases de datos y entender bien los fundamentos.
            </p>
          </div>
          <div class="box mt-6">
          <h3 class="title is-4">Sobre el entrevistado</h3>

          <article class="media">
            <figure class="media-left">
              <p class="image is-96x96">
                <img
                  src="https://via.placeholder.com/96"
                  alt="Juan Pérez"
                  style="border-radius:50%;"
                >
              </p>
            </figure>
            <div class="media-content">
              <p>
                Juan Pérez es desarrollador senior con más de 8 años de experiencia
                en desarrollo web, especializado en aplicaciones web y arquitectura backend.
              </p>
            </div>
          </article>
        </div>
          <div class="tags mt-5">
            <span class="tag is-link">Entrevistas</span>
            <span class="tag is-info">Desarrollo Web</span>
            <span class="tag is-warning">Programación</span>
          </div>
        </div>
      </div>
      <!-- SIDEBAR DERECHO -->
      <div class="column is-3">

  <!-- OTRAS ENTREVISTAS -->
  <div class="box">
    <h2 class="title is-5">Otras entrevistas</h2>

    <!-- ITEM -->
    <article class="media mb-4">
      <figure class="media-left">
        <p class="image is-64x64">
          <img src="https://via.placeholder.com/64" style="border-radius:8px;">
        </p>
      </figure>

      <div class="media-content">
        <p class="title is-6 mb-1">
          Entrevista con desarrolladora Full Stack
        </p>

        <details>
          <summary class="button is-link is-small is-light">
            Leer más
          </summary>
          <div class="content mt-2">
            <p class="is-size-7">
              Conversamos sobre su experiencia en frontend y backend.
            </p>
          </div>
        </details>
      </div>
    </article>
      <article class="media mb-4">
      <figure class="media-left">
        <p class="image is-64x64">
          <img src="https://via.placeholder.com/64" style="border-radius:8px;">
        </p>
      </figure>

      <div class="media-content">
        <p class="title is-6 mb-1">
          Entrevista con desarrolladora Full Stack
        </p>

        <details>
          <summary class="button is-link is-small is-light">
            Leer más
          </summary>
          <div class="content mt-2">
            <p class="is-size-7">
              Conversamos sobre su experiencia en frontend y backend.
            </p>
          </div>
        </details>
      </div>
    </article>
     <article class="media mb-4">
      <figure class="media-left">
        <p class="image is-64x64">
          <img src="https://via.placeholder.com/64" style="border-radius:8px;">
        </p>
      </figure>

      <div class="media-content">
        <p class="title is-6 mb-1">
          Entrevista con desarrolladora Full Stack
        </p>

        <details>
          <summary class="button is-link is-small is-light">
            Leer más
          </summary>
          <div class="content mt-2">
            <p class="is-size-7">
              Conversamos sobre su experiencia en frontend y backend.
            </p>
          </div>
        </details>
      </div>
    </article>
  </div>

  <!-- CATEGORÍAS -->
  <div class="box mt-5">
    <h3 class="title is-6">Categorías</h3>
    <div class="tags">
      <a class="tag is-light">Frontend</a>
      <a class="tag is-light">Backend</a>
      <a class="tag is-light">UX / UI</a>
      <a class="tag is-light">Bases de datos</a>
    </div>
  </div>

  <!-- MÁS LEÍDAS -->
  <div class="box">
    <h3 class="title is-6">Más leídas</h3>
    <ul>
      <li><a href="#">Cómo iniciar en backend en 2026</a></li>
      <li><a href="#">Errores comunes en JavaScript</a></li>
      <li><a href="#">Tu primera entrevista tech</a></li>
    </ul>
  </div>

</div>

    </div>
  </div>
</section>

<?php include 'footer.php'; ?>


    
   
</body>
</html>

