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
<link href="<?= WEBSITE_URL; ?>/assets/css/sections/fotografia.min.css" type="text/css" rel="stylesheet">
<!-- END: Other styles -->
</head>
<body>
<? include_header(); ?>
<section class="hero__container">
  <div class="hero__overlay"></div>
    <div class="master-container">
        <div class="master-container-padding">
            <form class="hero__search" action="/fotografia/search" method="get">
                <input type="search" class="input__search" id="search-bar" placeholder="¿Qué te gustaría ver?">
                <p>Escribí lo que quieras buscar?</p>
            </form>
        </div>
    </div>
</section>
<main class="master-container">
  <div class="master-container-padding">
    <section class="courses__container">
      <div class="header__section">
          <article class="section__title">
              <p class="font--bold">Desafios de septiembre.</p>
          </article>
      </div>
      <div class="courses-carousel__contrainer">
        <div class="course__carousel course__carousel--1">
          <article class="course__cell">
            <a href="<? WEBSITE_URL; ?>/academia/clase-individual">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/fotografia/contrastes-clases-16.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
          <article class="course__cell">
            <a href="<? WEBSITE_URL; ?>/academia/clase-individual">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/fotografia/contrastes-clases-17.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
          <article class="course__cell">
            <a href="<? WEBSITE_URL; ?>/academia/clase-individual">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/fotografia/contrastes-clases-18.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
          <article class="course__cell">
            <a href="<? WEBSITE_URL; ?>/academia/clase-individual">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/fotografia/contrastes-clases-19.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
        </div>
        <div class="append-cell__container">
          <button class="button button--append">+</button>
        </div>
      </div>
    </section>
    <section class="photo__grid grid--1">
      <div class="photo__item photo__item--1"></div>
      <div class="photo__item photo__item--2"></div>
      <div class="photo__item photo__item--3"></div>
      <div class="photo__item photo__item--4"></div>
      <div class="photo__item photo__item--5"></div>
      <div class="photo__item photo__item--6"></div>
      <div class="photo__item photo__item--7"></div>
      <div class="photo__item photo__item--8"></div>
      <div class="photo__item photo__item--9"></div>
      <div class="photo__item photo__item--10"></div>
    </section>
    <section class="separator__container">
      <div class="row">
        <div class="col-xs-12 col-lg-4">
          <div class="separator__title">
            <h1>Aprende a fotografiar</h1>
          </div>
          <div class="separator__cta">
            <a href="<? WEBSITE_URL; ?>/" class="btn btn__filled--blue">ver más</a>
          </div>
        </div>
        <div class="col-xs-12 col-lg-8">
          <div class="related__notice">
            <article class="related-notice__item--1 notice__item--single">
              <a href="<? WEBSITE_URL; ?>/academia/clase-individual">
                <figure class="notice__thumbnail">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/fotografia/contrastes-clases-01.jpg">
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
              </a>
            </article>
            <article class="related-notice__item--2 notice__item--single">
              <a href="<? WEBSITE_URL; ?>/academia/clase-individual">
                <figure class="notice__thumbnail">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/fotografia/contrastes-clases-02.jpg">
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
              </a>
            </article>
            <article class="related-notice__item--3 notice__item--single">
              <a href="<? WEBSITE_URL; ?>/academia/clase-individual">
                <figure class="notice__thumbnail">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/fotografia/contrastes-clases-03.jpg">
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
              </a>
            </article>
          </div>
        </div>
      </div>
    </section>
    <section class="photo__grid grid--2">
      <div class="photo__item photo__item--1"></div>
      <div class="photo__item photo__item--2"></div>
      <div class="photo__item photo__item--3"></div>
      <div class="photo__item photo__item--4"></div>
      <div class="photo__item photo__item--5"></div>
      <div class="photo__item photo__item--6"></div>
      <div class="photo__item photo__item--7"></div>
      <div class="photo__item photo__item--8"></div>
      <div class="photo__item photo__item--9"></div>
      <div class="photo__item photo__item--10"></div>
    </section>
  </div>
</main>
<? include_footer(); ?>
<!-- Scripts -->
<script src="<?= WEBSITE_URL; ?>/assets/js/flickity.min.js" type="text/javascript"></script>
<script src="<?= WEBSITE_URL; ?>/assets/js/sections/fotografia.js" type="text/javascript"></script>
<!-- END: Scripts -->
</body>
</html>
