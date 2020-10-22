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
<link href="<?= WEBSITE_URL; ?>/assets/css/sections/revista.min.css" type="text/css" rel="stylesheet">
<!-- END: Other styles -->
</head>
<body>
<? include_header(); ?>
<div class="header__sizer"></div>
<section class="hero__highlight-notes">
  <div class="master-container">
    <div class="master-container-padding">
      <div class="highlight-note__carousel">
        <article class="highlight-note__container">
          <div class="row middle-xs">
            <div class="col-xs-12 col-lg-5">
              <div class="highlight-note__content">
                <a href="nota">
                  <small>Entrevistas - 21/01/2019</small>
                  <h2 class="highlight-note__title">
                    Entrevista a la fotógrafa colombiana Lucía Chávez
                  </h2>
                  <p class="highlight-note__subtitle">
                    Entrevistamos a la fotógrafa va a estar en nuestra portada este mes.
                  </p>
                  <p clpss="highlight-note__cta">ver mas</p>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-lg-7">
              <figure class="highlight-note__image">
                <img src="<?= WEBSITE_URL; ?>/assets/img/sections/revista/revista-slider0000.jpg">
              </figure>
            </div>
          </div>
        </article>
        <article class="highlight-note__container">
          <div class="row">
            <div class="col-xs-12 col-lg-5">
              <div class="highlight-note__content">
                <a href="nota">
                  <small>Entrevistas - 21/01/2019</small>
                  <h2 class="highlight-note__title">
                    Entrevista a la fotógrafa colombiana Lucía Chávez
                  </h2>
                  <p class="highlight-note__subtitle">
                    Entrevistamos a la fotógrafa va a estar en nuestra portada este mes.
                  </p>
                  <p clpss="highlight-note__cta">ver mas</p>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-lg-7">
              <figure class="highlight-note__image">
                <img src="<?= WEBSITE_URL; ?>/assets/img/sections/revista/revista-slider0001.jpg">
              </figure>
            </div>
          </div>
        </article>
        <article class="highlight-note__container">
          <div class="row">
            <div class="col-xs-12 col-lg-5">
              <div class="highlight-note__content">
                <a href="nota">
                  <small>Entrevistas - 21/01/2019</small>
                  <h2 class="highlight-note__title">
                    Entrevista a la fotógrafa colombiana Lucía Chávez
                  </h2>
                  <p class="highlight-note__subtitle">
                    Entrevistamos a la fotógrafa va a estar en nuestra portada este mes.
                  </p>
                  <p clpss="highlight-note__cta">ver mas</p>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-lg-7">
              <figure class="highlight-note__image">
                <img src="<?= WEBSITE_URL; ?>/assets/img/sections/revista/revista-slider0002.jpg">
              </figure>
            </div>
          </div>
        </article>
        <article class="highlight-note__container">
          <div class="row">
            <div class="col-xs-12 col-lg-5">
              <div class="highlight-note__content">
                <a href="nota">
                  <small>Entrevistas - 21/01/2019</small>
                  <h2 class="highlight-note__title">
                    Entrevista a la fotógrafa colombiana Lucía Chávez
                  </h2>
                  <p class="highlight-note__subtitle">
                    Entrevistamos a la fotógrafa va a estar en nuestra portada este mes.
                  </p>
                  <p clpss="highlight-note__cta">ver mas</p>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-lg-7">
              <figure class="highlight-note__image">
                <img src="<?= WEBSITE_URL; ?>/assets/img/sections/revista/revista-slider0003.jpg">
              </figure>
            </div>
          </div>
        </article>
        <article class="highlight-note__container">
          <div class="row">
            <div class="col-xs-12 col-lg-5">
              <div class="highlight-note__content">
                <a href="nota">
                  <small>Entrevistas - 21/01/2019</small>
                  <h2 class="highlight-note__title">
                    Entrevista a la fotógrafa colombiana Lucía Chávez
                  </h2>
                  <p class="highlight-note__subtitle">
                    Entrevistamos a la fotógrafa va a estar en nuestra portada este mes.
                  </p>
                  <p clpss="highlight-note__cta">ver mas</p>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-lg-7">
              <figure class="highlight-note__image">
                <img src="<?= WEBSITE_URL; ?>/assets/img/sections/revista/revista-slider0004.jpg">
              </figure>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
