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
<link href="<?= WEBSITE_URL; ?>/assets/css/sections/clase-individual.min.css" type="text/css" rel="stylesheet">
<!-- END: Other styles -->
</head>
<body>
<? include_header(); ?>
<div class="header__sizer"></div>
<section class="course__preview"></section>
<main class="course__container">
  <div class="master-container">
    <div class="master-container-padding">
      <section class="course__information">
        <div class="row">
          <div class="col-xs-12 col-lg-7">
            <article class="course__introduction--1">
              <h1>Iluminación básica</h1>
              <p>Ya sea que use un iPhone o una DSLR, esta clase ofrece consejos universales para aprovechar al máximo su entorno y recursos, y capturar un retrato profesional, hermoso y estilizado de un extraño o incluso un mejor amigo.</p>
            </article>
            <article class="course__introduction--2">
              <div class="course__detail">
                <small>Nivel Principiante</small> <small>260 Min.</small> <small>20 desafíos</small> <small>621 estudiantes</small> <div class="course__star"></div>
              </div>
              <div class="course__cta">
                <a href="#" class="btn btn__filled--blue">Comenzar</a>
              </div>
            </article>
          </div>
          <div class="col-xs-12 col-lg-offset-1 col-lg-4">
            <article class="course__playlist">
              <h3>Clases</h3>
              <ul class="playlist__conteiner">
                <li class="playlist__item">
                  <p>Introducción</p>
                  <p>00:00/15:00 Min.</p>
                </li>
                <li class="playlist__item">
                  <p>Equipamiento: preparado</p>
                  <p>00:00/28:00 Min.</p>
                </li>
                <li class="playlist__item">
                  <p>Organización y planteamiento</p>
                  <p>00:00/25:00 Min.</p>
                </li>
                <li class="playlist__item">
                  <p>Fotografiando con luz natural</p>
                  <p>00:00/32:00 Min.</p>
                </li>
                <li class="playlist__item">
                  <p>Fotografiando en estudio</p>
                  <p>00:00/45:00 Min.</p>
                </li>
                <li class="playlist__item">
                  <p>Edición</p>
                  <p>00:00/32:00 Min.</p>
                </li>
                <li class="playlist__item">
                  <p>Consejos y tips</p>
                  <p>00:00/22:00 Min.</p>
                </li>
              </ul>
            </article>
          </div>
        </div>
      </section>
      <section class="course__about">
        <div class="section__title">
          <h2>Acerca de este curso</h2>
        </div>
        <article class="row">
          <div class="col-xs-12 col-lg-2">
            <h5>En cifras</h5>
          </div>
          <div class="col-xs-6 col-lg-2">
            <ul>
              <li>Modulo: 30</li>
              <li>Tiempo 18hs</li>
            </ul>
          </div>
          <div class="col-xs-6 col-lg-2">
            <ul>
              <li>621 Alumnos</li>
              <li>Principantes</li>
            </ul>
          </div>
          <div class="col-xs-6 col-lg-2">
            <ul>
              <li>20 Desafíos</li>
            </ul>
          </div>
        </article>
        <article class="row">
          <div class="col-xs-6 col-lg-2">
            <h5>Descripción</h5>
          </div>
          <div class="col-lg-8">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sed vestibulum est, sit amet vulputate nunc. Nunc facilisis, sem vel blandit porttitor, erat dui euismod orci, auctor ultricies massa elit sit amet lectus. Aenean varius lobortis venenatis.</p>
          </div>
        </article>
        <article class="row">
          <div class="col-xs-12 col-lg-2">
            <h5>Requisitos</h5>
          </div>
          <div class="col-xs-12 col-lg-2">
            <il>
              <li>Cámara</li>
              <li>Flash</li>
            </il>
          </div>
        </article>
        <article class="row">
          <div class="col-xs-12 col-lg-2">
            <h5>Profesor</h5>
          </div>
          <div class="col-xs-12 col-lg-8">
            <section class="professor__container">
              <div class="professor__name">
                <figure class="professor__photo">
                  <img src="<?= WEBSITE_URL; ?>/assets/img/sections/dashboard/profile-50x50.jpg">
                </figure>
                <div class="professor__title">
                  <h5>Nombre y Apellido</h5>
                  <p>Título del profesor</p>
                </div>
              </div>
              <div class="professor__about">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sed vestibulum est, sit amet vulputate nunc. Nunc facilisis, sem vel blandit porttitor, erat dui euismod orci, auctor ultricies massa elit sit amet lectus. Aenean varius lobortis venenatis. Praesent non blandit dolor, et mattis nisl. Vestibulum dictum mauris ac sem varius, non tempor libero bibendum. Vivamus ornare ut odio in iaculis.</p>
              </div>
            </section>
          </div>
        </article>
        <article class="row">
          <div class="col-xs-12 col-lg-2">
            <h5>Alumnos</h5>
          </div>
          <div class="col-xs-12 col-lg-10">
            <section class="student__container">

              <div class="button-group">
                <div class="button__container">
                  <button class="btn btn__reset">Fotografías</button>
                </div>
                <div class="button__container">
                  <button class="btn btn__reset">Comentarios</button>
                </div>
              </div>

              <div class="student__carousel">
                <div class="carousel-cell">
                  <section class="photos__container">
                    <article class="photo__item photo__item--1">
                      <div class="photo__credit">
                        <small>@usuario</small>
                      </div>
                    </article>
                    <article class="photo__item photo__item--2">
                      <div class="photo__credit">
                        <small>@usuario</small>
                      </div>
                    </article>
                    <article class="photo__item photo__item--3">
                      <div class="photo__credit">
                        <small>@usuario</small>
                      </div>
                    </article>
                    <article class="photo__item photo__item--4">
                      <div class="photo__credit">
                        <small>@usuario</small>
                      </div>
                    </article>
                    <article class="photo__item photo__item--5">
                      <div class="photo__credit">
                        <small>@usuario</small>
                      </div>
                    </article>
                    <article class="photo__item photo__item--6">
                      <div class="photo__credit">
                        <small>@usuario</small>
                      </div>
                    </article>
                    <article class="photo__item photo__item--7">
                      <div class="photo__credit">
                        <small>@usuario</small>
                      </div>
                    </article>
                  </section>
                </div>
                <div class="carousel-cell">
                  <img src="<?= WEBSITE_URL; ?>/assets/img/500x500.png" alt="">
                </div>
              </div>

            </section>
          </div>
        </article>
      </section>
    </div>
  </div>
