<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hakiki-wp
 */

?>


    <!-- Start Footer -->

    <footer id="contact">
      <div class="footer-container">
        <div class="footer-content fade__in">
          <div class="top">
            <div class="left-top">
              <div class="logo">
                <a href="<?php echo get_home_url(); ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.svg" alt="Logo" />
                </a>
              </div>
              <div class="menu-footer">
                <ul>
                  <li><a href="<?php echo get_home_url(); ?>#team"><?php echo __("Team", "hakiki-tra"); ?></a></li>
                  <li><a href="<?php echo get_home_url(); ?>#expertises"><?php echo __("Expertise", "hakiki-tra"); ?></a></li>
                  <li><a href="<?php the_permalink(94); ?>"><?php echo __("News", "hakiki-tra"); ?></a></li>
                  <li><a href="<?php the_permalink(97); ?>"><?php echo __("Careers", "hakiki-tra"); ?></a></li>
                </ul>
              </div>
            </div>
            <div class="right-top">
              <?php if(ICL_LANGUAGE_CODE == 'fr'): ?>
                <?php echo do_shortcode('[contact-form-7 id="dc2dc22" title="Contact form"]') ?>
              <?php else: ?>
                <?php echo do_shortcode('[contact-form-7 id="cf0e0c9" title="Contact form EN"]') ?>
              <?php endif; ?>  
            </div>
          </div>
          <div class="bottom">
            <div class="left-bottom">
              <ul>
                <li>
                  <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank" rel="noopener">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="17.464"
                      height="13.464"
                      viewBox="0 0 13.464 13.464"
                    >
                      <path
                        id="Icon_awesome-linkedin-in"
                        data-name="Icon awesome-linkedin-in"
                        d="M3.014,13.464H.222V4.475H3.014ZM1.617,3.249A1.624,1.624,0,1,1,3.233,1.617,1.63,1.63,0,0,1,1.617,3.249ZM13.461,13.464H10.676V9.089c0-1.043-.021-2.38-1.451-2.38-1.451,0-1.674,1.133-1.674,2.305v4.451H4.762V4.475H7.439V5.7h.039A2.933,2.933,0,0,1,10.12,4.25c2.825,0,3.344,1.86,3.344,4.277v4.938Z"
                        transform="translate(0 0)"
                        fill="#1f2e4a"
                      />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="tel:<?php the_field('mobile', 'option'); ?>">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="12.317"
                      height="12.317"
                      viewBox="0 0 12.317 12.317"
                    >
                      <path
                        id="Icon_awesome-phone"
                        data-name="Icon awesome-phone"
                        d="M11.869.591,9.367.014a.581.581,0,0,0-.662.334L7.551,3.043a.576.576,0,0,0,.166.674L9.175,4.91A8.916,8.916,0,0,1,4.912,9.172L3.719,7.715a.577.577,0,0,0-.674-.166L.351,8.7a.584.584,0,0,0-.337.664l.577,2.5a.577.577,0,0,0,.563.447A11.161,11.161,0,0,0,12.317,1.154.577.577,0,0,0,11.869.591Z"
                        transform="translate(0.001 0.001)"
                        fill="#1f2e4a"
                      />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="mailto:<?php the_field('mail', 'option'); ?>">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="15.766"
                      height="12.498"
                      viewBox="0 0 15.766 12.498"
                    >
                      <g
                        id="Icon_feather-mail"
                        data-name="Icon feather-mail"
                        transform="translate(-2.304 -5.5)"
                      >
                        <path
                          id="Tracé_7105"
                          data-name="Tracé 7105"
                          d="M4.437,6h11.5a1.442,1.442,0,0,1,1.437,1.437v8.624A1.442,1.442,0,0,1,15.936,17.5H4.437A1.442,1.442,0,0,1,3,16.061V7.437A1.442,1.442,0,0,1,4.437,6Z"
                          fill="none"
                          stroke="#1f2e4a"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="1"
                        />
                        <path
                          id="Tracé_7106"
                          data-name="Tracé 7106"
                          d="M17.373,9l-7.187,5.031L3,9"
                          transform="translate(0 -1.563)"
                          fill="none"
                          stroke="#1f2e4a"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="1"
                        />
                      </g>
                    </svg>
                  </a>
                </li>
              </ul>
              <div class="address">
                <a href="<?php the_field('google_map_link', 'option'); ?>" target="_blank" rel="noopener"> 
					        <?php the_field('address', 'option'); ?> 
				        </a>
              </div>
            </div>
            <div class="right-bottom">
              <ul>
                <li>
                  <a href="<?php the_permalink(151); ?>"><?php echo __("Legal Information", 'hakiki-tra'); ?> </a>
                </li>
                <li>
                  <a href="<?php the_permalink(158); ?>"><?php echo __("Privacy Policy", 'hakiki-tra'); ?></a>
                </li>
              </ul>
              <div class="copyright">
                <h3>© <?php echo date("Y"); ?> HAKIKI ASSOCIÉS</h3>
                <h4><?php echo __("All Rights Reserved", 'hakiki-tra'); ?>.</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- End Footer -->


	<!-- JS Files - added defer for non-blocking load -->
	<!-- OLD: blocking scripts
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
	-->
	<!-- NEW: deferred scripts -->
	<script defer src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.js"></script>
	<script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
	<script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
	<script defer src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <script type="module">
    // OLD: Immediate load of 1.88MB runtime.js - commented for performance
    // import { Application } from '/wp-content/themes/hakiki-wp/js/runtime.js';
    // if(document.body.classList.contains("home")) {
    //   const canvas = document.getElementById('logoAnim');
    //   const app = new Application(canvas);
    //   app.load('https://prod.spline.design/DTN3gBU1Ig7flqvb/scene.splinecode');
    // }
    // NEW: Load 3D animation only when browser is idle (reduces Total Blocking Time)
    if(document.body.classList.contains("home")) {
      const load3DAnimation = async () => {
        const { Application } = await import('/wp-content/themes/hakiki-wp/js/runtime.js');
        const canvas = document.getElementById('logoAnim');
        const app = new Application(canvas);
        app.load('https://prod.spline.design/DTN3gBU1Ig7flqvb/scene.splinecode');
      };
      // Use requestIdleCallback if available, otherwise setTimeout as fallback
      if ('requestIdleCallback' in window) {
        requestIdleCallback(() => load3DAnimation(), { timeout: 3000 });
      } else {
        setTimeout(load3DAnimation, 2000);
      }
    }
  </script>
	<?php wp_footer(); ?>

</body>
</html>
