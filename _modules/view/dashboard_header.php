<header class="dashboard-header__container">
  <nav class="dashboard-navbar__container">
    <div id="hamburger__container">
    		<div id='top'></div>
    		<div id='middle'></div>
    		<div id='bottom'></div>
    </div>
    <div id="aside__container">
        <figure class="brand__logo">
          <?= include_logo() ?>
        </figure>
    		<div id="aside__menu">
          <div class="aside__item item__profile">
            <a href="<?= WEBSITE_URL; ?>/dashboard">
              <figure class="profile__picture">
                <img src="<?= WEBSITE_URL; ?>/assets/img/sections/dashboard/profile-50x50.jpg">
              </figure>
              <span class="font--bold">Camila Fernández</span>
            </a>
          </div>
  				<div class="aside__item">
            <a href="<?= WEBSITE_URL; ?>/dashboard/mis-cursos">
              <i class="fas fa-graduation-cap"></i>
              <span>Mis cursos</span>
            </a>
          </div>
          <div class="aside__item">
            <a href="<?= WEBSITE_URL; ?>/dashboard/desafios">
              <i class="fas fa-trophy"></i>
              <span>Desafios</span>
            </a>
          </div>
  				<div class="aside__item">
            <a href="<?= WEBSITE_URL; ?>/dashboard/fotografias">
              <i class="fas fa-camera"></i>
              <span>Fotografías</span>
            </a>
          </div>
  				<div class="aside__item">
            <a href="<?= WEBSITE_URL; ?>/dashboard/configuracion">
              <i class="fas fa-cog"></i>
              <span>Configuración</span>
            </a>
          </div>
    		</div>
        <div class="logout__button">
          <a href="<?= WEBSITE_URL; ?>/">
            <i class="fas fa-sign-out-alt"></i>
            <span>Cerrar sesión</span>
          </a>
        </div>
    </div>

    <div class="master-container">
      <div class="master-container-padding">
        <div class="navbar-center__container">
          <section class="search__container">
            <input type="search" class="dashboard-search" placeholder="Buscar curso, desafios, etc.">
            <i class="fas fa-search"></i>
          </section>
          <section class="menu__container">
            <ul class="navbar__menu">
              <li class="menu__item"><a href="<?= WEBSITE_URL; ?>">Formación</a></li>
              <li class="menu__item"><a href="<?= WEBSITE_URL; ?>/revista">Revista</a></li>
              <li class="menu__item"><a href="<?= WEBSITE_URL; ?>/fotografia">Fotografía</a></li>
            </ul>
          </section>
        </div>
      </div>
    </div>

    <section class="profile__container">
      <div class="profile__content">
        <p>Camila Fernández</p>
        <figure class="profile__picture">
          <img src="<?= WEBSITE_URL; ?>/assets/img/sections/dashboard/profile-50x50.jpg">
        </figure>
      </div>
      <div class="notification__container">
        <i class="fas fa-bell"></i>
      </div>
    </section>
  </nav>
</header>
<div class="page-wrapper">
