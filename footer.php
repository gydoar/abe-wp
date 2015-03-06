
 <!-- footer -->
  <footer>
    <div class="container">
      <ul class="ten columns">
       <li><img width="25" src="<?php bloginfo('template_url' ); ?>/library/img/map.png" alt="">&nbsp;&nbsp;<?php echo of_get_option('direccion'); ?></li>

       <li><img width="24" src="<?php bloginfo('template_url' ); ?>/library/img/cell.png" alt="">&nbsp;&nbsp;<?php echo of_get_option('telefono'); ?></li>

       <li><img width="26" src="<?php bloginfo('template_url' ); ?>/library/img/soporte.png" alt="">&nbsp;&nbsp;<?php echo of_get_option('atencion'); ?></li>
      </ul>

      <ul class="two columns" id="social">
        <li><a target="_blank" href="<?php echo of_get_option('link_facebook','no entry'); ?>"><img width="32" src="<?php bloginfo('template_url' ); ?>/library/img/facebook.png" alt=""></a></li>
        <li><a target="_blank" href="<?php echo of_get_option('link_twitter','no entry'); ?>"><img width="32" src="<?php bloginfo('template_url' ); ?>/library/img/twitter.png" alt=""></a></li>
      </ul>
    </div>
  </footer>

  <!-- copyright -->
  <section id="copyright">
    <div class="container">
      <p><strong>&copy; ABE&nbsp;&nbsp;</strong>
      HECHO CON &nbsp;<img width="12px" src="<?php bloginfo('template_url' ); ?>/library/img/corazon.png" alt=""> &nbsp;POR <a target="_blank" href="http://suwwweb.com"> SUWWWEB S.A.S</a></p>
    </div>
  </section>


<?php wp_footer(); ?>

</body>
</html>