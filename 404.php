<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package hakiki-wp
 */

get_header();
?>

    <!-- Start Error 401 Page -->

    <section class="errorPage">
      <div class="errorPage-content">
        <div class="bg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/404.png" alt="Bg Error" />
        </div>
        <div class="title">
          <h1>Erreur</h1>
          <span>Cette page est introuvable.</span>
        </div>
        <div class="home-link">
          <a href="<?php echo get_home_url(); ?>"> Accueil </a>
        </div>
      </div>
    </section>

    <!-- End Error 404 Page -->

    <!-- JS Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  </body>
</html>

