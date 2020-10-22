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
<? include_clase_header(); ?>
<div class="clase-video"></div>
<div class="overlay-clase">
  <div class="row">
    <div class="col-lg-5">
      <div class="course-in__content">
        <h1>1. Introducción: iluminación básica</h1>
        <p>En este curso, veremos los principios básicos de la fotogafía digital. Desde los tipos de cámaras, hasta los flashes y las cosas a tener en cuenta para hacer las mejores fotos.</p>
      </div>
    </div>
    <div class="play-button">
      <i class="fas fa-play"></i>
    </div>
  </div>
</div>
<? include_dashboard_footer(); ?>
<!-- Scripts -->
<script src="<?= WEBSITE_URL; ?>/assets/js/flickity.min.js" type="text/javascript"></script>
<script src="<?= WEBSITE_URL; ?>/assets/js/sections/clase.js" type="text/javascript"></script>
<!-- END: Scripts -->
</body>
</html>
