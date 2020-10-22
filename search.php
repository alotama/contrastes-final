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
<link href="<?= WEBSITE_URL; ?>/assets/css/sections/search.min.css" type="text/css" rel="stylesheet">
<!-- END: Other styles -->
</head>
<body>
<? include_header(); ?>
<div class="header__sizer"></div>
<section class="master-container">
    <div class="master-container-padding">
      <div class="row">
        <div class="col-xs-12 col-lg-offset-1 col-lg-10">
          <form class="search__container">
              <input type="search" class="input__search" id="search-bar" placeholder="Busca cursos, tutoriales y más">
              <article class="search__filter search__filter--category">
                <div class="filter__container">
                  <button class="filter__item" type="button">Fotografía</button>
                </div>
                <div class="filter__container">
                  <button class="filter__item" type="button">Iluminación</button>
                </div>
                <div class="filter__container">
                  <button class="filter__item" type="button">Edición</button>
                </div>
              </article>
              <article class="search__filter search__filter--level">
                <div class="filter__container">
                  <button class="filter__item" type="button">Principiante</button>
                </div>
                <div class="filter__container">
                    <button class="filter__item" type="button">Intermedio</button>
                </div>
                <div class="filter__container">
                    <button class="filter__item" type="button">Experto</button>
                </div>
              </article>
              <ul class="tag__container">
                <li class="tag__item js-active">Técnicas con la cámara</li>
                <li class="tag__item js-active">Retratos</li>
                <li class="tag__item js-active">Iluminación</li>
                <li class="tag__item js-active">Paisajes</li>
                <li class="tag__item js-active">Edición</li>
                <li class="tag__item">En estudio</li>
                <li class="tag__item">Retoque</li>
                <li class="tag__item js-active">Comida</li>
                <li class="tag__item">Instagram</li>
              </ul>
              <ul class="tag__container">
                <li class="tag__item">Historias</li>
                <li class="tag__item js-active">Lightroom</li>
                <li class="tag__item js-active">Paisajes</li>
                <li class="tag__item js-active">Edición</li>
                <li class="tag__item">Montaje</li>
                <li class="tag__item">Photoshop</li>
                <li class="tag__item js-active">DSLR</li>
                <li class="tag__item js-active">Tips</li>
              </ul>
          </form>
        </div>
      </div>
    </div>
