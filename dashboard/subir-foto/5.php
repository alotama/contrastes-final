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
    <section class="congratulation__container">
      <div class="row">
        <div class="col-lg-offset-1 col-lg-4">
          <div class="congratulation__content">
            <div class="header__section">
              <h1>¡Felicidades!</h1>
              <p>Tu fotografía fue publicadad correctamente</p>
            </div>
            <a href="<?= WEBSITE_URL; ?>/dashboard/subir-foto/1" class="btn btn__filled--blue">+ Nueva fotografía</a>
          </div>
        </div>
        <div class="col-lg-3 col-lg-offset-1">
          <div class="congratulation__preview">
            <div class="profile__content">
              <figure class="profile__picture">
                <img src="https://dummyimage.com/50x50/c7c7c7/fff">
              </figure>
              <p>Camila Fernández</p>
            </div>
            <div class="photo__finish">
              <h5>La frescura del campo</h5>
              <p>Una tarde de primavera estabamos paseando con mi novia en Lujan, fue una hermosa sorpresa encontrarnos con este Nogal.</p>
            </div>
            <div class="share__button">
              <button class="btn btn__reset btn__facebook">
                <i class="fab fa-facebook-f"></i>
                Compartir en facebook
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>
<? include_dashboard_footer(); ?>
<!-- Scripts -->
<script src="<?= WEBSITE_URL; ?>/assets/js/sections/subir-foto.js" type="text/javascript"></script>
<!-- END: Scripts -->
</body>
</html>
