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
    <section class="profile__preview">
      <figure class="profile__pìcture--big">
        <img src="<?= WEBSITE_URL; ?>/assets/img/sections/dashboard/profile-120x120.jpg">
      </figure>
      <article class="profile-statistics__container">
        <div class="profile__name">
          <h1>Camila Fernández</h1>
          <p class="font--bold">Amateur</p>
        </div>
        <div class="profile__statistics">
          <div class="statistics__teoria">
            <small>cursos tomados</small>
            <p class="font--bold font--big">22</p>
          </div>
          <div class="statistics__practica">
            <small>fotografías</small>
            <p class="font--bold font--big">153</p>
          </div>
          <div class="statistics__practica">
            <small>desafios</small>
            <p class="font--bold font--big">62</p>
          </div>
          <div class="statistics__exposicion">
            <small>visitas</small>
            <p class="font--bold font--big">62.5k</p>
          </div>
          <div class="statistics__exposicion">
            <small>descargas</small>
            <p class="font--bold font--big">1.2k</p>
          </div>
        </div>
      </article>
    </section>
    <section class="dashboard__table">
      <div class="row">
        <div class="col-lg-6">
          <div class="table__container">
            <article class="table__header">
              <div class="table__title">
                <h5 class="font--bold">Continuá aprendiendo</h5>
              </div>
              <div class="table__more">
                <small>ver más</small>
              </div>
            </article>
            <div class="course-continue__playlist">
              <ul class="playlist__container">
                <li class="course__container">

                    <div class="class__category">
                      <small>iluminación</small>
                      <small>22 Min. restantes</small>
                    </div>
                    <div class="class__name">
                      <p class="font--bold">Introducción a la iluminación</p>
                      <span class="class__icon"><i class="fas fa-play"></i></span>
                    </div>

                </li>
                <li class="course__container">
                  <div class="class__category">
                    <small>iluminación</small>
                    <small>22 Min. restantes</small>
                  </div>
                  <div class="class__name">
                    <p class="font--bold">Introducción a la iluminación</p>
                    <span class="class__icon"><i class="fas fa-play"></i></span>
                  </div>
                </li>
                <li class="course__container">
                  <div class="class__category">
                    <small>iluminación</small>
                    <small>22 Min. restantes</small>
                  </div>
                  <div class="class__name">
                    <p class="font--bold">Introducción a la iluminación</p>
                    <span class="class__icon"><i class="fas fa-play"></i></span>
                  </div>
                </li>
                <li class="course__container">
                  <div class="class__category">
                    <small>iluminación</small>
                    <small>22 Min. restantes</small>
                  </div>
                  <div class="class__name">
                    <p class="font--bold">Introducción a la iluminación</p>
                    <span class="class__icon"><i class="fas fa-play"></i></span>
                  </div>
                </li>
                <li class="course__container">
                  <div class="class__category">
                    <small>iluminación</small>
                    <small>22 Min. restantes</small>
                  </div>
                  <div class="class__name">
                    <p class="font--bold">Introducción a la iluminación</p>
                    <span class="class__icon"><i class="fas fa-play"></i></span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="table__container">
            <div class="table__title">
              <h5 class="font--bold">Tus fotografías</h5>
            </div>
            <div class="dashboard-graph__container">
              <svg width="" height="258" viewBox="0 0 533 258" fill="none" xmlns="http://www.w3.org/2000/svg">
              <line y1="-0.5" x2="220.661" y2="-0.5" transform="matrix(0.00552678 -0.999985 1 0 7.32922 220.657)" stroke="#E0E0E0" stroke-dasharray="2 5"/>
              <line y1="-0.5" x2="220.661" y2="-0.5" transform="matrix(0.00595109 -0.999982 1 0 94.2386 220.657)" stroke="#E0E0E0" stroke-dasharray="2 5"/>
              <line y1="-0.5" x2="220.661" y2="-0.5" transform="matrix(0.00595081 -0.999982 1 0 181.148 220.657)" stroke="#E0E0E0" stroke-dasharray="2 5"/>
              <line y1="-0.5" x2="220.661" y2="-0.5" transform="matrix(0.00595081 -0.999982 1 0 268.058 220.657)" stroke="#E0E0E0" stroke-dasharray="2 5"/>
              <line y1="-0.5" x2="220.661" y2="-0.5" transform="matrix(0.00595081 -0.999982 1 0 354.967 220.657)" stroke="#E0E0E0" stroke-dasharray="2 5"/>
              <line y1="-0.5" x2="220.661" y2="-0.5" transform="matrix(0.00595081 -0.999982 1 0 441.877 220.657)" stroke="#E0E0E0" stroke-dasharray="2 5"/>
              <line y1="-0.5" x2="220.661" y2="-0.5" transform="matrix(0.00595081 -0.999982 1 0 528.787 220.657)" stroke="#E0E0E0" stroke-dasharray="2 5"/>
              <path d="M4.03147 243.21C4.77147 243.21 5.32813 243.507 5.70147 244.1C6.08147 244.687 6.27147 245.54 6.27147 246.66C6.27147 247.78 6.08147 248.637 5.70147 249.23C5.32813 249.823 4.77147 250.12 4.03147 250.12C3.29147 250.12 2.73147 249.823 2.35147 249.23C1.97813 248.637 1.79147 247.78 1.79147 246.66C1.79147 245.54 1.97813 244.687 2.35147 244.1C2.73147 243.507 3.29147 243.21 4.03147 243.21ZM4.03147 243.94C3.59813 243.94 3.2748 244.153 3.06147 244.58C2.8548 245.007 2.75147 245.7 2.75147 246.66C2.75147 247.62 2.8548 248.317 3.06147 248.75C3.2748 249.177 3.59813 249.39 4.03147 249.39C4.45813 249.39 4.77813 249.177 4.99147 248.75C5.2048 248.317 5.31147 247.62 5.31147 246.66C5.31147 245.707 5.2048 245.017 4.99147 244.59C4.77813 244.157 4.45813 243.94 4.03147 243.94ZM9.89764 245.6C10.2376 245.6 10.5476 245.68 10.8276 245.84C11.1076 246 11.331 246.24 11.4976 246.56C11.6643 246.88 11.7476 247.27 11.7476 247.73C11.7476 248.203 11.651 248.623 11.4576 248.99C11.271 249.35 11.0143 249.63 10.6876 249.83C10.3676 250.023 10.011 250.12 9.61764 250.12C8.83764 250.12 8.26764 249.833 7.90764 249.26C7.54764 248.68 7.36764 247.88 7.36764 246.86C7.36764 246.133 7.46764 245.497 7.66764 244.95C7.8743 244.397 8.16764 243.97 8.54764 243.67C8.92764 243.363 9.37764 243.21 9.89764 243.21C10.4043 243.21 10.8643 243.347 11.2776 243.62L10.9176 244.23C10.6043 244.037 10.261 243.94 9.88764 243.94C9.40764 243.94 9.02764 244.17 8.74764 244.63C8.46764 245.09 8.3143 245.707 8.28764 246.48C8.70097 245.893 9.23764 245.6 9.89764 245.6ZM9.61764 249.39C10.0043 249.39 10.301 249.243 10.5076 248.95C10.7143 248.657 10.8176 248.26 10.8176 247.76C10.8176 246.807 10.4576 246.33 9.73764 246.33C9.4443 246.33 9.1743 246.413 8.92764 246.58C8.68097 246.74 8.47097 246.963 8.29764 247.25C8.31764 247.983 8.43097 248.523 8.63764 248.87C8.85097 249.217 9.17764 249.39 9.61764 249.39Z" fill="#828282"/>
              <path d="M91.9897 243.236C92.7297 243.236 93.2863 243.533 93.6597 244.126C94.0397 244.713 94.2297 245.566 94.2297 246.686C94.2297 247.806 94.0397 248.663 93.6597 249.256C93.2863 249.85 92.7297 250.146 91.9897 250.146C91.2497 250.146 90.6897 249.85 90.3097 249.256C89.9363 248.663 89.7497 247.806 89.7497 246.686C89.7497 245.566 89.9363 244.713 90.3097 244.126C90.6897 243.533 91.2497 243.236 91.9897 243.236ZM91.9897 243.966C91.5563 243.966 91.233 244.18 91.0197 244.606C90.813 245.033 90.7097 245.726 90.7097 246.686C90.7097 247.646 90.813 248.343 91.0197 248.776C91.233 249.203 91.5563 249.416 91.9897 249.416C92.4163 249.416 92.7363 249.203 92.9497 248.776C93.163 248.343 93.2697 247.646 93.2697 246.686C93.2697 245.733 93.163 245.043 92.9497 244.616C92.7363 244.183 92.4163 243.966 91.9897 243.966ZM98.7205 243.336V244.026L96.2205 250.126L95.3805 249.846L97.7905 244.086H94.8305V243.336H98.7205Z" fill="#828282"/>
              <path d="M178.776 243.236C179.516 243.236 180.073 243.533 180.446 244.126C180.826 244.713 181.016 245.566 181.016 246.686C181.016 247.806 180.826 248.663 180.446 249.256C180.073 249.85 179.516 250.146 178.776 250.146C178.036 250.146 177.476 249.85 177.096 249.256C176.723 248.663 176.536 247.806 176.536 246.686C176.536 245.566 176.723 244.713 177.096 244.126C177.476 243.533 178.036 243.236 178.776 243.236ZM178.776 243.966C178.343 243.966 178.02 244.18 177.806 244.606C177.6 245.033 177.496 245.726 177.496 246.686C177.496 247.646 177.6 248.343 177.806 248.776C178.02 249.203 178.343 249.416 178.776 249.416C179.203 249.416 179.523 249.203 179.736 248.776C179.95 248.343 180.056 247.646 180.056 246.686C180.056 245.733 179.95 245.043 179.736 244.616C179.523 244.183 179.203 243.966 178.776 243.966ZM185.213 246.436C186.153 246.816 186.623 247.416 186.623 248.236C186.623 248.603 186.523 248.933 186.323 249.226C186.129 249.513 185.856 249.74 185.503 249.906C185.149 250.066 184.749 250.146 184.303 250.146C183.849 250.146 183.449 250.066 183.103 249.906C182.756 249.746 182.486 249.523 182.293 249.236C182.106 248.95 182.013 248.623 182.013 248.256C182.013 247.843 182.123 247.496 182.343 247.216C182.569 246.936 182.899 246.703 183.333 246.516C182.979 246.336 182.716 246.12 182.543 245.866C182.376 245.606 182.293 245.303 182.293 244.956C182.293 244.596 182.386 244.286 182.573 244.026C182.766 243.766 183.016 243.57 183.323 243.436C183.636 243.303 183.969 243.236 184.323 243.236C184.669 243.236 184.996 243.3 185.303 243.426C185.616 243.553 185.869 243.746 186.063 244.006C186.256 244.26 186.353 244.566 186.353 244.926C186.353 245.26 186.259 245.546 186.073 245.786C185.886 246.026 185.599 246.243 185.213 246.436ZM184.323 243.926C183.976 243.926 183.699 244.016 183.493 244.196C183.293 244.376 183.193 244.633 183.193 244.966C183.193 245.286 183.289 245.53 183.483 245.696C183.683 245.863 183.999 246.016 184.433 246.156L184.603 246.216C184.903 246.043 185.119 245.86 185.253 245.666C185.386 245.473 185.453 245.236 185.453 244.956C185.453 244.643 185.353 244.393 185.153 244.206C184.959 244.02 184.683 243.926 184.323 243.926ZM184.313 249.416C184.726 249.416 185.053 249.31 185.293 249.096C185.539 248.883 185.663 248.6 185.663 248.246C185.663 248.006 185.616 247.806 185.523 247.646C185.429 247.48 185.279 247.336 185.073 247.216C184.866 247.09 184.576 246.963 184.203 246.836L183.953 246.746C183.619 246.906 183.373 247.11 183.213 247.356C183.053 247.596 182.973 247.896 182.973 248.256C182.973 248.623 183.093 248.91 183.333 249.116C183.573 249.316 183.899 249.416 184.313 249.416Z" fill="#828282"/>
              <path d="M266.369 243.236C267.109 243.236 267.665 243.533 268.039 244.126C268.419 244.713 268.609 245.566 268.609 246.686C268.609 247.806 268.419 248.663 268.039 249.256C267.665 249.85 267.109 250.146 266.369 250.146C265.629 250.146 265.069 249.85 264.689 249.256C264.315 248.663 264.129 247.806 264.129 246.686C264.129 245.566 264.315 244.713 264.689 244.126C265.069 243.533 265.629 243.236 266.369 243.236ZM266.369 243.966C265.935 243.966 265.612 244.18 265.399 244.606C265.192 245.033 265.089 245.726 265.089 246.686C265.089 247.646 265.192 248.343 265.399 248.776C265.612 249.203 265.935 249.416 266.369 249.416C266.795 249.416 267.115 249.203 267.329 248.776C267.542 248.343 267.649 247.646 267.649 246.686C267.649 245.733 267.542 245.043 267.329 244.616C267.115 244.183 266.795 243.966 266.369 243.966ZM271.647 243.236C272.354 243.236 272.89 243.47 273.257 243.936C273.624 244.396 273.807 245.03 273.807 245.836C273.807 246.75 273.684 247.486 273.437 248.046C273.19 248.6 272.814 249.043 272.307 249.376C271.8 249.703 271.114 249.993 270.247 250.246L270.037 249.556C270.93 249.303 271.614 248.96 272.087 248.526C272.567 248.093 272.824 247.516 272.857 246.796C272.704 247.036 272.497 247.23 272.237 247.376C271.977 247.523 271.684 247.596 271.357 247.596C271.01 247.596 270.697 247.51 270.417 247.336C270.137 247.156 269.914 246.906 269.747 246.586C269.587 246.26 269.507 245.88 269.507 245.446C269.507 244.993 269.604 244.6 269.797 244.266C269.99 243.933 270.247 243.68 270.567 243.506C270.894 243.326 271.254 243.236 271.647 243.236ZM271.547 246.876C272.074 246.876 272.517 246.6 272.877 246.046C272.89 245.306 272.797 244.776 272.597 244.456C272.404 244.13 272.094 243.966 271.667 243.966C271.274 243.966 270.97 244.096 270.757 244.356C270.544 244.616 270.437 244.986 270.437 245.466C270.437 245.933 270.537 246.286 270.737 246.526C270.937 246.76 271.207 246.876 271.547 246.876Z" fill="#828282"/>
              <path d="M354.64 243.336V250.026H353.72V244.316L352.16 245.266L351.76 244.616L353.83 243.336H354.64ZM358.526 243.236C359.266 243.236 359.823 243.533 360.196 244.126C360.576 244.713 360.766 245.566 360.766 246.686C360.766 247.806 360.576 248.663 360.196 249.256C359.823 249.85 359.266 250.146 358.526 250.146C357.786 250.146 357.226 249.85 356.846 249.256C356.473 248.663 356.286 247.806 356.286 246.686C356.286 245.566 356.473 244.713 356.846 244.126C357.226 243.533 357.786 243.236 358.526 243.236ZM358.526 243.966C358.093 243.966 357.77 244.18 357.556 244.606C357.35 245.033 357.246 245.726 357.246 246.686C357.246 247.646 357.35 248.343 357.556 248.776C357.77 249.203 358.093 249.416 358.526 249.416C358.953 249.416 359.273 249.203 359.486 248.776C359.7 248.343 359.806 247.646 359.806 246.686C359.806 245.733 359.7 245.043 359.486 244.616C359.273 244.183 358.953 243.966 358.526 243.966Z" fill="#828282"/>
              <path d="M442.75 243.336V250.026H441.83V244.316L440.27 245.266L439.87 244.616L441.94 243.336H442.75ZM446.939 243.336V250.026H446.019V244.316L444.459 245.266L444.059 244.616L446.129 243.336H446.939Z" fill="#828282"/>
              <path d="M526.423 243.31V250H525.503V244.29L523.943 245.24L523.543 244.59L525.613 243.31H526.423ZM529.799 243.21C530.199 243.21 530.549 243.29 530.849 243.45C531.156 243.61 531.393 243.83 531.559 244.11C531.726 244.383 531.809 244.693 531.809 245.04C531.809 245.447 531.716 245.837 531.529 246.21C531.349 246.583 531.069 246.987 530.689 247.42C530.309 247.853 529.733 248.457 528.959 249.23H531.969L531.859 250H527.909V249.27C528.803 248.343 529.436 247.667 529.809 247.24C530.183 246.807 530.449 246.43 530.609 246.11C530.769 245.79 530.849 245.447 530.849 245.08C530.849 244.733 530.749 244.463 530.549 244.27C530.349 244.07 530.083 243.97 529.749 243.97C529.476 243.97 529.236 244.027 529.029 244.14C528.823 244.253 528.603 244.44 528.369 244.7L527.769 244.22C528.043 243.88 528.346 243.627 528.679 243.46C529.013 243.293 529.386 243.21 529.799 243.21Z" fill="#828282"/>
              <path d="M9.10278 130.697L94.2388 89.9601L180.262 75.8154L266.284 87.1312L354.968 101.842L439.217 106.368L529.674 120.513" stroke="#FFB07C"/>
              <path d="M6.44226 157.289L93.3519 136.355L181.148 48.6582L266.284 74.6844L351.42 136.355L438.33 129L528.787 110.329" stroke="#00B0F2"/>
              </svg>
            </div>

          </div>
        </div>
      </div>
    </section>
    <section class="mis-desafios__container">
      <div class="header__section">
          <article class="section__title">
              <h2>Mis desafíos</h2>
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
    </section>
  </div>
</main>
<? include_dashboard_footer(); ?>
<!-- Scripts -->
<script src="<?= WEBSITE_URL; ?>/assets/js/flickity.min.js" type="text/javascript"></script>
<script src="<?= WEBSITE_URL; ?>/assets/js/sections/dashboard.js" type="text/javascript"></script>
<!-- END: Scripts -->
</body>
</html>
