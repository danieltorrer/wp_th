    <?php wp_footer(); ?>

    <?php if( is_front_page() ){
      ?>
      <script src="<?php echo get_template_directory_uri();?>/assets/js/typed.min.js"></script>
      <script>
        document.addEventListener('DOMContentLoaded', function(){
          Typed.new('.typed-effect', {
            strings: ['Tijuana', 'Tecate', 'tu ciudad', 'tu barrio', 'tu colonia'],
            typeSpeed: 100,
            loop: true,
            startDelay: 400
          });
        });
      </script>
      <?php
    }?>
    <?php if( is_page('tijuana')){
      ?>
      <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.magnific-popup.min.js"></script>
        <script>
        $(document).ready(function(){

          var magnifVideo = function() {
            $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,

                fixedContentPos: false
              });
          };

          magnifVideo();

        })
        </script>
      <?php
    } ?>
  </body>
</html>