</main>
<aside class="course_related">
  <div class="master-container">
    <div class="master-container-padding">
      <div class="related__notice">
        <div class="section__title">
          <h4>También te puede interesar</h4>
        </div>
        <article class="related-notice__item--1 notice__item--single">
          <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
            <figure class="notice__thumbnail">
              <img src="<? WEBSITE_URL; ?>/assets/img/sections/clase-individual/contrastes-clases-01.jpg">
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
          <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
            <figure class="notice__thumbnail">
              <img src="<? WEBSITE_URL; ?>/assets/img/sections/clase-individual/contrastes-clases-02.jpg">
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
          <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
            <figure class="notice__thumbnail">
              <img src="<? WEBSITE_URL; ?>/assets/img/sections/clase-individual/contrastes-clases-03.jpg">
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
        <article class="related-notice__item--4 notice__item--single">
          <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
            <figure class="notice__thumbnail">
              <img src="<? WEBSITE_URL; ?>/assets/img/sections/clase-individual/contrastes-clases-04.jpg">
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
</aside>
<? include_footer(); ?>
<!-- Scripts -->
<script src="<?= WEBSITE_URL; ?>/assets/js/flickity.min.js" type="text/javascript"></script>
<script src="<?= WEBSITE_URL; ?>/assets/js/sections/clase-individual.js" type="text/javascript"></script>
<!-- END: Scripts -->
</body>
</html>
