<?php
require_once($_SERVER['DOCUMENT_ROOT']."/_private/DECS/get_environment.php");

$Title = "";
$Description = "";
?>
<!DOCTYPE html>
<html>
<head>
<?
SEO_and_HEAD($Title, $Description);
?>

<!-- Other styles -->
<link href="<?= WEBSITE_URL; ?>/assets/css/flickity.min.css" type="text/css" rel="stylesheet">
<link href="<?= WEBSITE_URL; ?>/assets/css/sections/dashboard.min.css" type="text/css" rel="stylesheet">
<!-- END: Other styles -->
</head>
<body>
<? include_dashboard_header(); ?>
<div class="header__sizer"></div>
<main class="master-container">
  <div class="master-container-padding">
    <div class="header__section">
        <article class="section__title">
            <h2>Nueva fotografía</h2>
            <p>Podes subir todas las fotografías que quieras, recordá subir solo si tenes derechos sobre ellas.</p>
        </article>
    </div>
    <div class="row">
      <div class="col-lg-7">
        <figure class="photo-to-upload__container">
          <img src="<?= WEBSITE_URL; ?>/assets/img/2000x1800.png">
        </figure>
      </div>
      <div class="col-lg-5">
        <section class="right-section">
          <div class="principal">
            <section class="photo-upload__container">
              <div class="state-upload__container">
                <div class="state__container">
                  <button class="state__item">Historia</button>
                </div>
                <div class="state__container">
                  <button class="state__item">Etiquetas</button>
                </div>
                <div class="state__container js-state-active">
                  <button class="state__item">EXIF</button>
                </div>
                <div class="state__container">
                  <button class="state__item">Desafios</button>
                </div>
              </div>
            </section>
            <section class="exif__data">
              <div class="input__container">
                <label for="card-name">Marca de la cámara</label>
                <input type="text" id="card-name" class="input__item" value="">
              </div>
              <div class="input__container">
                <label for="last-name">Modelo de la cámara</label>
                <input type="text" id="last-name" class="input__item" value="">
              </div>
              <div class="input__container">
                <label for="user-contrastes">Distancia focal (mm)</label>
                <input type="text" id="user-contrastes" class="input__item" value="">
              </div>
              <div class="input__container">
                <label for="user-instagram">Apertura</label>
                <input type="text" id="user-instagram" class="input__item" value="">
              </div>
              <div class="input__container">
                <label for="email">ISO</label>
                <input type="text" id="email" class="input__item" value="">
              </div>
              <div class="input__container">
                <label for="country">Velocidad de obturación (s)</label>
                <input type="text" id="country" class="input__item" value="">
              </div>
              <div class="location">
                <div class="input__container">
                  <label for="country">Ubicación</label>
                  <input type="text" id="country" class="input__item" value="">
                </div>
                <div class="input__container">
                  <label for="country">Punto de interes</label>
                  <input type="text" id="country" class="input__item" value="">
                </div>
              </div>
            </section>
          </div>
          <div class="button">
            <article class="save__container">
              <a href="<?= WEBSITE_URL; ?>/dashboard/subir-foto/2" class="btn">Anterior</a>
              <a href="<?= WEBSITE_URL; ?>/dashboard/subir-foto/4" class="btn btn__filled--blue">Guardar</a>
            </article>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>
<? include_dashboard_footer(); ?>
<!-- Scripts -->
<script src="<?= WEBSITE_URL; ?>/assets/js/sections/subir-foto.js" type="text/javascript"></script>
<!-- END: Scripts -->
</body>
</html>
