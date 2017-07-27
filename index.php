<?php get_header(); ?>

<section id="fh5co-hero" class="js-fullheight" style='background-image: url(<?php echo get_template_directory_uri();?>/assets/images/tecate/bg.jpg);'
  data-next="yes">
  <div class="fh5co-overlay"></div>
  <div class="container">
    <div class="fh5co-intro js-fullheight">
      <div class="fh5co-intro-text">
        <!--
        INFO:
        Change the class to 'fh5co-right-position' or 'fh5co-center-position' to change the layout position
        Example:
        <div class="fh5co-right-position">
      -->
      <div class="fh5co-left-position">
        <h2 class="animate-box">La historia de <span class="typed-effect"></span> <br>como nunca antes se habia contado</h2>
        <p class="animate-box">
          <!-- <a href="#" class="btn btn-outline popup-vimeo btn-video"><i class="icon-play2"></i> Conoce más </a> -->
          <a href="https://www.facebook.com/tiempohermetico/" target="_blank" class="btn btn-primary">Explora las historias</a>
        </p>
      </div>
    </div>
  </div>
</div>
<div class="fh5co-learn-more animate-box">
  <a href="#" class="scroll-btn">
    <span class="text">Conoce el proyecto</span>
    <span class="arrow"><i class="icon-chevron-down"></i></span>
  </a>
</div>
</section>

<!-- END #fh5co-hero -->
<span id="acerca"></span>

<section id="fh5co-features" class="acerca">
  <div class="container">
    <div class="row text-center row-bottom-padded-md">
      <div class="col-md-8 col-md-offset-2">
        <!--<figure class="fh5co-devices animate-box">
        <img src= "<?php echo get_template_directory_uri();?>/assets/images/img_devices.png"  alt="Free HTML5 Bootstrap Template" class="img-responsive">
      </figure>
    -->
    <h2 class="fh5co-lead animate-box">Ahora tu escribes la historia</h2>
    <p class="fh5co-sub-lead animate-box">A traves de tiempo hermético tus vivencias podran formar parte de la historia colectiva de tu ciudad</p>
    <!--
    <p class="fh5co-sub-lead animate-box">Tiempo hermético es un proyecto que busca recolectar la historia colectiva
    de Tijuana, pero esta vez la historia sera contada por nosotros, sus habitantes a travez de las historias de nuestro dia a dia.</p>
  -->
</div>
</div>
<div class="row">
  <div class="col-md-4 col-sm-4 col-xs-12 animate-box">
    <div class="fh5co-feature">
      <div class="fh5co-icon">
        <i class="icon-building"></i>
      </div>
      <h3>Memoria contenida en edificios</h3>
      <p>Los edificios guardan historias que nos transformaron como personas. En lo individual y como ciudad</p>
      <!-- <p>Los edificios guardan historias nuestras, historias que marcan la historia de Tijuana y sus habitantes</p> -->
    </div>
  </div>
  <div class="col-md-4 col-sm-4 col-xs-12 animate-box">
    <div class="fh5co-feature">
      <div class="fh5co-icon">
        <i class="icon-speech-bubble"></i>
      </div>
      <h3>Modulos de grabación</h3>
      <p>Ubicados en puntos estrategicos en donde podrias narrar tus historias. Voz, video, o texto ¡Tu eliges!</p>
    </div>
  </div>
  <!--<div class="clearfix visible-sm-block"></div>-->
  <div class="col-md-4 col-sm-4 col-xs-12 animate-box">
    <div class="fh5co-feature">
      <div class="fh5co-icon">
        <i class="icon-tablet"></i>
      </div>
      <h3>Explora la ciudad</h3>
      <p>Mira tus historias y las de tu comunidad a travez de la app y vota por tus favoritas.</p>
    </div>
  </div>
  <div class="clearfix visible-sm-block"></div>
</div>
</div>
</section>
<!-- END #fh5co-features -->

