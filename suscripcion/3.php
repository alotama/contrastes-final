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
<link href="<?= WEBSITE_URL; ?>/assets/css/sections/suscripcion.min.css" type="text/css" rel="stylesheet">
<!-- END: Other styles -->
</head>
<body>
<? include_header(); ?>
<div class="header__sizer"></div>
<main class="master-container">
  <div class="master-container-padding">
    <div class="row middle-xs">
      <div class="col-lg-12">
        <section class="success_wrapper">
          <div class="success__container">
            <h1>¡Listo! <br> Ya estás suscrito </h1>
          </div>
          <div class="success__button">
            <a href="<?= WEBSITE_URL; ?>/dashboard" class="btn btn__filled--blue">ir a mi cuenta</a>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>
<? include_footer(); ?>
<!-- Scripts -->
<script src="<?= WEBSITE_URL; ?>/assets/js/suscripcion.js" type="text/javascript"></script>
<!-- END: Scripts -->
</body>
</html>