</section>
<main class="master-container">
  <div class="master-container-padding">
    <section class="search-result__container">
      <article class="search-result__item--1 search__item--double">
        <figure class="course__thumbnail">
          <img src="<?= WEBSITE_URL; ?>/assets/img/sections/search/course-grid-double-1.jpg">
        </figure>
        <section class="course__description">
          <article class="course__header">
            <h5 class="course__title">Retrato fotográfico: <br> Luz de estudio</h5>
            <p class="course__teacher">Selene Prieto</p>
          </article>
          <article class="course__preview-text">
            <p>Esta interesante clase de una hora con la fotógrafa de retratos de celebridades Elizabeth Weinberg le guiará a través de lo que sucede detrás de esos filtros de Instagram y programas de edición, para que pueda entender los fundamentos de luz, color, grano, saturación y, en esencia, hacer que las fotos digitales no sean malas.</p>
          </article>
          <article class="course__detail">
            <div class="detail__category">
              <p>Iliminación</p>
            </div>
            <div class="detail__duration">
              <p>60 Min.</p>
            </div>
          </article>
        </section>
      </article>
      <article class="search-result__item--2 search__item--single">
        <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
          <figure class="course__thumbnail">
            <img src="<?= WEBSITE_URL; ?>/assets/img/sections/search/course-grid-single-1.jpg">
          </figure>
          <section class="course__description">
            <article class="course__header">
              <h5 class="course__title">Retrato fotográfico: <br> Trabajando con luz natural</h5>
              <p class="course__teacher">José Ignacio Pompé</p>
            </article>
            <article class="course__detail">
              <div class="detail__category">
                <p>Iliminación</p>
              </div>
              <div class="detail__duration">
                <p>60 Min.</p>
              </div>
            </article>
          </section>
        </a>
      </article>
      <article class="search-result__item--3 search__item--single">
        <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
          <figure class="course__thumbnail">
            <img src="<?= WEBSITE_URL; ?>/assets/img/sections/search/course-grid-single-2.jpg">
          </figure>
          <section class="course__description">
            <article class="course__header">
              <h5 class="course__title">Retrato fotográfico: <br> Trabajando con luz natural</h5>
              <p class="course__teacher">José Ignacio Pompé</p>
            </article>
            <article class="course__detail">
              <div class="detail__category">
                <p>Iliminación</p>
              </div>
              <div class="detail__duration">
                <p>60 Min.</p>
              </div>
            </article>
          </section>
        </a>
      </article>
      <article class="search-result__item--4 search__item--single">
        <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
          <figure class="course__thumbnail">
            <img src="<?= WEBSITE_URL; ?>/assets/img/sections/search/course-grid-single-3.jpg">
          </figure>
          <section class="course__description">
            <article class="course__header">
              <h5 class="course__title">Retrato fotográfico: <br> Trabajando con luz natural</h5>
              <p class="course__teacher">José Ignacio Pompé</p>
            </article>
            <article class="course__detail">
              <div class="detail__category">
                <p>Iliminación</p>
              </div>
              <div class="detail__duration">
                <p>60 Min.</p>
              </div>
            </article>
          </section>
        </a>
      </article>
      <article class="search-result__item--5 search__item--single">
        <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
          <figure class="course__thumbnail">
            <img src="<?= WEBSITE_URL; ?>/assets/img/sections/search/course-grid-single-4.jpg">
          </figure>
          <section class="course__description">
            <article class="course__header">
              <h5 class="course__title">Retrato fotográfico: <br> Trabajando con luz natural</h5>
              <p class="course__teacher">José Ignacio Pompé</p>
            </article>
            <article class="course__detail">
              <div class="detail__category">
                <p>Iliminación</p>
              </div>
              <div class="detail__duration">
                <p>60 Min.</p>
              </div>
            </article>
          </section>
        </a>
      </article>
      <article class="search-result__item--6 search__item--single">
        <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
          <figure class="course__thumbnail">
            <img src="<?= WEBSITE_URL; ?>/assets/img/sections/search/course-grid-single-5.jpg">
          </figure>
          <section class="course__description">
            <article class="course__header">
              <h5 class="course__title">Retrato fotográfico: <br> Trabajando con luz natural</h5>
              <p class="course__teacher">José Ignacio Pompé</p>
            </article>
            <article class="course__detail">
              <div class="detail__category">
                <p>Iliminación</p>
              </div>
              <div class="detail__duration">
                <p>60 Min.</p>
              </div>
            </article>
          </section>
        </a>
      </article>
      <article class="search-result__item--7 search__item--single">
        <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
          <figure class="course__thumbnail">
            <img src="<?= WEBSITE_URL; ?>/assets/img/sections/search/course-grid-single-6.jpg">
          </figure>
          <section class="course__description">
            <article class="course__header">
              <h5 class="course__title">Retrato fotográfico: <br> Trabajando con luz natural</h5>
              <p class="course__teacher">José Ignacio Pompé</p>
            </article>
            <article class="course__detail">
              <div class="detail__category">
                <p>Iliminación</p>
              </div>
              <div class="detail__duration">
                <p>60 Min.</p>
              </div>
            </article>
          </section>
        </a>
      </article>
      <article class="search-result__item--8 search__item--single">
        <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
          <figure class="course__thumbnail">
            <img src="<?= WEBSITE_URL; ?>/assets/img/sections/search/course-grid-single-7.jpg">
          </figure>
          <section class="course__description">
            <article class="course__header">
              <h5 class="course__title">Retrato fotográfico: <br> Trabajando con luz natural</h5>
              <p class="course__teacher">José Ignacio Pompé</p>
            </article>
            <article class="course__detail">
              <div class="detail__category">
                <p>Iliminación</p>
              </div>
              <div class="detail__duration">
                <p>60 Min.</p>
              </div>
            </article>
          </section>
        </a>
      </article>
      <article class="search-result__item--9 search__item--single">
        <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
          <figure class="course__thumbnail">
            <img src="<?= WEBSITE_URL; ?>/assets/img/sections/search/course-grid-single-8.jpg">
          </figure>
          <section class="course__description">
            <article class="course__header">
              <h5 class="course__title">Retrato fotográfico: <br> Trabajando con luz natural</h5>
              <p class="course__teacher">José Ignacio Pompé</p>
            </article>
            <article class="course__detail">
              <div class="detail__category">
                <p>Iliminación</p>
              </div>
              <div class="detail__duration">
                <p>60 Min.</p>
              </div>
            </article>
          </section>
        </a>
      </article>
      <article class="search-result__item--10 search__item--single">
        <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
          <figure class="course__thumbnail">
            <img src="<?= WEBSITE_URL; ?>/assets/img/sections/search/course-grid-single-9.jpg">
          </figure>
          <section class="course__description">
            <article class="course__header">
              <h5 class="course__title">Retrato fotográfico: <br> Trabajando con luz natural</h5>
              <p class="course__teacher">José Ignacio Pompé</p>
            </article>
            <article class="course__detail">
              <div class="detail__category">
                <p>Iliminación</p>
              </div>
              <div class="detail__duration">
                <p>60 Min.</p>
              </div>
            </article>
          </section>
        </a>
      </article>
      <article class="search-result__item--11 search__item--single">
        <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
          <figure class="course__thumbnail">
            <img src="<?= WEBSITE_URL; ?>/assets/img/sections/search/course-grid-single-10.jpg">
          </figure>
          <section class="course__description">
            <article class="course__header">
              <h5 class="course__title">Retrato fotográfico: <br> Trabajando con luz natural</h5>
              <p class="course__teacher">José Ignacio Pompé</p>
            </article>
            <article class="course__detail">
              <div class="detail__category">
                <p>Iliminación</p>
              </div>
              <div class="detail__duration">
                <p>60 Min.</p>
              </div>
            </article>
          </section>
        </a>
      </article>
      <article class="search-result__item--12 search__item--single">
        <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
          <figure class="course__thumbnail">
            <img src="<?= WEBSITE_URL; ?>/assets/img/sections/search/course-grid-single-11.jpg">
          </figure>
          <section class="course__description">
            <article class="course__header">
              <h5 class="course__title">Retrato fotográfico: <br> Trabajando con luz natural</h5>
              <p class="course__teacher">José Ignacio Pompé</p>
            </article>
            <article class="course__detail">
              <div class="detail__category">
                <p>Iliminación</p>
              </div>
              <div class="detail__duration">
                <p>60 Min.</p>
              </div>
            </article>
          </section>
        </a>
      </article>
      <article class="search-result__item--13 search__item--double">
        <figure class="course__thumbnail">
          <img src="<?= WEBSITE_URL; ?>/assets/img/sections/search/course-grid-double-2.jpg">
        </figure>
        <section class="course__description">
          <article class="course__header">
            <h5 class="course__title">Retrato fotográfico: <br> Luz de estudio</h5>
            <p class="course__teacher">Selene Prieto</p>
          </article>
          <article class="course__preview-text">
            <p>Esta interesante clase de una hora con la fotógrafa de retratos de celebridades Elizabeth Weinberg le guiará a través de lo que sucede detrás de esos filtros de Instagram y programas de edición, para que pueda entender los fundamentos de luz, color, grano, saturación y, en esencia, hacer que las fotos digitales no sean malas.</p>
          </article>
          <article class="course__detail">
            <div class="detail__category">
              <p>Iliminación</p>
            </div>
            <div class="detail__duration">
              <p>60 Min.</p>
            </div>
          </article>
        </section>
      </article>
      <article class="search-result__item--14 search__item--single">
        <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
          <figure class="course__thumbnail">
            <img src="<?= WEBSITE_URL; ?>/assets/img/sections/search/course-grid-single-12.jpg">
          </figure>
          <section class="course__description">
            <article class="course__header">
              <h5 class="course__title">Retrato fotográfico: <br> Trabajando con luz natural</h5>
              <p class="course__teacher">José Ignacio Pompé</p>
            </article>
            <article class="course__detail">
              <div class="detail__category">
                <p>Iliminación</p>
              </div>
              <div class="detail__duration">
                <p>60 Min.</p>
              </div>
            </article>
          </section>
        </a>
      </article>
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
<div class="master-container">
  <div class="master-container-padding">
    <section class="course__highlight">
      <div class="row">
        <div class="col-xs-12">
          <section class="section__title">
            <h2>Carreras intensivas</h2>
          </section>
        </div>
      </div>
      <section class="highlight__container">
        <div class="row">
          <div class="col-xs-12 col-lg-8">
            <section class="course__img course__img--1">
              <div class="highlight__overlay"></div>
              <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
                <article class="highlight__title">
                    <h1>Master en retratos</h1>
                    <p>El combo perfecto para que tus retratos siempre se destaquen.</p>
                    <div class="course__detail"><small>Fotografía</small><small>15 Clases</small><small>640 Min.</small></div>
                </article>
              </a>
            </section>
          </div>
          <div class="col-xs-12 col-lg-4">
            <section class="header__section space__normal--b">
              <article class="section__title">
                  <h4>Clases</h4>
              </article>
              <article class="section__show-more">
                  <a href="#" class="font--small">Ver más</a>
              </article>
            </section>
            <section class="course__container">
              <article class="course__content">
                <ul class="articles__container">
                  <li class="articles__item">
                    <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
                      <span class="article__detail">
                        <p class="font--small">12 sep 2018 Juan Pérez | Lentes, Novedades</p>
                      </span>
                      <h5>Introducción a los retratos.</h5>
                    </a>
                  </li>
                  <li class="articles__item">
                    <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
                      <span class="article__detail">
                        <p class="font--small">12 sep 2018 Martín Sánchez | Historias</p>
                      </span>
                      <h5>Iluminación para retratos: lo escencial.</h5>
                    </a>
                  </li>
                  <li class="articles__item">
                    <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
                      <span class="article__detail">
                        <p class="font--small">12 sep 2018 Sebastián Tamashiro | Detrás de escena</p>
                      </span>
                      <h5>Dirección de modelos</h5>
                    </a>
                  </li>
                  <li class="articles__item">
                    <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
                      <span class="article__detail">
                        <p class="font--small">12 sep 2018 José Pompé | Entrevistas</p>
                      </span>
                      <h5>Retoca como profesional tus retratos</h5>
                    </a>
                  </li>
                </ul>
              </article>
              <article class="course__cta">
                <a href="<?= WEBSITE_URL; ?>/academia/clase-individual" class="btn">ver más</a>
                <a href="<?= WEBSITE_URL; ?>/academia/clase-individual" class="btn btn__filled--blue">Comenzar</a>
              </article>
            </section>
          </div>
        </div>
      </section>
      <section class="highlight__container">
        <div class="row">
          <div class="col-xs-12 col-lg-8">
            <section class="course__img course__img--2">
              <div class="highlight__overlay"></div>
              <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
                <article class="highlight__title">
                    <h1>Master en retratos</h1>
                    <p>El combo perfecto para que tus retratos siempre se destaquen.</p>
                    <div class="course__detail"><small>Fotografía</small><small>15 Clases</small><small>640 Min.</small></div>
                </article>
              </a>
            </section>
          </div>
          <div class="col-xs-12 col-lg-4">
            <section class="header__section space__normal--b">
              <article class="section__title">
                  <h4>Clases</h4>
              </article>
              <article class="section__show-more">
                  <a href="<?= WEBSITE_URL; ?>/academia/clase-individual" class="font--small">Ver más</a>
              </article>
            </section>
            <section class="course__container">
              <article class="course__content">
                <ul class="articles__container">
                  <li class="articles__item">
                    <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
                      <span class="article__detail">
                        <p class="font--small">12 sep 2018 Juan Pérez | Lentes, Novedades</p>
                      </span>
                      <h5>Introducción a los retratos.</h5>
                    </a>
                  </li>
                  <li class="articles__item">
                    <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
                      <span class="article__detail">
                        <p class="font--small">12 sep 2018 Martín Sánchez | Historias</p>
                      </span>
                      <h5>Iluminación para retratos: lo escencial.</h5>
                    </a>
                  </li>
                  <li class="articles__item">
                    <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
                      <span class="article__detail">
                        <p class="font--small">12 sep 2018 Sebastián Tamashiro | Detrás de escena</p>
                      </span>
                      <h5>Dirección de modelos</h5>
                    </a>
                  </li>
                  <li class="articles__item">
                    <a href="<?= WEBSITE_URL; ?>/academia/clase-individual">
                      <span class="article__detail">
                        <p class="font--small">12 sep 2018 José Pompé | Entrevistas</p>
                      </span>
                      <h5>Retoca como profesional tus retratos</h5>
                    </a>
                  </li>
                </ul>
              </article>
              <article class="course__cta">
                <a href="<?= WEBSITE_URL; ?>/academia/clase-individual" class="btn">ver más</a>
                <a href="<?= WEBSITE_URL; ?>/academia/clase-individual" class="btn btn__filled--blue">Comenzar</a>
              </article>
            </section>
          </div>
        </div>
      </section>
    </section>
  </div>
</div>
<? include_footer(); ?>
<!-- Scripts -->
<script src="<?= WEBSITE_URL; ?>/assets/js/sections/search.js" type="text/javascript"></script>
<!-- END: Scripts -->
</body>
</html>
