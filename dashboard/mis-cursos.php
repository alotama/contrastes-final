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
              <h1>Mis cursos</h1>
          </article>
      </div>
      <div class="header__section">
        <article class="section__title">
          <h4>Iluminación básico</h4>
        </article>
      </div>
      <div class="courses-carousel__contrainer--1">
        <div class="course__carousel--1">
          <article class="course__cell">
            <a href="#">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-clases-01.jpg" alt="">
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
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-clases-02.jpg" alt="">
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
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-clases-03.jpg" alt="">
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
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-clases-04.jpg" alt="">
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
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-clases-06.jpg" alt="">
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
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-clases-07.jpg" alt="">
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
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-clases-08.jpg" alt="">
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
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-clases-09.jpg" alt="">
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
    </section>
    <section class="saved__container">
      <div class="header__section">
        <article class="section__title">
          <h4>Mis cursos guardados</h4>
        </article>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="saved-card__container card--1">
            <div class="saved-card__content">
              <span class="bookmark">
                <i class="fas fa-bookmark"></i>
              </span>
              <h2>Master en retratos</h2>
              <p>El combo de clases perfecto para que tus retratos siempre se destaquen y cautiven miradas.</p>
              <div class="saved-card__detail">
                <small>Fotografía</small>
                <small>18 clases</small>
                <small>16 desafios</small>
                <small>120 horas</small>
                <span class="stars">
                  <i class="fas fa-star star-selected"></i>
                  <i class="fas fa-star star-selected"></i>
                  <i class="fas fa-star star-selected"></i>
                  <i class="fas fa-star star-selected"></i>
                  <i class="fas fa-star"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="saved-card__container card--2">
            <div class="saved-card__content">
              <span class="bookmark">
                <i class="fas fa-bookmark"></i>
              </span>
              <h2>Composición</h2>
              <p>El combo de clases perfecto para que tus retratos siempre se destaquen y cautiven miradas.</p>
              <div class="saved-card__detail">
                <small>Fotografía</small>
                <small>11 clases</small>
                <small>8 desafios</small>
                <small>22 horas</small>
                <span class="stars">
                  <i class="fas fa-star star-selected"></i>
                  <i class="fas fa-star star-selected"></i>
                  <i class="fas fa-star star-selected"></i>
                  <i class="fas fa-star star-selected"></i>
                  <i class="fas fa-star star-selected"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="related__notice">
      <div class="section__title">
        <h4>También puede interesarte</h4>
      </div>
      <article class="related-notice__item--1 notice__item--single">
        <figure class="notice__thumbnail">
          <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-clases-11.jpg" alt="">
        </figure>
        <section class="notice__description">
          <article class="notice__header">
            <h5 class="notice__title">Retrato fotográfico: <br> Trabajando con luz natural</h5>
            <p class="notice__teacher">José Ignacio Pompé</p>
          </article>
          <article class="notice__detail">
            <div class="detail__category">
              <p>Iliminación</p>
            </div>
          </article>
        </section>
      </article>
      <article class="related-notice__item--2 notice__item--single">
        <figure class="notice__thumbnail">
          <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-clases-12.jpg" alt="">
        </figure>
        <section class="notice__description">
          <article class="notice__header">
            <h5 class="notice__title">Retrato fotográfico: <br> Trabajando con luz natural</h5>
            <p class="notice__teacher">José Ignacio Pompé</p>
          </article>
          <article class="notice__detail">
            <div class="detail__category">
              <p>Iliminación</p>
            </div>
          </article>
        </section>
      </article>
      <article class="related-notice__item--3 notice__item--single">
        <figure class="notice__thumbnail">
          <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-clases-13.jpg" alt="">
        </figure>
        <section class="notice__description">
          <article class="notice__header">
            <h5 class="notice__title">Retrato fotográfico: <br> Trabajando con luz natural</h5>
            <p class="notice__teacher">José Ignacio Pompé</p>
          </article>
          <article class="notice__detail">
            <div class="detail__category">
              <p>Iliminación</p>
            </div>
          </article>
        </section>
      </article>
      <article class="related-notice__item--4 notice__item--single">
        <figure class="notice__thumbnail">
          <img src="<? WEBSITE_URL; ?>/assets/img/sections/dashboard/contrastes-clases-14.jpg" alt="">
        </figure>
        <section class="notice__description">
          <article class="notice__header">
            <h5 class="notice__title">Retrato fotográfico: <br> Trabajando con luz natural</h5>
            <p class="notice__teacher">José Ignacio Pompé</p>
          </article>
          <article class="notice__detail">
            <div class="detail__category">
              <p>Iliminación</p>
            </div>
          </article>
        </section>
      </article>
    </section>
  </div>
</main>
<? include_dashboard_footer(); ?>
<!-- Scripts -->
<script src="<?= WEBSITE_URL; ?>/assets/js/flickity.min.js" type="text/javascript"></script>
<script src="<?= WEBSITE_URL; ?>/assets/js/sections/mis-cursos.js" type="text/javascript"></script>
<!-- END: Scripts -->
</body>
</html>
