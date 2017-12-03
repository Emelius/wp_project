
</main>
<footer>


  <div id="socialMediaOuter">
    <?php $uri = get_template_directory_uri() ?>
    <div class="socialInnerDiv"><a href="https://www.facebook.com/JSAEntrepreneurshipAcademy/?ref=br_rs"><img class="icon" src="<?php echo $uri ?>/images/facebookicon.png"></a></div>
    <div class="socialInnerDiv"><a href="https://www.instagram.com/jibs_entrepreneurship/"><img class="icon" src="<?php echo $uri ?>/images/instaicon.png"></a></div>
  </div>

  <?php

      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      if ( has_custom_logo() ) {
              ?> <div class="custom_logo"><?php the_custom_logo();?></div><?php
            //  echo '<img src="'. esc_url( $logo[0] ) .'">';
      } else {
              echo '<a href="#"><h1>'. get_bloginfo( 'name' ) .'</h1></a>';
      }
  ?>

</footer>
<?php wp_footer()?>
</div>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/adminAdjustments.js"></script>
</body>
</html>
