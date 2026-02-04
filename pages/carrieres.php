<?php 

    /**
     * Template name: Carrieres
     */

     get_header();

?>

    <a class="h6"></a>

    <!-- Start Scroll Bottom Icon -->

    <div class="scroll-bottom-icon">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        width="27.188"
        height="55.832"
        viewBox="0 0 27.188 55.832"
      >
        <defs>
          <clipPath id="clip-path">
            <rect
              id="Rectangle_56"
              data-name="Rectangle 56"
              width="55.832"
              height="27.188"
              fill="none"
            />
          </clipPath>
        </defs>
        <g
          id="Groupe_42"
          data-name="Groupe 42"
          transform="translate(27.188) rotate(90)"
          clip-path="url(#clip-path)"
        >
          <g id="Groupe_37" data-name="Groupe 37" transform="translate(42.292)">
            <g id="Groupe_36" data-name="Groupe 36" transform="translate(0)">
              <path
                id="Tracé_98"
                data-name="Tracé 98"
                d="M-14-14A13.6,13.6,0,0,0-.406-.406"
                transform="translate(14 14)"
                fill="none"
                stroke="#ffedde"
                stroke-width="1"
              />
            </g>
          </g>
          <g
            id="Groupe_39"
            data-name="Groupe 39"
            transform="translate(42.292 13.594)"
          >
            <g id="Groupe_38" data-name="Groupe 38" transform="translate(0 0)">
              <path
                id="Tracé_99"
                data-name="Tracé 99"
                d="M-.406-14A13.6,13.6,0,0,0-14-.406"
                transform="translate(14 14)"
                fill="none"
                stroke="#ffedde"
                stroke-width="1"
              />
            </g>
          </g>
          <g
            id="Groupe_41"
            data-name="Groupe 41"
            transform="translate(0 13.594)"
          >
            <g id="Groupe_40" data-name="Groupe 40">
              <path
                id="Tracé_100"
                data-name="Tracé 100"
                d="M-57.556,0H-1.67"
                transform="translate(57.556)"
                fill="none"
                stroke="#ffedde"
                stroke-width="1"
              />
            </g>
          </g>
        </g>
      </svg>
    </div>

    <!-- End Scroll Bottom Icon -->

    <!-- Start Carrières Page -->

    <section class="carriersPage">
      <div class="allCarriersSec">
        <div class="carriersPage-hero fade__in">
          <div class="hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/carriers-hero-bg.svg" alt="Bg Carriers" />
          </div>
          <div class="hero-content fade__up">
            <?php the_field('hero_carrieres_title'); ?>
          </div>
        </div>

        <div class="carriersPage-about fade__up">
          <h2><?php the_field('about_carrieres_title'); ?></h2>
          <?php the_field('about_carrieres_description'); ?>
        </div>

        <div class="carriersPage-bg fade__in">
          <img src="<?php echo get_template_directory_uri(); ?>/images/carriers-bg2.webp" alt="Carriers Bg" />
        </div>

        <div class="carriersPage-attendus">
          <div class="attendus-content">
            <div class="top fade__up">
              <h2><?php the_field('blocks_carrieres_title'); ?></h2>
                <?php if( have_rows('blocks_carrieres') ): $indexBC1 = 0; ?>
                    <?php while( have_rows('blocks_carrieres') ): the_row(); 
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        ?>
                        <?php if($indexBC1 === 0): ?>
                            <div class="equilibrer block-attendus">
                                <h3><?php echo $title; ?></h3>
                                <?php echo $description; ?>
                            </div>
                        <?php endif; $indexBC1++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="bottom fade__up">
                <?php if( have_rows('blocks_carrieres') ): $indexBC2 = 0; ?>
                    <?php while( have_rows('blocks_carrieres') ): the_row(); 
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        ?>
                        <?php if($indexBC2 !== 0): ?>
                            <div class="<?php if($indexBC2 === 1): echo "former"; else: echo "creer"; endif; ?> block-attendus">
                                <h3><?php echo $title; ?></h3>
                                <?php echo $description; ?>
                            </div>
                        <?php endif; $indexBC2++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="carriersPage-statistics">
        <div class="statistics-container">
          <div class="statistics-content">
            <div class="statistics-header fade__up">
                <?php the_field('statistics_carrieres_title'); ?>
            </div>
            <div class="statistics fade__up">
                <?php if( have_rows('block_statistics_carrieres') ): ?>
                    <?php while( have_rows('block_statistics_carrieres') ): the_row(); 
                        $number = get_sub_field('number');
                        $title = get_sub_field('title');
                        ?>
                        <div class="statistics-item">
                            <h3><?php echo $number; ?></h3>
                            <span><?php echo $title; ?></span>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="badge-hakiki">
              <img src="<?php echo get_template_directory_uri(); ?>/images/hero-bg.png" alt="Hakiki Icon" />
            </div>
          </div>
        </div>
      </div>

      <div class="allCarriersSec paddingBottom">
        <div class="carriersPage-offers">
          <div class="offers-container">
            <div class="offers-content">
              <div class="left-side fade__up">
                <h2><?php the_field('offers_carrieres_title'); ?></h2>
              </div>
              <div class="right-side fade__up">
                <div class="slider_wrapper">
                  <?php
                  
                  $offres = new WP_Query( array(
                    'post_type' => 'offre',
                    'posts_per_page' => -1,
                  )
                );
  
                  if( $offres->have_posts() ): ?>
                    <div class="swiper career-slider">
                      <div class="swiper-wrapper">
                          <?php while ( $offres->have_posts() ) : $offres->the_post();
                              $date = get_field('offre_date');
                              $type = get_field('offre_type');
                              $title = get_the_title();
                              $city = get_field('offre_city');
                              ?>
                            <a href="<?php echo get_permalink(); ?>" class="swiper-slide offer-item">
                                  <?php if($date): ?>
                                    <div class="date"><?php echo $date; ?></div>
                                  <?php endif; ?>
                                  <div class="offer-info">
                                      <span><?php echo $type; ?></span>
                                      <h3>
                                          <?php echo $title; ?>
                                      </h3>
                                      <div class="read-more">
                                          <small><?php echo $city; ?></small>
                                          <div class="postule">
                                              <?php echo __("Apply now!", "hakiki-tra"); ?>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="43.001" height="43.001" viewBox="0 0 43.001 43.001">
                                                <g id="Icon_feather-plus" data-name="Icon feather-plus" transform="translate(-7 -7)">
                                                  <path id="Tracé_79" data-name="Tracé 79" d="M18,7.5v42" transform="translate(10.501 0)" fill="none" stroke="#f6f6f6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                                  <path id="Tracé_80" data-name="Tracé 80" d="M7.5,18h42" transform="translate(0 10.501)" fill="none" stroke="#f6f6f6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                                </g>
                                              </svg>
                                          </div>
                                      </div>
                                  </div>
                            </a>
                          <?php endwhile; ?>
                      </div>
                    </div>
                    <div class="slider-navigation fade__in">
                      <div class="swiper-button-prev">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="26.345"
                          height="17"
                          viewBox="0 0 26.345 17"
                        >
                          <g
                            id="Groupe_21253"
                            data-name="Groupe 21253"
                            transform="translate(0 0)"
                          >
                            <path
                              id="Tracé_82"
                              data-name="Tracé 82"
                              d="M106.96,280.947l4.6-8.5-4.6-8.5,8.5,8.5Z"
                              transform="translate(-89.115 -263.946)"
                              fill="#bf9166"
                            />
                            <path
                              id="Tracé_83"
                              data-name="Tracé 83"
                              d="M0,0,23,2V0L0,2Z"
                              transform="translate(0 7.563)"
                              fill="#bf9166"
                            />
                          </g>
                        </svg>
                      </div>
                      <div class="swiper-button-next">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="26.345"
                          height="17"
                          viewBox="0 0 26.345 17"
                        >
                          <g
                            id="Groupe_21253"
                            data-name="Groupe 21253"
                            transform="translate(0 0)"
                          >
                            <path
                              id="Tracé_82"
                              data-name="Tracé 82"
                              d="M106.96,280.947l4.6-8.5-4.6-8.5,8.5,8.5Z"
                              transform="translate(-89.115 -263.946)"
                              fill="#bf9166"
                            />
                            <path
                              id="Tracé_83"
                              data-name="Tracé 83"
                              d="M0,0,23,2V0L0,2Z"
                              transform="translate(0 7.563)"
                              fill="#bf9166"
                            />
                          </g>
                        </svg>
                      </div>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- End Carrières Page -->

    <!-- Start Carrières Section -->

    <section class="carrieres fade__in">
      <div class="carriers-container">
        <div class="carriers-content">
          <div class="carriers-header fade__up">
            <div class="subtitle">
              <h3><?php the_field('title_carrieres_2', 'option'); ?></h3>
            </div>
          </div>
          <div class="carriers-body fade__up">
            <a> <?php the_field('cta_carrieres_2', 'option'); ?></a>
          </div>
        </div>
      </div>
    </section>

    <!-- End Carrières Section -->

    <!-- Start Carrières Form -->

    <section class="carrieresForm">
      <div class="close">
        <svg xmlns="http://www.w3.org/2000/svg" width="28.121" height="28.121" viewBox="0 0 28.121 28.121">
          <g id="Groupe_21254" data-name="Groupe 21254" transform="translate(-99.145 -52.902)">
            <path id="Tracé_7119" data-name="Tracé 7119" d="M-1922.794-13740.037l-26,26" transform="translate(2049 13794)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5"/>
            <path id="Tracé_7120" data-name="Tracé 7120" d="M-1922.794-13740.037l-26,26" transform="translate(-13613.831 2002.757) rotate(90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.5"/>
          </g>
        </svg>
      </div>

      <div class="form-carr">
        <div class="carrieresForm-container">
          <div class="carrieresForm-content">
            <div class="image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/form-carr-bg.jpg" alt="BG Form Carr" />
            </div>
            <?php if(ICL_LANGUAGE_CODE == 'fr'): ?>
              <?php echo do_shortcode('[contact-form-7 id="1ed9ebe" title="Carrieres Form"]') ?>
            <?php else: ?>
              <?php echo do_shortcode('[contact-form-7 id="cc1e795" title="Carrieres Form EN"]') ?>
            <?php endif; ?>  
          </div>
        </div>
      </div>
    </section>

    <!-- End Carrières Form -->


<?php get_footer(); ?>
