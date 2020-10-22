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
<link href="<?= WEBSITE_URL; ?>/assets/css/flickity.min.css" type="text/css" rel="stylesheet">
<!-- END: Other styles -->
</head>
<body>
<? include_header(); ?>
<div class="header__sizer"></div>
<main class="master-container">
  <div class="master-container-padding">
    <div class="row">
      <div class="col-xs-12 col-lg-offset-2 col-lg-8">
        <section class="suscripcion__container">
          <div class="header__section">
              <article class="section__title">
                  <h1>Suscripción</h1>
              </article>
          </div>
          <article class="suscripcion__controllers">
            <div class="controller__container js-selected">
              <button class="controller__item" type="button">Fotografía</button>
            </div>
            <div class="controller__container">
              <button class="controller__item" type="button">Iluminación</button>
            </div>
          </article>
          <div class="suscripcion__carousel">
              <section class="suscripcion-cell">
                <article class="suscripcion__card">
                  <div class="header__card">
                    <p class="font--big font--bold">Básico</p>
                    <p class="suscripcion__pricing font--bold">$299 ARS</p>
                    <small>Por mes con el plan anual</small>
                  </div>
                  <div class="content__card">
                    <ul class="list-benefits">
                      <li>Suscripción a la revista física</li>
                      <li>Cursos Principiante e Intermedio</li>
                      <li>Descuentos en marcas</li>
                      <li class="not-available">Descuentos preferenciales</li>
                      <li class="not-available">Acceso a eventos</li>
                    </ul>
                    <a href="<?= WEBSITE_URL; ?>/suscripcion/1" class="btn btn__filled--blue">Probar ahora</a>
                  </div>
                </article>
                <article class="suscripcion__card">
                  <div class="header__card">
                    <p class="font--big font--bold">Premium</p>
                    <p class="suscripcion__pricing font--bold">$499 ARS</p>
                    <small>Por mes con el plan anual</small>
                  </div>
                  <div class="content__card">
                    <ul class="list-benefits">
                      <li>Suscripción a la revista física</li>
                      <li>Cursos Principiante e Intermedio</li>
                      <li>Descuentos en marcas</li>
                      <li>Descuentos preferenciales</li>
                      <li>Acceso a eventos</li>
                    </ul>
                    <a href="<?= WEBSITE_URL; ?>/suscripcion/1" class="btn btn__filled--blue">Probar ahora</a>
                  </div>
                </article>
              </section>
              <section class="suscripcion-cell">
                <article class="suscripcion__card">
                  <div class="header__card">
                    <p class="font--big font--bold">Básico</p>
                    <p class="suscripcion__pricing font--bold">$3240 ARS</p>
                    <small>Por mes con el plan anual</small>
                  </div>
                  <div class="content__card">
                    <ul class="list-benefits">
                      <li>Suscripción a la revista física</li>
                      <li>Cursos Principiante e Intermedio</li>
                      <li>Descuentos en marcas</li>
                      <li class="not-available">Descuentos preferenciales</li>
                      <li class="not-available">Acceso a eventos</li>
                    </ul>
                    <a href="<?= WEBSITE_URL; ?>/suscripcion/1" class="btn btn__filled--blue">Probar ahora</a>
                  </div>
                </article>
                <article class="suscripcion__card">
                  <div class="header__card">
                    <p class="font--big font--bold">Premium</p>
                    <p class="suscripcion__pricing font--bold">$4860 ARS</p>
                    <small>Por mes con el plan anual</small>
                  </div>
                  <div class="content__card">
                    <ul class="list-benefits">
                      <li>Suscripción a la revista física</li>
                      <li>Cursos Principiante e Intermedio</li>
                      <li>Descuentos en marcas</li>
                      <li>Descuentos preferenciales</li>
                      <li>Acceso a eventos</li>
                    </ul>
                    <a href="<?= WEBSITE_URL; ?>/suscripcion/1" class="btn btn__filled--blue">Probar ahora</a>
                  </div>
                </article>
              </section>
            </div>
        </section>
        <section class="plan-conjunto__container">
          <div class="header__section">
              <article class="section__title">
                  <h2>Plan conjunto</h2>
              </article>
              <article class="section__explain">
                <p>El plan conjunto esta diseñado para que puedas estudiar junto a un grupo de tres amigos que también comparten tu pasión.</p>
              </article>
          </div>
          <div class="suscripcion__carousel">
              <section class="suscripcion-cell">
                <article class="suscripcion__card">
                  <div class="plan__card">
                    <p class="suscripcion__pricing font--bold">Básico</p>
                  </div>
                  <div class="pricing__card">
                    <p class="suscripcion__pricing font--bold">$299 ARS</p>
                    <small>Por mes con el plan anual</small>
                  </div>
                  <div class="content__card">
                    <a href="<?= WEBSITE_URL; ?>/suscripcion/1" class="btn btn__filled--blue">Probar ahora</a>
                  </div>
                </article>
                <article class="suscripcion__card">
                  <div class="plan__card">
                    <p class="suscripcion__pricing font--bold">Premium</p>
                  </div>
                  <div class="pricing__card">
                    <p class="suscripcion__pricing font--bold">$499 ARS</p>
                    <small>Por mes con el plan anual</small>
                  </div>
                  <div class="content__card">
                    <a href="#" class="btn btn__filled--blue">Probar ahora</a>
                  </div>
                </article>
              </section>
              <section class="suscripcion-cell">
                <article class="suscripcion__card">
                  <div class="plan__card">
                    <p class="suscripcion__pricing font--bold">Básico</p>
                  </div>
                  <div class="pricing__card">
                    <p class="suscripcion__pricing font--bold">$3240 ARS</p>
                    <small>Por mes con el plan anual</small>
                  </div>
                  <div class="content__card">
                    <a href="#" class="btn btn__filled--blue">Probar ahora</a>
                  </div>
                </article>
                <article class="suscripcion__card">
                  <div class="plan__card">
                    <p class="suscripcion__pricing font--bold">Premium</p>
                  </div>
                  <div class="pricing__card">
                    <p class="suscripcion__pricing font--bold">$4860 ARS</p>
                    <small>Por mes con el plan anual</small>
                  </div>
                  <div class="content__card">
                    <a href="#" class="btn btn__filled--blue">Probar ahora</a>
                  </div>
                </article>
              </section>
            </div>
        </section>
      </div>
    </div>
  </div>
</main>
<? include_footer(); ?>
<!-- Scripts -->
<script src="<?= WEBSITE_URL; ?>/assets/js/flickity.min.js" type="text/javascript"></script>
<script src="<?= WEBSITE_URL; ?>/assets/js/sections/suscripcion.js" type="text/javascript"></script>
<!-- END: Scripts -->
</body>
</html>
