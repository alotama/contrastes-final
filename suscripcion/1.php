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
    <div class="row">
      <div class="col-xs-12">
        <div class="header__section">
            <article class="section__title">
              <h1>Proceso de suscripción</h1>
            </article>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="form__title">
          <h2>Datos de facturación</h2>
        </div>
        <div class="row">
          <div class="col-xs-12 col-lg-7">
            <form class="form__container">
              <div class="input__container">
                <label for="first-name">Nombre</label>
                <input type="text" id="first-name" class="input__item" value="" placeholder="Sebastián">
              </div>
              <div class="input__container">
                <label for="last-name">Apellido</label>
                <input type="text" id="last-name" class="input__item" value="" placeholder="Tamashiro">
              </div>
              <div class="input__container">
                <label for="address">Dirección</label>
                <input type="text" id="address" class="input__item" value="" placeholder="Av. Cabildo 1234">
              </div>
              <div class="input__container">
                <label for="department">Departamento</label>
                <input type="text" id="department" class="input__item" value="" placeholder="3C">
              </div>
              <div class="input__container">
                <label for="cod">Codigo postal</label>
                <input type="text" id="cod" class="input__item" value="" placeholder="C1234">
              </div>
              <div class="input__container">
                <label for="country">País</label>
                <select class="select__item" name="country">
                  <option value="argentina">Argentina</option>
                  <option value="chile">Chile</option>
                  <option value="bolivia">Bolivia</option>
                  <option value="uruguay">Uruguay</option>
                  <option value="paraguay">Paraguay</option>
                  <option value="otro">Otro</option>
                </select>
              </div>
              <div class="form__button">
                <a href="<?= WEBSITE_URL; ?>/suscripcion/2" class="btn btn__filled--blue">Siguiente</a>
              </div>
            </form>
          </div>
          <div class="col-xs-12 col-lg-4 col-lg-offset-1">
            <div class="carrito__container">
              <div class="item__title">
                <p class="font--bold">Contrastes Premium <br> (Suscripción anual)</p>
              </div>
              <div class="description__title">
                <small>AR$ 54000 por 12 meses <a href="<?= WEBSITE_URL; ?>/suscripcion" class="text--underline">cambiar</a> </small>
              </div>
              <div class="price__container">
                <p>Total</p>
                <p>AR$ 5400</p>
              </div>
            </div>
          </div>
        </div>
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