<section id="fh5co-projects">
  <div class="container">
    <div class="row row-bottom-padded-md">
      <div class="col-md-6 col-md-offset-3 text-center">
        <h2 class="fh5co-lead animate-box">La historia se cuenta aqui</h2>
        <p class="fh5co-sub-lead animate-box">Reuniremos las historias de estas ciudades</p>
      </div>
    </div>
    <div class="row">

      <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
        <a href="<?php echo site_url();?>/tijuana" class="fh5co-project-item image-popup">
          <img src= "<?php echo get_template_directory_uri();?>/assets/images/tj/s2.jpg"  alt="Image" class="img-responsive">
          <div class="fh5co-text">
            <h2>Tijuana | Baja California</h2>
            <p>Una ciudad multicultural que a pesar de ser joven tiene gran riqueza historica</p>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
        <a href="<?php echo site_url();?>/tecate" class="fh5co-project-item image-popup">
          <img src= "<?php echo get_template_directory_uri();?>/assets/images/tecate/cuchuma-s.jpg"  alt="Image" class="img-responsive">
          <div class="fh5co-text">
            <h2>Tecate | Baja California</h2>
            <p>Pueblo Mágico, famoso por su gastronomía </p>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-6 col-xxs-12 animate-box coming-soon">
        <a href="#" class="fh5co-project-item image-popup">
          <img src= "<?php echo get_template_directory_uri();?>/assets/images/puebla/puebla-s.png"  alt="Image" class="img-responsive">
          <div class="fh5co-text">
            <h2>Puebla | Puebla <br> <small>(Proximamente)</small></h2>
            <p>Ciudad de los ángeles, una de las mas importantes del país </p>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>
<!-- END #fh5co-projects -->


<section id="fh5co-subscribe">
  <span id="suscribete"></span>
  <div class="container" id="mc_embed_signup">
    <h3 class="animate-box">
      <label for="email">Suscríbete a la lista de espera y enterate del lanzamiento</label>
    </h3>
    <form method="post" class="animate-box validate" action="//github.us11.list-manage.com/subscribe/post?u=1afcc2a1248b0c7b4a94c087f&amp;id=d4d8bbb519" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate><i class="fh5co-icon icon-paper-plane"></i>
      <input type="email" class="required email form-control" placeholder="Ingresa tu email" id="mce-EMAIL" name="EMAIL">
      <button class="btn btn-primary" id="mc-embedded-subscribe" name="subscribe">Suscribirme a la lista <br>de lanzamiento</button>
      <!--<input type="submit" value="Obténer mi código de invitación" class="btn btn-primary button" id="mc-embedded-subscribe" name="subscribe" >--><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px" aria-hidden="true">
        <input type="text" name="b_1afcc2a1248b0c7b4a94c087f_d4d8bbb519" tabindex="-1" value="">
      </div>
    </form>
    <br>
  </div>
  <div id="mce-responses" class="container">
    <div class="response" id="mce-error-response" style="display:none"></div>
    <div class="response" id="mce-success-response" style="display:none"></div>
  </div>
  <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
  <script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
  <!--End mc_embed_signup-->
</section>


<!-- END #fh5co-subscribe -->
<footer id="fh5co-footer">
  <div class="container">
    <div class="row row-bottom-padded-md">
      <div class="col-md-offset-3 col-md-3 col-sm-6 col-xs-6 animate-box">
        <div class="fh5co-footer-widget"><h3>Índice</h3>
          <ul class="fh5co-links">
            <li><a href="#acerca">Acerca de</a></li>
            <li><a href="#suscribete">Suscríbete</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 animate-box">
        <div class="fh5co-footer-widget">
          <h3>Redes sociales</h3>
          <ul class="fh5co-social">
            <!-- <li><a target="_blank" href="https://twitter.com/tiempohermeticotecate"><i class="icon-twitter"></i></a></li> -->
            <li><a target="_blank" href="https://www.facebook.com/tiempohermeticotecate/"><i class="icon-facebook"></i></a></li>
            <!-- <li><a target="_blank" href="http://instagram.com/tiempohtijuana"><i class="icon-instagram"></i></a></li> -->
            <!--<li><a href="#"><i class="icon-youtube-play"></i></a></li>-->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="fh5co-copyright animate-box">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="fh5co-left">
            <small>&copy; 2016 <a href="index.html">Tiempo Hermético</a>. Todos los derechos reservados.</small>
          </p>
          <p class="fh5co-right">
            <small class="fh5co-right">Dudas y sugerencias <a href="#">hola@tiempohermetico.com</a></small>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- END #fh5co-footer -->
</div>
<!-- END #fh5co-page -->

<?php get_footer(); ?>
