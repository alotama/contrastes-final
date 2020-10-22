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
<link href="<?= WEBSITE_URL; ?>/assets/css/sections/perfil.min.css" type="text/css" rel="stylesheet">
<!-- END: Other styles -->
</head>
<body>
<? include_header(); ?>
<main class="background__img login--1">
  <div class="master-container">
    <div class="master-container-padding">
      <div class="row">
        <div class="col-xs-12 col-lg-4">
          <section class="account__container">
            <div class="section__title">
              <h1>Iniciar sesión</h1>
            </div>
            <article class="social-login__container">
              <div class="social-login__button social-login__button--facebook">
                <button class="btn btn--facebook">
                  <span class="social__icon">
                    <i class="fab fa-facebook-f"></i>
                  </span>
                  Ingresa con facebook
                </button>
              </div>
              <div class="social-login__button social-login__button--facebook">
                <button class="btn btn--google">
                  <span class="social__icon">
                    <i class="fab fa-google"></i>
                  </span>
                  Ingresa con google
                </button>
              </div>
            </article>
            <div class="separator__container">
              <span class="separator">O</span>
            </div>
            <article class="form__container">
              <form action="" class="form__content">
                <div class="form__input">
                  <input type="email" placeholder="E-mail *">
                </div>
                <div class="form__input">
                  <input type="password" placeholder="Contraseña *">
                </div>
                <div class="form__messege">
                  <h6>Olvidé mi contraseña</h6>
                </div>
                <div class="form__button">
                  <a href="<?= WEBSITE_URL; ?>/dashboard" class="btn btn__filled--blue">Iniciar sesión</a>
                </div>
                <div class="form__messege">
                  <a href="<?= WEBSITE_URL; ?>/perfil/registro"><h6>No tengo usuario, quiero registrarme</h6></a>
                </div>
              </form>
            </article>
          </section>
        </div>
      </div>
    </div>
  </div>
</main>
<? include_footer(); ?>
<!-- Scripts -->
<script src="<?= WEBSITE_URL; ?>/assets/js/sections/perfil.js" type="text/javascript"></script>
<!-- END: Scripts -->
</body>
</html>
