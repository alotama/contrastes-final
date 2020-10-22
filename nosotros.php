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
<link href="<?= WEBSITE_URL; ?>/assets/css/sections/nosotros.min.css" type="text/css" rel="stylesheet">
<!-- END: Other styles -->
</head>
<body>
<? include_header(); ?>

<main class="introduction__container">
  <div class="master-container">
    <div class="master-container-padding">
      <div class="row">
        <div class="col-lg-7">
          <h1>La revista argentina de fotografía</h1>
          <p>“Contrastes” es una revista argentina sobre fotografía. Su contenido abarca diferentes aspectos: Reseñas de productos, entrevistas a fotógrafos, experiencias detrás de escena, tutoriales de edición, información técnica, historias y casos de emprendedores. <br>
          <br>
          La revista es una publicación independiente, de tirada bimestral, realizada por un grupo de fotógrafos y periodistas argentinos. Fue posicionada en 2013 como la única revista de esta temática en el país, y recibió premios como el otorgado por la Asociación de Prensa Técnica y Especializada (APTA). </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <!-- Flickity HTML init -->
          <article class="office__container container__nav">
            <div class="office__photo">
              <img src="<?= WEBSITE_URL; ?>/assets/img/1280x800.png">
            </div>
            <div class="office__photo">
              <img src="<?= WEBSITE_URL; ?>/assets/img/1280x800.png">
            </div>
            <div class="office__photo">
              <img src="<?= WEBSITE_URL; ?>/assets/img/1280x800.png">
            </div>
            <div class="office__photo">
              <img src="<?= WEBSITE_URL; ?>/assets/img/1280x800.png">
            </div>
            <div class="office__photo">
              <img src="<?= WEBSITE_URL; ?>/assets/img/1280x800.png">
            </div>
            <div class="office__photo">
              <img src="<?= WEBSITE_URL; ?>/assets/img/1280x800.png">
            </div>
            <div class="office__photo">
              <img src="<?= WEBSITE_URL; ?>/assets/img/1280x800.png">
            </div>
            <div class="office__photo">
              <img src="<?= WEBSITE_URL; ?>/assets/img/1280x800.png">
            </div>
            <div class="office__photo">
              <img src="<?= WEBSITE_URL; ?>/assets/img/1280x800.png">
            </div>
            <div class="office__photo">
              <img src="<?= WEBSITE_URL; ?>/assets/img/1280x800.png">
            </div>
          </article>
          <div class="second__carousel">
            <article class="office__container container__main">
              <div class="office__photo">
                <img src="<?= WEBSITE_URL; ?>/assets/img/600x400.png">
              </div>
              <div class="office__photo">
                <img src="<?= WEBSITE_URL; ?>/assets/img/600x400.png">
              </div>
              <div class="office__photo">
                <img src="<?= WEBSITE_URL; ?>/assets/img/600x400.png">
              </div>
              <div class="office__photo">
                <img src="<?= WEBSITE_URL; ?>/assets/img/600x400.png">
              </div>
              <div class="office__photo">
                <img src="<?= WEBSITE_URL; ?>/assets/img/600x400.png">
              </div>
              <div class="office__photo">
                <img src="<?= WEBSITE_URL; ?>/assets/img/600x400.png">
              </div>
              <div class="office__photo">
                <img src="<?= WEBSITE_URL; ?>/assets/img/600x400.png">
              </div>
              <div class="office__photo">
                <img src="<?= WEBSITE_URL; ?>/assets/img/600x400.png">
              </div>
              <div class="office__photo">
                <img src="<?= WEBSITE_URL; ?>/assets/img/600x400.png">
              </div>
              <div class="office__photo">
                <img src="<?= WEBSITE_URL; ?>/assets/img/600x400.png">
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<? include_footer(); ?>
<!-- Scripts -->
<script src="<?= WEBSITE_URL; ?>/assets/js/flickity.min.js" type="text/javascript"></script>
<script src="<?= WEBSITE_URL; ?>/assets/js/sections/nosotros.js" type="text/javascript"></script>
<!-- END: Scripts -->
</body>
</html>
