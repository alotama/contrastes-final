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
    <section class="setting__wrapper">
      <div class="header__section">
          <article class="section__title">
            <h1>Configuración</h1>
          </article>
      </div>
      <section class="setting__section">
        <article class="setting__container">
          <div class="row">
            <div class="col-xs-12 col-lg-3">
              <div class="setting__controllers">
                <div class="controller_container js-controller-selected" data-selector=".setting__card--perfil">
                  <button class="controller__item">Perfil</button>
                </div>
                <div class="controller_container" data-selector=".setting__card--notificaciones">
                  <button class="controller__item">Notificaciones</button>
                </div>
                <div class="controller_container" data-selector=".setting__card--suscripcion">
                  <button class="controller__item">Suscripción</button>
                </div>
                <div class="controller_container" data-selector=".setting__card--seguridad">
                  <button class="controller__item">Seguridad</button>
                </div>
                <div class="controller_container" data-selector=".setting__card--pagos">
                  <button class="controller__item">Pagos</button>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-lg-8 col-lg-offset-1">
              <div class="carousel">
                <div class="setting-cell setting__card--perfil">
                  <article class="setting__content">
                    <div class="profile-picture__container">
                      <figure class="profile__picture">
                        <img src="<?= WEBSITE_URL; ?>/assets/img/sections/dashboard/profile-50x50.jpg"
                        <a href="#" class="btn"><small>cambiar</small></a>
                      </figure>
                    </div>
                    <div class="input__container">
                      <label for="card-name">Nombre</label>
                      <input type="text" id="card-name" class="input__item" value="">
                    </div>
                    <div class="input__container">
                      <label for="last-name">Apellido</label>
                      <input type="text" id="last-name" class="input__item" value="">
                    </div>
                    <div class="input__container">
                      <label for="user-contrastes">Usuario Contrastes</label>
                      <input type="text" id="user-contrastes" class="input__item" value="">
                    </div>
                    <div class="input__container">
                      <label for="user-instagram">Usuario Instagram</label>
                      <input type="text" id="user-instagram" class="input__item" value="">
                    </div>
                    <div class="input__container">
                      <label for="email">Correo electrónico</label>
                      <input type="text" id="email" class="input__item" value="">
                    </div>
                    <div class="input__container">
                      <label for="country">Ubicación</label>
                      <input type="text" id="country" class="input__item" value="">
                    </div>
                    <div class="textarea__container">
                      <label for="biography">Usuario Instagram</label>
                      <textarea name="biography" placeholder="Escribí una breve descripcón de ti"></textarea>
                    </div>
                    <section class="buttons__area">
                      <article class="disponibilidad__container">
                        <label for="biography">Usuario Instagram</label>
                        <button class="btn btn__filled--blue" name="disponibilidad">Si</button>
                      </article>
                      <article class="save__container">
                        <button class="btn btn__filled--blue" name="save">Guardar</button>
                      </article>
                    </section>
                  </article>
                </div>
                <div class="setting-cell setting__card--notificaciones">
                  <article class="setting__content">
                    <div class="notification__container">
                      <label for="news" class="font--bold"><small>Novedades</small></label>
                      <article class="switch-toggle__container switch--news">
                        <div class="item__container js-category-selected">
                          <button class="toggle__item" type="button">Semanal</button>
                        </div>
                        <div class="item__container">
                          <button class="toggle__item" type="button">Mensual</button>
                        </div>
                        <div class="item__container">
                          <button class="toggle__item" type="button">Desactivado</button>
                        </div>
                      </article>
                    </div>
                    <div class="notification__container">
                      <label for="news" class="font--bold"><small>Eventos</small></label>
                      <article class="switch-toggle__container switch--events">
                        <div class="item__container js-category-selected">
                          <button class="toggle__item" type="button">Si</button>
                        </div>
                        <div class="item__container">
                          <button class="toggle__item" type="button">No</button>
                        </div>
                      </article>
                    </div>
                    <div class="notification__container">
                      <label for="news" class="font--bold"><small>Me gusta</small></label>
                      <article class="switch-toggle__container switch--likes">
                        <div class="item__container js-category-selected">
                          <button class="toggle__item" type="button">Si</button>
                        </div>
                        <div class="item__container">
                          <button class="toggle__item" type="button">No</button>
                        </div>
                      </article>
                    </div>
                    <div class="notification__container">
                      <label for="news" class="font--bold"><small>Comentarios</small></label>
                      <article class="switch-toggle__container switch--comment">
                        <div class="item__container js-category-selected">
                          <button class="toggle__item" type="button">Si</button>
                        </div>
                        <div class="item__container">
                          <button class="toggle__item" type="button">No</button>
                        </div>
                      </article>
                    </div>
                    <div class="notification__container">
                      <label for="news" class="font--bold"><small>Descargas</small></label>
                      <article class="switch-toggle__container switch--download">
                        <div class="item__container js-category-selected">
                          <button class="toggle__item" type="button">Si</button>
                        </div>
                        <div class="item__container">
                          <button class="toggle__item" type="button">No</button>
                        </div>
                      </article>
                    </div>
                    <div class="notification__container">
                      <label for="news" class="font--bold"><small>Nuevos cursos</small></label>
                      <article class="switch-toggle__container switch--course">
                        <div class="item__container js-category-selected">
                          <button class="toggle__item" type="button">Si</button>
                        </div>
                        <div class="item__container">
                          <button class="toggle__item" type="button">No</button>
                        </div>
                      </article>
                    </div>
                    <div class="notification__button">
                      <button class="btn btn__filled--blue" name="button">Guardar</button>
                    </div>
                  </article>
                </div>
                <div class="setting-cell setting__card--suscripcion">
                  <div class="setting__content">
                    <div class="suscription-status__container">
                      <div class="notification__container">
                        <label for="news" class="font--bold"><small>Suscripción</small></label>
                        <article class="switch-toggle__container switch--suscription">
                          <div class="item__container js-category-selected">
                            <button class="toggle__item" type="button">Básica</button>
                          </div>
                          <div class="item__container">
                            <button class="toggle__item" type="button">Premium</button>
                          </div>
                          <div class="item__container">
                            <button class="toggle__item" type="button">Desactivada</button>
                          </div>
                        </article>
                      </div>
                      <div class="notification__container">
                        <label for="news" class="font--bold"><small>Plan conjunto</small></label>
                        <article class="switch-toggle__container switch--conjunto">
                          <div class="item__container js-category-selected">
                            <button class="toggle__item" type="button">Si</button>
                          </div>
                          <div class="item__container">
                            <button class="toggle__item" type="button">No</button>
                          </div>
                        </article>
                      </div>
                    </div>
                    <div class="account__linked">
                      <label for="news" class="font--bold"><small>cuentas vinculadas</small></label>
                      <div class="account-linked__input">
                        <span class="btn btn__filled--white emails">aldobodoni@gmail.com</span> <span class="btn btn__filled--white emails">carlosmex@gmail.com</span>
                      </div>
                    </div>
                    <article class="suscription__data">
                      <div class="input__container">
                        <label for="card-name">Dirección de entrega</label>
                        <input type="text" id="card-name" class="input__item" value="">
                      </div>
                      <div class="input__container">
                        <label for="last-name">Piso, Dpto.</label>
                        <input type="text" id="last-name" class="input__item" value="">
                      </div>
                      <div class="input__container">
                        <label for="user-contrastes">Localidad</label>
                        <input type="text" id="user-contrastes" class="input__item" value="">
                      </div>
                      <div class="input__container">
                        <label for="user-instagram">Provincia</label>
                        <input type="text" id="user-instagram" class="input__item" value="">
                      </div>
                      <div class="input__container">
                        <label for="email">País</label>
                        <input type="text" id="email" class="input__item" value="">
                      </div>
                      <div class="input__container">
                        <label for="country">Código Postal</label>
                        <input type="text" id="country" class="input__item" value="">
                      </div>
                      <section class="buttons__area">
                        <article class="save__container">
                          <button class="btn btn__filled--blue" name="save">Guardar</button>
                        </article>
                      </section>
                    </article>
                  </div>
                </div>
                <div class="setting-cell setting__card--seguridad">
                  <div class="setting__content">
                    <section class="security__container">
                      <div class="input__container">
                        <label for="user-contrastes">Cambio de contraseña</label>
                        <input type="text" id="user-contrastes" class="input__item" value="">
                      </div>
                      <div class="input__container">
                        <input type="text" id="user-contrastes" class="input__item" value="">
                      </div>
                      <section class="buttons__area">
                        <article class="save__container">
                          <button class="btn btn__filled--blue" name="save">Guardar</button>
                        </article>
                      </section>
                    </section>
                  </div>
                </div>
                <div class="setting-cell setting__card--pagos">
                  <div class="setting__content">
                    <div class="row">
                      <div class="col-xs-12 col-lg-7">
                        <div class="notification__container">
                          <label for="news" class="font--bold"><small>Forma de pago</small></label>
                          <article class="switch-toggle__container switch--pago">
                            <div class="item__container js-category-selected">
                              <button class="toggle__item" type="button">Tarjeta</button>
                            </div>
                            <div class="item__container">
                              <button class="toggle__item" type="button">Mercadopago</button>
                            </div>
                            <div class="item__container">
                              <button class="toggle__item" type="button">PayPal</button>
                            </div>
                          </article>
                        </div>
                        <div class="card__data">
                          <div class="input__container--full">
                            <label for="user-contrastes">Nombre del titular</label>
                            <input type="text" id="user-contrastes" class="input__item" value="">
                          </div>
                          <div class="input__container">
                            <label for="user-contrastes">Número de tarjeta</label>
                            <input type="text" id="user-contrastes" class="input__item" value="">
                          </div>
                          <div class="input__container">
                            <label for="user-contrastes">Número de CVV</label>
                            <input type="text" id="user-contrastes" class="input__item" value="">
                          </div>
                          <div class="input__container">
                            <label for="user-contrastes">Mes de vencimiento</label>
                            <input type="text" id="user-contrastes" class="input__item" value="">
                          </div>
                          <div class="input__container">
                            <label for="user-contrastes">Año de vencimiento</label>
                            <input type="text" id="user-contrastes" class="input__item" value="">
                          </div>
                          <section class="buttons__area">
                            <article class="save__container">
                              <button class="btn btn__filled--blue" name="save">Guardar</button>
                            </article>
                          </section>
                        </div>
                      </div>
                      <div class="col-xs-12 col-lg-4 col-lg-offset-1">
                        <label for="news" class="font--bold color--primary"><small>Tus facturas</small></label>
                        <ul class="factura__container">
                          <li class="factura__item">
                            <div class="factura__name">
                              <small>14/08/2018  $800,00</small>
                              <p>Factura #14093018</p>
                            </div>
                            <span class="download__factura">
                              <i class="fas fa-download"></i>
                            </span>
                          </li>
                          <li class="factura__item">
                            <div class="factura__name">
                              <small>14/08/2018  $800,00</small>
                              <p>Factura #14093018</p>
                            </div>
                            <span class="download__factura">
                              <i class="fas fa-download"></i>
                            </span>
                          </li>
                          <li class="factura__item">
                            <div class="factura__name">
                              <small>14/08/2018  $800,00</small>
                              <p>Factura #14093018</p>
                            </div>
                            <span class="download__factura">
                              <i class="fas fa-download"></i>
                            </span>
                          </li>
                          <li class="factura__item">
                            <div class="factura__name">
                              <small>14/08/2018  $800,00</small>
                              <p>Factura #14093018</p>
                            </div>
                            <span class="download__factura">
                              <i class="fas fa-download"></i>
                            </span>
                          </li>
                          <li class="factura__item">
                            <div class="factura__name">
                              <small>14/08/2018  $800,00</small>
                              <p>Factura #14093018</p>
                            </div>
                            <span class="download__factura">
                              <i class="fas fa-download"></i>
                            </span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
      </section>
    </section>
  </div>
</main>
<? include_dashboard_footer(); ?>
<!-- Scripts -->
<script src="<?= WEBSITE_URL; ?>/assets/js/flickity.min.js" type="text/javascript"></script>
<script src="<?= WEBSITE_URL; ?>/assets/js/sections/configuracion.js" type="text/javascript"></script>
<!-- END: Scripts -->
</body>
</html>
