<header class="dashboard-header__container">
  <nav class="dashboard-navbar__container">
    <div id="hamburger__container">
    		<div id='top'></div>
    		<div id='middle'></div>
    		<div id='bottom'></div>
    </div>
    <div id="aside__container">
        <figure class="brand__logo">
          <img src="https://dummyimage.com/180x45/000/fff" alt="Contrastes">
        </figure>
    		<div id="aside__menu">
          <div class="aside__item item__profile">
            <a href="<?= WEBSITE_URL; ?>/dashboard">
              <figure class="profile__picture">
                <img src="https://dummyimage.com/50x50/c7c7c7/fff">
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
          <a href="<?= WEBSITE_URL; ?>/dashboard/configuracion">
            <i class="fas fa-sign-out-alt"></i>
            <span>Cerrar sesión</span>
          </a>
        </div>
    </div>
  </nav>
</header>
