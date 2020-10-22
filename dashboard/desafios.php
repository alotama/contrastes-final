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
    <section class="mis-desafios__container">
      <div class="header__section">
          <article class="section__title">
              <h1>Mis desafíos</h1>
          </article>
      </div>
      <div class="header__section">
        <article class="section__title">
          <h4>Iluminación básica</h4>
        </article>
      </div>
      <div class="courses-carousel__contrainer--1">
        <div class="course__carousel--1">
          <article class="course__cell">
            <a href="#">
              <div class="course__card">
                <figure class="course__img">
                <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-iluminacion-1.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
          <article class="course__cell">
            <a href="#">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-iluminacion-2.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
          <article class="course__cell">
            <a href="#">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-iluminacion-3.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
          <article class="course__cell">
            <a href="#">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-iluminacion-4.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
        </div>
        <div class="append-cell__container--1">
          <button class="button button--append">+</button>
        </div>
      </div>
      <div class="header__section">
        <article class="section__title">
          <h4>Fotografía de paisajes</h4>
        </article>
      </div>
      <div class="courses-carousel__contrainer--2">
        <div class="course__carousel--2">
          <article class="course__cell">
            <a href="#">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-paisajes-1.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
          <article class="course__cell">
            <a href="#">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-paisajes-2.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
          <article class="course__cell">
            <a href="#">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-paisajes-3.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
          <article class="course__cell">
            <a href="#">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-paisajes-4.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
        </div>
        <div class="append-cell__container--2">
          <button class="button button--append">+</button>
        </div>
      </div>
      <div class="header__section">
        <article class="section__title">
          <h4>Desafios del mes</h4>
        </article>
      </div>
      <div class="courses-carousel__contrainer--3">
        <div class="course__carousel--3">
          <article class="course__cell">
            <a href="#">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-desafio-1.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
          <article class="course__cell">
            <a href="#">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-desafio-2.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
          <article class="course__cell">
            <a href="#">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-desafio-3.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
          <article class="course__cell">
            <a href="#">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-desafio-4.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
        </div>
        <div class="append-cell__container--3">
          <button class="button button--append">+</button>
        </div>
      </div>
    </section>
    <section class="desafios__container space__lg--tb">
      <div class="header__section">
          <article class="section__title">
              <h2>Desafíos Contrastes</h2>
              <p>¡Ganá una suscripción mensual!</p>
          </article>
          <article class="section__show-more">
              <a href="#" class="font--small">Participar</a>
          </article>
      </div>
      <article class="showcase-desafios__container">
        <div class="row">
          <div class="col-xs-12 col-lg-3">
            <div class="showcase-desafios__controllers">
              <div class="controller_container js-controller-selected" data-selector=".course__card--mensuales">
                <button class="controller__item">Mensuales</button>
              </div>
              <div class="controller_container" data-selector=".course__card--iluminacion">
                <button class="controller__item">Iluminación</button>
              </div>
              <div class="controller_container" data-selector=".course__card--retratos">
                <button class="controller__item">Retratos</button>
              </div>
              <div class="controller_container" data-selector=".course__card--paisajes">
                <button class="controller__item">Paisajes</button>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-lg-9">
            <div class="carousel">
              <div class="carousel-cell course__card--mensuales">
                <div class="course__card">
                  <figure class="course__img">
                    <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-desafios-12.jpg" alt="">
                  </figure>
                  <div class="course__title">
                    <p>Clave Baja</p>
                    <h5>Finaliza en 7 días</h5>
                  </div>
                </div>
              </div>
              <div class="carousel-cell">
                <div class="course__card">
                  <figure class="course__img">
                    <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-desafios-9.jpg" alt="">
                  </figure>
                  <div class="course__title">
                    <p>Clave Baja</p>
                    <h5>Finaliza en 7 días</h5>
                  </div>
                </div>
              </div>
              <div class="carousel-cell">
                <div class="course__card">
                  <figure class="course__img">
                    <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-desafios-8.jpg" alt="">
                  </figure>
                  <div class="course__title">
                    <p>Clave Baja</p>
                    <h5>Finaliza en 7 días</h5>
                  </div>
                </div>
              </div>
              <div class="carousel-cell course__card--iluminacion">
                <div class="course__card">
                  <figure class="course__img">
                    <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-desafios-1.jpg" alt="">
                  </figure>
                  <div class="course__title">
                    <p>Al atardecer</p>
                    <h5>Finaliza en 14 días</h5>
                  </div>
                </div>
              </div>
              <div class="carousel-cell">
                <div class="course__card">
                  <figure class="course__img">
                    <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-desafios-10.jpg" alt="">
                  </figure>
                  <div class="course__title">
                    <p>Al atardecer</p>
                    <h5>Finaliza en 14 días</h5>
                  </div>
                </div>
              </div>
              <div class="carousel-cell">
                <div class="course__card">
                  <figure class="course__img">
                    <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-desafios-11.jpg" alt="">
                  </figure>
                  <div class="course__title">
                    <p>Al atardecer</p>
                    <h5>Finaliza en 14 días</h5>
                  </div>
                </div>
              </div>
              <div class="carousel-cell course__card--retratos">
                <div class="course__card">
                  <figure class="course__img">
                    <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-desafios-4.jpg" alt="">
                  </figure>
                  <div class="course__title">
                    <p>Iluminación Dramática</p>
                    <h5>Finaliza en 30 días</h5>
                  </div>
                </div>
              </div>
              <div class="carousel-cell">
                <div class="course__card">
                  <figure class="course__img">
                    <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-desafios-2.jpg" alt="">
                  </figure>
                  <div class="course__title">
                    <p>Iluminación Dramática</p>
                    <h5>Finaliza en 30 días</h5>
                  </div>
                </div>
              </div>
              <div class="carousel-cell">
                <div class="course__card">
                  <figure class="course__img">
                    <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-desafios-3.jpg" alt="">
                  </figure>
                  <div class="course__title">
                    <p>Iluminación Dramática</p>
                    <h5>Finaliza en 30 días</h5>
                  </div>
                </div>
              </div>
              <div class="carousel-cell course__card--paisajes">
                <div class="course__card">
                  <figure class="course__img">
                    <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-desafios-5.jpg" alt="">
                  </figure>
                  <div class="course__title">
                    <p>Retrato fotografico</p>
                    <h5>Finaliza en 7 días</h5>
                  </div>
                </div>
              </div>
              <div class="carousel-cell course__card--paisajes">
                <div class="course__card">
                  <figure class="course__img">
                    <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-desafios-6.jpg" alt="">
                  </figure>
                  <div class="course__title">
                    <p>Retrato fotografico</p>
                    <h5>Finaliza en 7 días</h5>
                  </div>
                </div>
              </div>
              <div class="carousel-cell course__card--paisajes">
                <div class="course__card">
                  <figure class="course__img">
                    <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-desafios-7.jpg" alt="">
                  </figure>
                  <div class="course__title">
                    <p>Retrato fotografico</p>
                    <h5>Finaliza en 7 días</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
    </section>
  </div>
</main>
<? include_dashboard_footer(); ?>
<!-- Scripts -->
<script src="<?= WEBSITE_URL; ?>/assets/js/flickity.min.js" type="text/javascript"></script>
<script src="<?= WEBSITE_URL; ?>/assets/js/sections/desafios.js" type="text/javascript"></script>
<!-- END: Scripts -->
</body>
</html>