<main class="master-container">
  <div class="master-container-padding">
    <section class="courses__container">
      <div class="header__section">
          <article class="section__title">
              <h2>Categorías</h2>
          </article>
      </div>
      <div class="courses-carousel__contrainer">
        <div class="course__carousel">
          <article class="course__cell">
            <a href="<?= WEBSITE_URL; ?>/revista/nota">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/revista/categoria-0001.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
          <article class="course__cell">
            <a href="<?= WEBSITE_URL; ?>/revista/nota">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/revista/categoria-0002.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
          <article class="course__cell">
            <a href="<?= WEBSITE_URL; ?>/revista/nota">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/revista/categoria-0003.jpg" alt="">
                </figure>
                <div class="course__title">
                  <h5>Paisajes</h5>
                </div>
              </div>
            </a>
          </article>
          <article class="course__cell">
            <a href="<?= WEBSITE_URL; ?>/revista/nota">
              <div class="course__card">
                <figure class="course__img">
                  <img src="<? WEBSITE_URL; ?>/assets/img/sections/revista/categoria-0004.jpg" alt="">
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
    <section class="news__container">
      <div class="row">
        <section class="header__section space__normal--b">
          <article class="section__title">
              <h2>Novedades</h2>
          </article>
          <article class="section__show-more">
              <a href="<?= WEBSITE_URL; ?>/revista/nota" class="btn btn__filled--blue font--small">Ver más</a>
          </article>
        </section>
        <div class="col-xs-12 col-lg-8">
          <a href="<?= WEBSITE_URL; ?>/revista/nota">
            <article class="news__highlight">
              <div class="highlight__title">
                <h1>ZY Optics da a conocer una lente super macro</h1>
                <p>El fabricante anunció el desarrollo de un objetivo macro de bajo costo, pero con gran poder de magnificación.</p>
                <p class="font--small"><small>08 SEP 2018</small> Juán Perez | Lentes, Novedades</p>
              </div>
            </article>
          </a>
        </div>
        <div class="col-xs-12 col-lg-4">
          <section class="news__content">
            <ul class="articles__container">
              <li class="articles__item">
                <a href="<?= WEBSITE_URL; ?>/revista/nota">
                  <span class="article__detail">
                    <small>12 sep 2018 Juan Pérez | Lentes, Novedades</small>
                  </span>
                  <h5>Eugenio Recuenco, su historia solidaria.</h5>
                </a>
              </li>
              <li class="articles__item">
                <a href="<?= WEBSITE_URL; ?>/revista/nota">
                  <span class="article__detail">
                    <small>12 sep 2018 Martín Sánchez | Historias</small>
                  </span>
                  <h5>Fotografía cristiana.</h5>
                </a>
              </li>
              <li class="articles__item">
                <a href="<?= WEBSITE_URL; ?>/revista/nota">
                  <span class="article__detail">
                    <small>12 sep 2018 Martín Sánchez | Historias</small>
                  </span>
                  <h5>Fotografía cristiana.</h5>
                </a>
              </li>
              <li class="articles__item">
                <a href="<?= WEBSITE_URL; ?>/revista/nota">
                  <span class="article__detail">
                    <small>12 sep 2018 Martín Sánchez | Historias</small>
                  </span>
                  <h5>Fotografía cristiana.</h5>
                </a>
              </li>
              <li class="articles__item">
                <a href="<?= WEBSITE_URL; ?>/revista/nota">
                  <span class="article__detail">
                    <small>12 sep 2018 Martín Sánchez | Historias</small>
                  </span>
                  <h5>Fotografía cristiana.</h5>
                </a>
              </li>
            </ul>
          </section>
        </div>
      </div>
    </section>
    <section class="entrevistas__container">
      <div class="header__section">
          <article class="section__title">
              <h2>Entrevistas a fotógrafos</h2>
          </article>
          <article class="section__show-more">
              <a href="<?= WEBSITE_URL; ?>/revista/nota" class="btn btn__filled--blue">ver más</a>
          </article>
      </div>
      <div class="row">
        <article class="col-xs-12 col-lg-6">
          <a href="<?= WEBSITE_URL; ?>/revista/nota">
            <div class="entrevistas__hightlighted">
              <div class="entrevistas__preview">
                <small>Entrevista</small>
                <h2>Luli Giménez refresca la fotografía publicitaria</h2>
                <p>Hoy me ha tocado un tema que considero un tanto peliagudo, de estos que dan que hablar, espero que en positivo, y del que existen muy diversas opiniones.</p>
              </div>
            </div>
          </a>
        </article>
        <section class="col-xs-12 col-lg-6">
          <div class="entrevistas__others">
            <article class="entrevistas__row">
              <div class="row">
                <div class="col-xs-12 col-lg-6">
                  <a href="<?= WEBSITE_URL; ?>/revista/nota">
                    <div class="entrevistas__preview other--1">
                      <small>Entrevista</small>
                      <h5>Luli Giménez refresca la fotografía publicitaria</h5>
                    </div>
                  </a>

                </div>
                <div class="col-xs-12 col-lg-6">
                  <a href="<?= WEBSITE_URL; ?>/revista/nota">
                    <div class="entrevistas__preview other--2">
                      <small>Entrevista</small>
                      <h5>Luli Giménez refresca la fotografía publicitaria</h5>
                    </div>
                  </a>
                </div>
              </div>
            </article>
            <article class="entrevistas__row">
              <div class="row">
                <div class="col-xs-12 col-lg-6">
                  <a href="<?= WEBSITE_URL; ?>/revista/nota">
                    <div class="entrevistas__preview other--3">
                      <small>Entrevista</small>
                      <h5>Luli Giménez refresca la fotografía publicitaria</h5>
                    </div>
                  </a>
                </div>
                <div class="col-xs-12 col-lg-6">
                  <a href="<?= WEBSITE_URL; ?>/revista/nota">
                    <div class="entrevistas__preview other--4">
                      <small>Entrevista</small>
                      <h5>Luli Giménez refresca la fotografía publicitaria</h5>
                    </div>
                  </a>
                </div>
              </div>
            </article>
          </div>
        </section>
      </div>
    </section>
    <section class="equipo__container">
      <div class="header__section">
          <article class="section__title">
            <h2>Reviews de equipos</h2>
          </article>
      </div>
      <div class="row">
        <div class="col-xs-12 col-lg-6">
          <article class="equipment__article">
            <div class="article__img article__img--1"></div>
            <div class="article__content">
              <small>Reviews de equipos</small>
              <h4>La nueva Fujifilm X-T30 al descubierto.</h4>
              <p>Hay todo tipo de fotógrafos por allí afuera. Aquellos que filman moda, productos, calle, editorial y todo tipo de otros géneros.</p>
              <a href="<?= WEBSITE_URL; ?>/revista/nota">Seguir leyendo</a>
            </div>
          </article>
        </div>
        <div class="col-xs-12 col-lg-6">
          <article class="equipment__article">
            <div class="article__img article__img--2"></div>
            <div class="article__content">
              <small>Reviews de equipos</small>
              <h4>La nueva Fujifilm X-T30 al descubierto.</h4>
              <p>Hay todo tipo de fotógrafos por allí afuera. Aquellos que filman moda productos, calle, editorial y todo tipo de otros géneros.</p>
              <a href="<?= WEBSITE_URL; ?>/revista/nota">Seguir leyendo</a>
            </div>
          </article>
        </div>
        <div class="col-xs-12 col-lg-6">
          <article class="equipment__article">
            <div class="article__img article__img--3"></div>
            <div class="article__content">
              <small>Reviews de equipos</small>
              <h4>La nueva Fujifilm X-T30 al descubierto.</h4>
              <p>Hay todo tipo de fotógrafos por allí afuera. Aquellos que filman moda, productos, calle, editorial y todo tipo de otros géneros.</p>
              <a href="<?= WEBSITE_URL; ?>/revista/nota">Seguir leyendo</a>
            </div>
          </article>
        </div>
        <div class="col-xs-12 col-lg-6">
          <article class="equipment__article">
            <div class="article__img article__img--4"></div>
            <div class="article__content">
              <small>Reviews de equipos</small>
              <h4>La nueva Fujifilm X-T30 al descubierto.</h4>
              <p>Hay todo tipo de fotógrafos por allí afuera. Aquellos que filman moda productos, calle, editorial y todo tipo de otros géneros.</p>
              <a href="<?= WEBSITE_URL; ?>/revista/nota">Seguir leyendo</a>
            </div>
          </article>
        </div>
        <div class="col-xs-12 col-lg-6">
          <article class="equipment__article">
            <div class="article__img article__img--5"></div>
            <div class="article__content">
              <small>Reviews de equipos</small>
              <h4>La nueva Fujifilm X-T30 al descubierto.</h4>
              <p>Hay todo tipo de fotógrafos por allí afuera. Aquellos que filman moda, productos, calle, editorial y todo tipo de otros géneros.</p>
              <a href="<?= WEBSITE_URL; ?>/revista/nota">Seguir leyendo</a>
            </div>
          </article>
        </div>
        <div class="col-xs-12 col-lg-6">
          <article class="equipment__article">
            <div class="article__img article__img--6"></div>
            <div class="article__content">
              <small>Reviews de equipos</small>
              <h4>La nueva Fujifilm X-T30 al descubierto.</h4>
              <p>Hay todo tipo de fotógrafos por allí afuera. Aquellos que filman moda productos, calle, editorial y todo tipo de otros géneros.</p>
              <a href="<?= WEBSITE_URL; ?>/revista/nota">Seguir leyendo</a>
            </div>
          </article>
        </div>
      </div>
    </section>
    <section class="search-result__pagination">
      <ul class="pagination__container">
        <li class="pagination__item js-item__onView">1</li>
        <li class="pagination__item">2</li>
        <li class="pagination__item">3</li>
        <li class="pagination__item">4</li>
        <li class="pagination__item">5</li>
        <li class="pagination__item item__onView">+</li>
      </ul>
    </section>
  </div>
</main>

<? include_footer(); ?>
<!-- Scripts -->
<script src="<?= WEBSITE_URL; ?>/assets/js/flickity.min.js" type="text/javascript"></script>
<script src="<?= WEBSITE_URL; ?>/assets/js/sections/revista.js" type="text/javascript"></script>
<!-- END: Scripts -->
</body>
</html>
