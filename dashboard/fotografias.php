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
    <section class="statistics__container">
      <div class="header__section">
          <article class="section__title">
            <h1>Mis fotografías</h1>
          </article>
          <article class="section__button">
            <a href="<?= WEBSITE_URL; ?>/dashboard/subir-foto/1" class="btn btn__filled--green">+ nueva fotografía</a>
          </article>
      </div>
      <section class="graph__container">
        <article class="graph__statistics">
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
        </article>
        <article class="graph__content">
          <ul class="filter__time">
            <li class="time__item btn">Todo el tiempo</li>
            <li class="time__item btn">Último mes</li>
            <li class="time__item btn btn__filled--white">Últimos 7 días</li>
            <li class="time__item btn">Hoy</li>
          </ul>
          <div class="graph__reference">
            <button class="btn btn__filled--blue">visitas</button>
            <button class="btn btn__filled--orange">me gusta</button>
            <button class="btn btn__filled--green">descargas</button>
          </div>
        </article>
        <div class="graph-photography__content">
          <svg width="1167" height="257" viewBox="0 0 1167 257" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6.8284 242.21C7.5684 242.21 8.12506 242.507 8.4984 243.1C8.8784 243.687 9.0684 244.54 9.0684 245.66C9.0684 246.78 8.8784 247.637 8.4984 248.23C8.12506 248.823 7.5684 249.12 6.8284 249.12C6.0884 249.12 5.5284 248.823 5.1484 248.23C4.77506 247.637 4.58839 246.78 4.58839 245.66C4.58839 244.54 4.77506 243.687 5.1484 243.1C5.5284 242.507 6.0884 242.21 6.8284 242.21ZM6.8284 242.94C6.39506 242.94 6.07173 243.153 5.8584 243.58C5.65173 244.007 5.5484 244.7 5.5484 245.66C5.5484 246.62 5.65173 247.317 5.8584 247.75C6.07173 248.177 6.39506 248.39 6.8284 248.39C7.25506 248.39 7.57506 248.177 7.7884 247.75C8.00173 247.317 8.10839 246.62 8.10839 245.66C8.10839 244.707 8.00173 244.017 7.7884 243.59C7.57506 243.157 7.25506 242.94 6.8284 242.94ZM12.6946 244.6C13.0346 244.6 13.3446 244.68 13.6246 244.84C13.9046 245 14.1279 245.24 14.2946 245.56C14.4612 245.88 14.5446 246.27 14.5446 246.73C14.5446 247.203 14.4479 247.623 14.2546 247.99C14.0679 248.35 13.8112 248.63 13.4846 248.83C13.1646 249.023 12.8079 249.12 12.4146 249.12C11.6346 249.12 11.0646 248.833 10.7046 248.26C10.3446 247.68 10.1646 246.88 10.1646 245.86C10.1646 245.133 10.2646 244.497 10.4646 243.95C10.6712 243.397 10.9646 242.97 11.3446 242.67C11.7246 242.363 12.1746 242.21 12.6946 242.21C13.2012 242.21 13.6612 242.347 14.0746 242.62L13.7146 243.23C13.4012 243.037 13.0579 242.94 12.6846 242.94C12.2046 242.94 11.8246 243.17 11.5446 243.63C11.2646 244.09 11.1112 244.707 11.0846 245.48C11.4979 244.893 12.0346 244.6 12.6946 244.6ZM12.4146 248.39C12.8012 248.39 13.0979 248.243 13.3046 247.95C13.5112 247.657 13.6146 247.26 13.6146 246.76C13.6146 245.807 13.2546 245.33 12.5346 245.33C12.2412 245.33 11.9712 245.413 11.7246 245.58C11.4779 245.74 11.2679 245.963 11.0946 246.25C11.1146 246.983 11.2279 247.523 11.4346 247.87C11.6479 248.217 11.9746 248.39 12.4146 248.39Z" fill="#828282"/>
          <path d="M199.2 242.236C199.94 242.236 200.497 242.533 200.87 243.126C201.25 243.713 201.44 244.566 201.44 245.686C201.44 246.806 201.25 247.663 200.87 248.256C200.497 248.85 199.94 249.146 199.2 249.146C198.46 249.146 197.9 248.85 197.52 248.256C197.147 247.663 196.96 246.806 196.96 245.686C196.96 244.566 197.147 243.713 197.52 243.126C197.9 242.533 198.46 242.236 199.2 242.236ZM199.2 242.966C198.767 242.966 198.444 243.18 198.23 243.606C198.024 244.033 197.92 244.726 197.92 245.686C197.92 246.646 198.024 247.343 198.23 247.776C198.444 248.203 198.767 248.416 199.2 248.416C199.627 248.416 199.947 248.203 200.16 247.776C200.374 247.343 200.48 246.646 200.48 245.686C200.48 244.733 200.374 244.043 200.16 243.616C199.947 243.183 199.627 242.966 199.2 242.966ZM205.931 242.336V243.026L203.431 249.126L202.591 248.846L205.001 243.086H202.041V242.336H205.931Z" fill="#828282"/>
          <path d="M391.144 242.236C391.884 242.236 392.441 242.533 392.814 243.126C393.194 243.713 393.384 244.566 393.384 245.686C393.384 246.806 393.194 247.663 392.814 248.256C392.441 248.85 391.884 249.146 391.144 249.146C390.404 249.146 389.844 248.85 389.464 248.256C389.091 247.663 388.904 246.806 388.904 245.686C388.904 244.566 389.091 243.713 389.464 243.126C389.844 242.533 390.404 242.236 391.144 242.236ZM391.144 242.966C390.711 242.966 390.387 243.18 390.174 243.606C389.967 244.033 389.864 244.726 389.864 245.686C389.864 246.646 389.967 247.343 390.174 247.776C390.387 248.203 390.711 248.416 391.144 248.416C391.571 248.416 391.891 248.203 392.104 247.776C392.317 247.343 392.424 246.646 392.424 245.686C392.424 244.733 392.317 244.043 392.104 243.616C391.891 243.183 391.571 242.966 391.144 242.966ZM397.58 245.436C398.52 245.816 398.99 246.416 398.99 247.236C398.99 247.603 398.89 247.933 398.69 248.226C398.497 248.513 398.223 248.74 397.87 248.906C397.517 249.066 397.117 249.146 396.67 249.146C396.217 249.146 395.817 249.066 395.47 248.906C395.123 248.746 394.853 248.523 394.66 248.236C394.473 247.95 394.38 247.623 394.38 247.256C394.38 246.843 394.49 246.496 394.71 246.216C394.937 245.936 395.267 245.703 395.7 245.516C395.347 245.336 395.083 245.12 394.91 244.866C394.743 244.606 394.66 244.303 394.66 243.956C394.66 243.596 394.753 243.286 394.94 243.026C395.133 242.766 395.383 242.57 395.69 242.436C396.003 242.303 396.337 242.236 396.69 242.236C397.037 242.236 397.363 242.3 397.67 242.426C397.983 242.553 398.237 242.746 398.43 243.006C398.623 243.26 398.72 243.566 398.72 243.926C398.72 244.26 398.627 244.546 398.44 244.786C398.253 245.026 397.967 245.243 397.58 245.436ZM396.69 242.926C396.343 242.926 396.067 243.016 395.86 243.196C395.66 243.376 395.56 243.633 395.56 243.966C395.56 244.286 395.657 244.53 395.85 244.696C396.05 244.863 396.367 245.016 396.8 245.156L396.97 245.216C397.27 245.043 397.487 244.86 397.62 244.666C397.753 244.473 397.82 244.236 397.82 243.956C397.82 243.643 397.72 243.393 397.52 243.206C397.327 243.02 397.05 242.926 396.69 242.926ZM396.68 248.416C397.093 248.416 397.42 248.31 397.66 248.096C397.907 247.883 398.03 247.6 398.03 247.246C398.03 247.006 397.983 246.806 397.89 246.646C397.797 246.48 397.647 246.336 397.44 246.216C397.233 246.09 396.943 245.963 396.57 245.836L396.32 245.746C395.987 245.906 395.74 246.11 395.58 246.356C395.42 246.596 395.34 246.896 395.34 247.256C395.34 247.623 395.46 247.91 395.7 248.116C395.94 248.316 396.267 248.416 396.68 248.416Z" fill="#828282"/>
          <path d="M583.893 242.236C584.633 242.236 585.19 242.533 585.563 243.126C585.943 243.713 586.133 244.566 586.133 245.686C586.133 246.806 585.943 247.663 585.563 248.256C585.19 248.85 584.633 249.146 583.893 249.146C583.153 249.146 582.593 248.85 582.213 248.256C581.84 247.663 581.653 246.806 581.653 245.686C581.653 244.566 581.84 243.713 582.213 243.126C582.593 242.533 583.153 242.236 583.893 242.236ZM583.893 242.966C583.46 242.966 583.136 243.18 582.923 243.606C582.716 244.033 582.613 244.726 582.613 245.686C582.613 246.646 582.716 247.343 582.923 247.776C583.136 248.203 583.46 248.416 583.893 248.416C584.32 248.416 584.64 248.203 584.853 247.776C585.066 247.343 585.173 246.646 585.173 245.686C585.173 244.733 585.066 244.043 584.853 243.616C584.64 243.183 584.32 242.966 583.893 242.966ZM589.171 242.236C589.878 242.236 590.415 242.47 590.781 242.936C591.148 243.396 591.331 244.03 591.331 244.836C591.331 245.75 591.208 246.486 590.961 247.046C590.715 247.6 590.338 248.043 589.831 248.376C589.325 248.703 588.638 248.993 587.771 249.246L587.561 248.556C588.455 248.303 589.138 247.96 589.611 247.526C590.091 247.093 590.348 246.516 590.381 245.796C590.228 246.036 590.021 246.23 589.761 246.376C589.501 246.523 589.208 246.596 588.881 246.596C588.535 246.596 588.221 246.51 587.941 246.336C587.661 246.156 587.438 245.906 587.271 245.586C587.111 245.26 587.031 244.88 587.031 244.446C587.031 243.993 587.128 243.6 587.321 243.266C587.515 242.933 587.771 242.68 588.091 242.506C588.418 242.326 588.778 242.236 589.171 242.236ZM589.071 245.876C589.598 245.876 590.041 245.6 590.401 245.046C590.415 244.306 590.321 243.776 590.121 243.456C589.928 243.13 589.618 242.966 589.191 242.966C588.798 242.966 588.495 243.096 588.281 243.356C588.068 243.616 587.961 243.986 587.961 244.466C587.961 244.933 588.061 245.286 588.261 245.526C588.461 245.76 588.731 245.876 589.071 245.876Z" fill="#828282"/>
          <path d="M777.321 242.336V249.026H776.401V243.316L774.841 244.266L774.441 243.616L776.511 242.336H777.321ZM781.208 242.236C781.948 242.236 782.504 242.533 782.878 243.126C783.258 243.713 783.448 244.566 783.448 245.686C783.448 246.806 783.258 247.663 782.878 248.256C782.504 248.85 781.948 249.146 781.208 249.146C780.468 249.146 779.908 248.85 779.528 248.256C779.154 247.663 778.968 246.806 778.968 245.686C778.968 244.566 779.154 243.713 779.528 243.126C779.908 242.533 780.468 242.236 781.208 242.236ZM781.208 242.966C780.774 242.966 780.451 243.18 780.238 243.606C780.031 244.033 779.928 244.726 779.928 245.686C779.928 246.646 780.031 247.343 780.238 247.776C780.451 248.203 780.774 248.416 781.208 248.416C781.634 248.416 781.954 248.203 782.168 247.776C782.381 247.343 782.488 246.646 782.488 245.686C782.488 244.733 782.381 244.043 782.168 243.616C781.954 243.183 781.634 242.966 781.208 242.966Z" fill="#828282"/>
          <path d="M970.587 242.336V249.026H969.667V243.316L968.107 244.266L967.707 243.616L969.777 242.336H970.587ZM974.777 242.336V249.026H973.857V243.316L972.297 244.266L971.897 243.616L973.967 242.336H974.777Z" fill="#828282"/>
          <path d="M1157.59 242.31V249H1156.67V243.29L1155.11 244.24L1154.71 243.59L1156.78 242.31H1157.59ZM1160.97 242.21C1161.37 242.21 1161.72 242.29 1162.02 242.45C1162.32 242.61 1162.56 242.83 1162.73 243.11C1162.89 243.383 1162.98 243.693 1162.98 244.04C1162.98 244.447 1162.88 244.837 1162.7 245.21C1162.52 245.583 1162.24 245.987 1161.86 246.42C1161.48 246.853 1160.9 247.457 1160.13 248.23H1163.14L1163.03 249H1159.08V248.27C1159.97 247.343 1160.6 246.667 1160.98 246.24C1161.35 245.807 1161.62 245.43 1161.78 245.11C1161.94 244.79 1162.02 244.447 1162.02 244.08C1162.02 243.733 1161.92 243.463 1161.72 243.27C1161.52 243.07 1161.25 242.97 1160.92 242.97C1160.64 242.97 1160.4 243.027 1160.2 243.14C1159.99 243.253 1159.77 243.44 1159.54 243.7L1158.94 243.22C1159.21 242.88 1159.51 242.627 1159.85 242.46C1160.18 242.293 1160.55 242.21 1160.97 242.21Z" fill="#828282"/>
          <path d="M9.5 130.5L201.602 88.961L391.105 74.8164L580.608 86.1321L775.972 100.843L961.568 105.369L1160.84 119.513" stroke="#FFB07C"/>
          <line x1="9.5" y1="0.5" x2="9.5" y2="219.5" stroke="#E0E0E0" stroke-linecap="round" stroke-dasharray="2 6"/>
          <line x1="201.5" y1="0.5" x2="201.5" y2="219.5" stroke="#E0E0E0" stroke-linecap="round" stroke-dasharray="2 6"/>
          <line x1="393.5" y1="0.5" x2="393.5" y2="219.5" stroke="#E0E0E0" stroke-linecap="round" stroke-dasharray="2 6"/>
          <line x1="585.5" y1="0.5" x2="585.5" y2="219.5" stroke="#E0E0E0" stroke-linecap="round" stroke-dasharray="2 6"/>
          <line x1="777.5" y1="0.5" x2="777.5" y2="219.5" stroke="#E0E0E0" stroke-linecap="round" stroke-dasharray="2 6"/>
          <line x1="969.5" y1="0.5" x2="969.5" y2="219.5" stroke="#E0E0E0" stroke-linecap="round" stroke-dasharray="2 6"/>
          <line x1="1161.5" y1="0.5" x2="1161.5" y2="219.5" stroke="#E0E0E0" stroke-linecap="round" stroke-dasharray="2 6"/>
          <path d="M11 212L120 198L200 184L306 198C333 173 387.8 121.6 391 116C394.2 110.4 421.667 51.6667 435 23L470 15L523 38L588 184L639 144L704 178L799 62L907 178L1160 212" stroke="#A0CF8A"/>
          </svg>


        </div>
      </section>
    </section>
    <section class="photos__container">
      <div class="row">
        <div class="col-xs-12 col-lg-8 last-xs first-lg">
          <div class="photo__grid">
            <div class="grid__item grid--1">
              <div class="photo__description">
                <span>
                  <i class="fas fa-heart"></i>
                  184
                </span>
                <h5>El salvaje</h5>
                <p>Estaba caminando cuando vi este perrito lastimado, le hice unas fotos y luego lo lleve al veterinario.</p>
              </div>
            </div>
            <div class="grid__item grid--2">
              <div class="photo__description">
                <span>
                  <i class="fas fa-heart"></i>
                  184
                </span>
                <h5>El salvaje</h5>
                <p>Estaba caminando cuando vi este perrito lastimado, le hice unas fotos y luego lo lleve al veterinario.</p>
              </div>
            </div>
            <div class="grid__item grid--3">
              <div class="photo__description">
                <span>
                  <i class="fas fa-heart"></i>
                  184
                </span>
                <h5>El salvaje</h5>
                <p>Estaba caminando cuando vi este perrito lastimado, le hice unas fotos y luego lo lleve al veterinario.</p>
              </div>
            </div>
            <div class="grid__item grid--4">
              <div class="photo__description">
                <span>
                  <i class="fas fa-heart"></i>
                  184
                </span>
                <h5>El salvaje</h5>
                <p>Estaba caminando cuando vi este perrito lastimado, le hice unas fotos y luego lo lleve al veterinario.</p>
              </div>
            </div>
            <div class="grid__item grid--5">
              <div class="photo__description">
                <span>
                  <i class="fas fa-heart"></i>
                  184
                </span>
                <h5>El salvaje</h5>
                <p>Estaba caminando cuando vi este perrito lastimado, le hice unas fotos y luego lo lleve al veterinario.</p>
              </div>
            </div>
            <div class="grid__item grid--6">
              <div class="photo__description">
                <span>
                  <i class="fas fa-heart"></i>
                  184
                </span>
                <h5>El salvaje</h5>
                <p>Estaba caminando cuando vi este perrito lastimado, le hice unas fotos y luego lo lleve al veterinario.</p>
              </div>
            </div>
            <div class="grid__item grid--7">
              <div class="photo__description">
                <span>
                  <i class="fas fa-heart"></i>
                  184
                </span>
                <h5>El salvaje</h5>
                <p>Estaba caminando cuando vi este perrito lastimado, le hice unas fotos y luego lo lleve al veterinario.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-lg-4">
          <aside class="tags__container">
            <div class="tags__title">
              <p class="font--bold">Tus etiquetas</p>
            </div>
            <div class="tags__content">
              <span class="btn btn__filled--white">retratos</span>
              <span class="btn btn__filled--white">paisajes</span>
              <span class="btn btn__filled--white">noche</span>
              <span class="btn btn__filled--white">larga exposición</span>
              <span class="btn btn__filled--white">playa</span>
              <span class="btn btn__filled--white">día</span>
              <span class="btn btn__filled--white">sonrisa</span>
              <span class="btn btn__filled--white">strteet photography</span>
              <span class="btn btn__filled--white">estudio</span>
              <span class="btn btn__filled--white">flash</span>
              <span class="btn btn__filled--white">analógica</span>
              <span class="btn btn__filled--white">arquitectura</span>
              <span class="btn btn__filled--white">mar</span>
              <span class="btn btn__filled--white">moda</span>
              <span class="btn btn__filled--white">giminasio</span>
              <span class="btn btn__filled--white">deporte</span>
            </div>
          </aside>
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
