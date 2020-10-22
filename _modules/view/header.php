<header class="header__container">
  <div class="master-container">
    <div class="master-container-padding">
      <nav class="navbar__container">
        <section class="header__side--left">
          <div class="fit-content header__brand">
            <a href="<?= WEBSITE_URL ?>/">
              <?= include_logo() ?>
            </a>
          </div>
          <div role="button" class="navbar__hamburger" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </div>
          <div class="navbar__content">
            <ul class="navbar__menu">
              <li class="navbar__item"><a href="<?= WEBSITE_URL; ?>">Academia</a></li>
              <li class="navbar__item"><a href="<?= WEBSITE_URL; ?>/revista">Revista</a></li>
              <li class="navbar__item"><a href="<?= WEBSITE_URL; ?>/fotografia">Fotografía</a></li>
              <li class="navbar__item"><a href="<?= WEBSITE_URL; ?>/suscripcion">Suscripciones</a></li>
            </ul>
          </div>
        </section>
        <section class="header__side--right">
          <article class="header__buttons">
            <ul class="login__container">
              <li class="btn"><a href="<?= WEBSITE_URL; ?>/perfil/login">Ingresar</a></li>
              <li class="btn btn__filled--blue"><a href="<?= WEBSITE_URL; ?>/perfil/registro">Probar gratis</a></li>
            </ul>
          </article>
        </section>
      </nav>
    </div>
  </div>
</header>
<div class="page-wrapper">
