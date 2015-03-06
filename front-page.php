<?php 
/*
Template Name: Página principal
*/
 ?>

 <?php get_header(); ?>


	 <!-- Slider -->
  <div id="owl-demo" class="owl-carousel owl-theme">
 	
    <div class="item"><img src="<?php echo of_get_option('banner1'); ?>" alt="Banner1"></div>
    <div class="item"><img src="<?php echo of_get_option('banner2'); ?>" alt="Banner1"></div>
  
  </div>

 <!-- Section destacados -->
  <section id="destacados">
    <div class="dest-1">
      <img width="39" src="<?php bloginfo('template_url' ); ?>/library/img/icon-atencion.png" alt="">
      <h5>ATENCIÓN<br><strong>CON CALIDAD</strong></h5>
      <p><?php echo of_get_option('atencion_calidad') ?></p>
    </div>
    <div class="dest-2">
      <h5>CUIDADO INTEGRAL <br><strong>EN CASA</strong></h5>
      <p><?php echo of_get_option('cuidado_integral') ?></p>
      <a class="bottom-green" href="<?php echo home_url('/nuestros-servicios'); ?>">SERVICIOS &nbsp;<img width="10" src="<?php bloginfo('template_url' ); ?>/library/img/icon-bottom.png" alt=""></a>
    </div>
    <div class="dest-3">
      <img width="50" src="<?php bloginfo('template_url' ); ?>/library/img/icon-transp.png" alt="">
      <h5>SERVICIO<br>DE <strong>TRANSPORTE</strong></h5>
      <p><?php echo of_get_option('servicio_transporte') ?></p>
    </div>
  </section>

  <!-- Seccion Politicas de calidad -->
  <section id="politicas-calidad" class="container">

    <h2>POLÍTICAS DE CALIDAD</h2>
    <div class="line-niveles"></div>

  </section>

  <section id="politicas-calidad" class="container">

    <div class="five columns offset-by-one">
      <p><?php echo of_get_option('politicas_1'); ?></p>
    </div>

    <div class="five columns columns">
      <p><?php echo of_get_option('politicas_2'); ?></p>
    </div>

  </section>


  <section class="container">
    <ul class="calidad offset-by-two eight columns">
      <li>
        <h3>ATENCIÓN CON CALIDAD</h3>
        <img width="150" src="<?php bloginfo('template_url' ); ?>/library/img/atencion-calidad.png" alt="">
      </li>
      <li>
        <h3>SATISFACIÓN DE<br>NECESIDAD Y EXPECTATIVAS</h3>
        <img width="150" src="<?php bloginfo('template_url' ); ?>/library/img/satisfaccion-de-necesidades.png" alt="">
      </li>
      <li>
        <h3>HUMANIZACIÓN</h3>
        <img width="150" src="<?php bloginfo('template_url' ); ?>/library/img/humanizacion.png" alt="">
      </li>
    </ul>
  </section>


<!-- Historia -->
  <section id="historia">
    <!-- Simbolo -->
    <div class="simbolo container"><img width="99" src="<?php bloginfo('template_url' ); ?>/library/img/simbolo-medical.png" alt=""></div>
  
    <div class="container">
      <div class="offset-by-two eight columns">
        <h2>HISTORIA</h2>
        <p><?php echo of_get_option('historia'); ?></p>
      </div>
    </div>
  </section>

  <!-- Seccion Vision y Miison -->
  <section class="container vision-mision">
    
    <div class="offset-by-one five columns">
      <h3>MISIÓN</h3>
      <div class="line-niveles2"></div>
      <p><?php echo of_get_option('mision'); ?></p>
    </div>
    <div class="five columns">
      <h3>VISIÓN</h3>
      <div class="line-niveles2"></div>
      <p><?php echo of_get_option('vision'); ?></p>
    </div>

  </section>


	<!--Script slider -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 	<script src="<?php bloginfo('template_url' ); ?>/library/js/owl.carousel.js"></script>
  	<script>
	
	
    $(document).ready(function() {
 
      $("#owl-demo").owlCarousel({
     
          navigation : false, // Show next and prev buttons
          pagination:false,
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem:true,
          autoPlay:3000
     
          // "singleItem:true" is a shortcut for:
          // items : 1, 
          // itemsDesktop : false,
          // itemsDesktopSmall : false,
          // itemsTablet: false,
          // itemsMobile : false
     
      });
     
    });

</script>

 <?php get_footer(); ?>