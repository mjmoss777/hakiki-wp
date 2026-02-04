<?php 

    /**
     * Template name: Politique de confidentialite
     */
    get_header();
?>

    <!-- Start Scroll Bottom Icon -->

    <div class="scroll-bottom-icon">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="27.188" height="55.832" viewBox="0 0 27.188 55.832">
        <defs>
          <clipPath id="clip-path">
            <rect id="Rectangle_56" data-name="Rectangle 56" width="55.832" height="27.188" fill="none"/>
          </clipPath>
        </defs>
        <g id="Groupe_42" data-name="Groupe 42" transform="translate(27.188) rotate(90)" clip-path="url(#clip-path)">
          <g id="Groupe_37" data-name="Groupe 37" transform="translate(42.292)">
            <g id="Groupe_36" data-name="Groupe 36" transform="translate(0)">
              <path id="Tracé_98" data-name="Tracé 98" d="M-14-14A13.6,13.6,0,0,0-.406-.406" transform="translate(14 14)" fill="none" stroke="#bf9166" stroke-width="1"/>
            </g>
          </g>
          <g id="Groupe_39" data-name="Groupe 39" transform="translate(42.292 13.594)">
            <g id="Groupe_38" data-name="Groupe 38" transform="translate(0 0)">
              <path id="Tracé_99" data-name="Tracé 99" d="M-.406-14A13.6,13.6,0,0,0-14-.406" transform="translate(14 14)" fill="none" stroke="#bf9166" stroke-width="1"/>
            </g>
          </g>
          <g id="Groupe_41" data-name="Groupe 41" transform="translate(0 13.594)">
            <g id="Groupe_40" data-name="Groupe 40">
              <path id="Tracé_100" data-name="Tracé 100" d="M-57.556,0H-1.67" transform="translate(57.556)" fill="none" stroke="#bf9166" stroke-width="1"/>
            </g>
          </g>
        </g>
      </svg>
    </div>

    <!-- End Scroll Bottom Icon -->

    <!-- Start Politique de confidentialite -->

    <section class="mentionsLegales">
      <div class="mentionsLegales-header fade__in">
        <h1><?php the_title(); ?></h1>
      </div>

      <div class="mentionsLegales-container">
        <div class="mentionsLegales-content fade__up">
          <?php the_content(); ?>
        </div>
      </div>
    </section>

    <!-- End Politique de confidentialite -->

<?php get_footer(); ?>