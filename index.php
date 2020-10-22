<?php
require_once($_SERVER['DOCUMENT_ROOT']."/_private/DECS/get_environment.php");

$Title = "Contrastes Argentina";
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
<link href="<?= WEBSITE_URL; ?>/assets/css/sections/home.min.css" type="text/css" rel="stylesheet">
<!-- END: Other styles -->
</head>
<body>
<? include_header(); ?>

<section class="hero__container">
    <div class="master-container">
        <div class="master-container-padding">
            <form class="hero__search" action="/search" method="get">
                <input type="search" class="input__search" id="search-bar" placeholder="¿Qué te gustaría saber?">
                <p>Escribí lo que quieras buscar</p>
            </form>
        </div>
    </div>
</section>
<main class="master-container">
    <div class="master-container-padding">
      <section class="courses__container">
        <div class="header__section">
            <article class="section__title">
                <h2>Tenemos más de 150 cursos</h2>
                <p>Explora nuestros cursos — probalo gratis.</p>
            </article>
            <article class="section__show-more">
                <a href="<?= WEBSITE_URL; ?>/search" class="font--small">Ver más</a>
            </article>
        </div>
        <div class="courses-carousel__contrainer">
          <div class="course__carousel">
            <article class="course__cell">
              <a href="<?= WEBSITE_URL; ?>/search">
                <div class="course__card">
                  <figure class="course__img">
                    <img src="<? WEBSITE_URL; ?>/assets/img/sections/home/contrastes-cursos-1.jpg" alt="">
                  </figure>
                  <div class="course__title">
                    <h5>Paisajes</h5>
                  </div>
                </div>
              </a>
            </article>
            <article class="course__cell">
              <a href="<?= WEBSITE_URL; ?>/search">
                <div class="course__card">
                  <figure class="course__img">
                    <img src="<? WEBSITE_URL; ?>/assets/img/sections/home/contrastes-cursos-2.jpg" alt="">
                  </figure>
                  <div class="course__title">
                    <h5>Paisajes</h5>
                  </div>
                </div>
              </a>
            </article>
            <article class="course__cell">
              <a href="<?= WEBSITE_URL; ?>/search">
                <div class="course__card">
                  <figure class="course__img">
                    <img src="<? WEBSITE_URL; ?>/assets/img/sections/home/contrastes-cursos-3.jpg" alt="">
                  </figure>
                  <div class="course__title">
                    <h5>Paisajes</h5>
                  </div>
                </div>
              </a>
            </article>
            <article class="course__cell">
              <a href="<?= WEBSITE_URL; ?>/search">
                <div class="course__card">
                  <figure class="course__img">
                    <img src="<? WEBSITE_URL; ?>/assets/img/sections/home/contrastes-cursos-4.jpg" alt="">
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
      <section class="contrastes-school__container">
        <div class="header__section">
            <article class="section__title">
                <h2>Sumate a Academia Contrastes</h2>
                <p>Proba gratis durante 1 mes.</p>
            </article>
            <article class="section__show-more">
                <a href="#" class="font--small">Más información</a>
            </article>
        </div>
        <article class="concept__container">
          <div class="row">
            <div class="col-xs-12 col-lg-3">
              <div class="concept__controllers">
                <div class="controller-concept__container js-controller-selected" data-selector=".concept-carousel__cell--aprende">
                  <button class="concept__item">Aprendé</button>
                </div>
                <div class="controller-concept__container" data-selector=".concept-carousel__cell--practica">
                  <button class="concept__item">Practicá</button>
                </div>
                <div class="controller-concept__container" data-selector=".concept-carousel__cell--expone">
                  <button class="concept__item">Exponé</button>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-lg-9">
              <div class="concept-carousel__carousel">
                <section class="concept-carousel__cell concept-carousel__cell--aprende">
                    <article class="concept__content">
                    <div class="row">
                      <div class="col-xs-12 col-lg-5">
                        <figure class="concept__logo">
                          <img src="<?= WEBSITE_URL; ?>/assets/img/logos/revista-contrastes.svg" onerror="this.src='<?= WEBSITE_URL; ?>/assets/img/logos/revista-contrastes.png'; this.onerror=null;">
                        </figure>
                        <p>La revista referente en conocimiento acerca de fotografía en toda America Latina. Incluida en la suscripción.</p>
                      </div>
                      <div class="col-xs-12 col-lg-5 col-lg-offset-1">
                        <figure class="concept__logo">
                          <img src="<?= WEBSITE_URL; ?>/assets/img/logos/blog-contrastes.svg" onerror="this.src='<?= WEBSITE_URL; ?>/assets/img/logos/blog-contrastes.png'; this.onerror=null;">
                        </figure>
                        <p>Acceso ilimitado a todo el contenido premium sobre entrevistas, safaris fotografícos y más.</p>
                      </div>
                    </div>
                  </article>
                  <article class="concept__content">
                    <div class="row">
                      <div class="col-xs-12 col-lg-5">
                        <figure class="concept__logo">
                          <img src="<?= WEBSITE_URL; ?>/assets/img/logos/academia-contrastes.svg" onerror="this.src='<?= WEBSITE_URL; ?>/assets/img/logos/academia-contrastes.png'; this.onerror=null;">
                        </figure>
                        <p>12 Carreras planificadas con más de 150 cursos diferentes para que te conviertas en profesional.</p>
                      </div>
                      <div class="col-xs-12 col-lg-5 col-lg-offset-1">
                        <figure class="concept__logo">
                          <img src="<?= WEBSITE_URL; ?>/assets/img/logos/lecciones-contrastes.svg" onerror="this.src='<?= WEBSITE_URL; ?>/assets/img/logos/lecciones-contrastes.png'; this.onerror=null;">
                        </figure>
                        <p>La aplicación con inteligencia artificial que te ayudará a aprender de tus errores en el día a día.</p>
                      </div>
                    </div>
                  </article>
                </section>
                <section class="concept-carousel__cell concept-carousel__cell--practica">
                  <article class="concept__content">
                    <div class="row">
                      <div class="col-xs-12 col-lg-5">
                        <figure class="concept__logo">
                          <img src="<?= WEBSITE_URL; ?>/assets/img/logos/desafios-contrastes.svg" onerror="this.src='<?= WEBSITE_URL; ?>/assets/img/logos/desafios-contrastes.png'; this.onerror=null;">
                        </figure>
                        <p>Te planteamos desafios en los cursos que tomes, te evalúa la comunidad. ¡Practicar es lo más importante!</p>
                      </div>
                      <div class="col-xs-12 col-lg-5 col-lg-offset-1">
                        <figure class="concept__logo">
                          <img src="<?= WEBSITE_URL; ?>/assets/img/logos/fotografia-contrastes.svg" onerror="this.src='<?= WEBSITE_URL; ?>/assets/img/logos/fotografia-contrastes.png'; this.onerror=null;">
                        </figure>
                        <p>Tu portfolio profesional en la comunidad más prestigiosa de latinoamerica. ¡Exponete!</p>
                      </div>
                    </div>
                  </article>
                </section>
                <section class="concept-carousel__cell concept-carousel__cell--expone">
                  <article class="concept__content">
                    <div class="row">
                      <div class="col-xs-12 col-lg-5">
                        <h2>Probá gratis 1 mes, sin tarjetas de credito</h2>
                      </div>
                    </div>
                  </article>
                  <article class="concept__content">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="suscribe-free__container">
                          <div class="input__suscribe">
                            <input type="text" placeholder="Ingresa tu email">
                          </div>
                          <div class="button__suscribe">
                            <a hreaf="<?= WEBSITE_URL; ?>/perfil/registro" class="btn btn__filled--blue" name="button">Probar gratis</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </section>
              </div>
            </div>
          </div>
        </article>
      </section>
      <section class="desafios__container">
        <div class="header__section">
            <article class="section__title">
                <h2>Desafíos Contrastes</h2>
                <p>¡Ganá una suscripción mensual!</p>
            </article>
            <article class="section__show-more">
                <a href="<?= WEBSITE_URL; ?>/perfil/registro" class="font--small">Participar</a>
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
                      <img src="<? WEBSITE_URL; ?>/assets/img/sections/home/contrastes-mensuales-1.jpg" alt="">
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
                      <img src="<? WEBSITE_URL; ?>/assets/img/sections/home/contrastes-mensuales-2.jpg" alt="">
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
                      <img src="<? WEBSITE_URL; ?>/assets/img/sections/home/contrastes-mensuales-3.jpg" alt="">
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
                      <img src="<? WEBSITE_URL; ?>/assets/img/sections/home/contrastes-iluminacion-1.jpg" alt="">
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
                      <img src="<? WEBSITE_URL; ?>/assets/img/sections/home/contrastes-iluminacion-2.jpg" alt="">
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
                      <img src="<? WEBSITE_URL; ?>/assets/img/sections/home/contrastes-iluminacion-3.jpg" alt="">
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
                      <img src="<? WEBSITE_URL; ?>/assets/img/sections/home/contrastes-retrato-1.jpg" alt="">
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
                      <img src="<? WEBSITE_URL; ?>/assets/img/sections/home/contrastes-retrato-2.jpg" alt="">
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
                      <img src="<? WEBSITE_URL; ?>/assets/img/sections/home/contrastes-retrato-3.jpg" alt="">
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
                      <img src="<? WEBSITE_URL; ?>/assets/img/sections/home/contrastes-paisajes-1.jpg" alt="">
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
                      <img src="<? WEBSITE_URL; ?>/assets/img/sections/home/contrastes-paisajes-2.jpg" alt="">
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
                      <img src="<? WEBSITE_URL; ?>/assets/img/sections/home/contrastes-paisajes-3.jpg" alt="">
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
      <section class="news__container">
        <div class="row">
          <div class="col-xs-12 col-lg-8">
            <a href="<?= WEBSITE_URL; ?>/revista/nota">
              <article class="news__highlight">
                <div class="highlight__overlay"></div>
                <div class="highlight__title">
                  <h1>ZY Optics da a conocer una lente super macro</h1>
                  <p>El fabricante anunció el desarrollo de un objetivo macro de bajo costo, pero con gran poder de magnificación.</p>
                  <p class="font--small"><small>08 SEP 2018</small> Juán Perez | Lentes, Novedades</p>
                </div>
              </article>
            </a>
          </div>
          <div class="col-xs-12 col-lg-4 first-xs last-lg">
            <section class="header__section space__normal--b">
              <article class="section__title">
                  <h2>Novedades</h2>
              </article>
              <article class="section__show-more">
                  <a href="<?= WEBSITE_URL; ?>/revista" class="font--small">Ver más</a>
              </article>
            </section>
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
    </div>
</main>

<? include_footer(); ?>
<!-- Scripts -->
<script src="<?= WEBSITE_URL; ?>/assets/js/flickity.min.js" type="text/javascript"></script>
<script src="<?= WEBSITE_URL; ?>/assets/js/sections/home.js" type="text/javascript"></script>
<!-- END: Scripts -->
</body>
</html>
