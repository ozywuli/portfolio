
  <footer class="footer-container">
    <div class="grid">
    <div class="footer-about clearfix">
      <img src="http://placehold.it/50x50" alt="">
      <div class="footer-desc">
        <h3 class="h3">About Ozy</h3>
        <p>Hi, I'm Ozy. I currently reside in the Greater Los Angeles Area. During the day, I design and develop interfaces and applications for the web. During the night, I explore my weird interest in alternative realities (trying my best to stay sane while I'm at it). You can learn more about me on my profile page. If you are interested in working with me, you can reach me via email at ozy.wu.li [at] gmail [dot] com or through twitter at @ozy_wuli.</p>
      </div>
    </div>
      <ul class="sm-container">
      <li><a href="">Twitter</a></li>
      <li><a href="">Github</a></li>
      <li><a href="">Email</a></li>
      </ul>

  <!-- Menu -->
  <nav class="footer-nav" >
    <?php
      // Menu Options
      $footer_nav = array(
        'theme_location' => 'footer-nav',
        'menu_class' => 'clearfix',
        'depth' => 1
      );
     ?>

    <?php wp_nav_menu( $footer_nav ); ?>
  </nav> <!-- /menu -->


      <p class="copyright">Copyright &copy; 2014 by <a href="">Ozy Wu-Li</a> Version 2.0</p>
    </div>
  </footer>

</div> <!-- /content -->



</div> <!-- /Page Container -->
<?php wp_footer() ?>

</body>
</html>