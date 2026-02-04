<?php 

    /**
     * Template name: Home
     */

     get_header();
?>


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

    <!-- Start Hero Section -->

    <section class="hero">
      <div class="hero-content">
        <div class="line">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            width="1187.019"
            height="605.476"
            viewBox="0 0 1187.019 605.476"
          >
            <defs>
              <linearGradient
                id="linear-gradient"
                x1="-0.076"
                y1="3.038"
                x2="1.157"
                y2="1.218"
                gradientUnits="objectBoundingBox"
              >
                <stop offset="0" stop-color="#40171f" />
                <stop offset="0.153" stop-color="#fff6ef" />
                <stop offset="0.517" stop-color="#bf9166" />
                <stop offset="1" stop-color="#fff" />
              </linearGradient>
            </defs>
            <rect
              id="Rectangle_23"
              data-name="Rectangle 23"
              width="1331.713"
              height="1"
              transform="matrix(0.891, 0.454, -0.454, 0.891, 0.454, 0)"
              opacity="0.1"
              fill="url(#linear-gradient)"
            />
          </svg>
        </div>
        <div class="bg">
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/hero-bg.png" alt="Hero BG" /> -->
          <canvas id="logoAnim" width="80%"></canvas>
        </div>
        <div class="title">
          <?php the_field('hero_title'); ?>
        </div>
      </div>

      <div class="hero-linkedin">
        <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank" rel="noopener"> LinkedIn </a>
      </div>
    </section>

    <!-- End Hero Section -->

    <!-- Start About Section -->

    <section class="about fade__in">
      <div class="about-container">
        <div class="about-content">
          <div class="top fade__up">
            <div class="left-side">
              <div class="titles-top">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-hakiki.svg" alt="Hakiki Icon" />
                <div class="title">
                  <?php the_field('about_title'); ?>
                </div>
              </div>
              <div class="titles-bottom">
                <?php the_field('about_subtitle'); ?>
              </div>
            </div>
            <div class="right-side">
                <?php the_field('about_description'); ?>
            </div>
          </div>
        </div>
      </div>

      <div class="about-blocks">
        <div class="blocks-container">
          <div class="grid-blocks fade__up">
            <?php if( have_rows('about_blocks') ): ?>
                <?php while( have_rows('about_blocks') ): the_row(); 
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                    ?>
                    <div class="block">
                        <div class="icon">
                            <img src="<?php echo $icon; ?>" alt="About Icon" />
                        </div>
                        <div class="title"><?php echo $title; ?></div>
                        <div class="description">
                            <?php echo $description; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- End About Section -->

    <!-- Start Expertises Section -->

    <section class="expertises" id="expertises">
      <div class="expertises-container">
        <div class="expertises-content">
          <div class="top fade__up">
            <div class="left-side">
              <?php the_field('expertises_title'); ?>
            </div>

            <div class="right-side">
                <?php the_field('expertises_description'); ?>
            </div>
          </div>
          <div class="bottom fade__up">
            <div class="expertises-grid">
              <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/expertises-bg.svg" loading="lazy" alt="Bg Expertises" />
              </div>
              <?php
                $loopExpertises = new WP_Query( array(
                    'post_type' => 'expertise',
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'posts_per_page' => -1
                  )
                );
              ?>

              <?php while ( $loopExpertises->have_posts() ) : $loopExpertises->the_post(); ?>

                <a href="<?php the_permalink(); ?>" class="expertise-item">
                  <div class="title">
                    <?php the_field('title'); ?>
                  </div>
                </a>

              <?php endwhile; wp_reset_query(); ?>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- End Expertises Section -->

    <!-- Start Actualites Section -->

    <section class="actualites fade__in">
      <div class="bg-actua">
        <img src="<?php echo get_template_directory_uri(); ?>/images/bg-actua-line.svg" loading="lazy" alt="Background" />
      </div>
      <div class="images-container">
        <div class="images-content">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/actualites/actua5.jpg" loading="lazy" alt="Actualité" />
          </div>
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/actualites/actua6.jpg" loading="lazy" alt="Actualité" />
          </div>
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/actualites/actua7.jpg" loading="lazy" alt="Actualité" />
          </div>
        </div>
      </div>
      <div class="actua-container">
        <div class="actua-content">
          <a href="<?php the_permalink(94); ?>" class="actua-header">
            <h2><?php the_field('block_actua_title'); ?></h2>
            <h4><?php echo __("Find out more", "hakiki-tra"); ?></h4>
          </a>
          <div class="actua-grid fade__up">
            <div class="actua-filters">
              <div class="images">
                <img src="<?php echo get_template_directory_uri(); ?>/images/actualites/actua1.jpg" loading="lazy" alt="Actualité" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/actualites/actua2.jpg" loading="lazy" alt="Actualité" />
              </div>
              <div class="filter">
                <div class="title"><?php the_field('hack_lab_title'); ?></div>
                <div class="description">
                  <p>
                    <?php the_field('hack_lab_description'); ?>
                  </p>
                </div>

              </div>
            </div>
            <div class="actua-filters">
              <div class="images">
                <img src="<?php echo get_template_directory_uri(); ?>/images/actualites/actua3.jpg" loading="lazy" alt="Actualité" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/actualites/actua4.jpg" loading="lazy" alt="Actualité" />
              </div>
              <div class="filter">
                <div class="title"><?php the_field('focus_r&d_title'); ?></div>
                <div class="description">
                  <p>
                    <?php the_field('focus_r&d_description'); ?>
                  </p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- End Actualites Section -->

    <!-- Start Team Section -->

    <section class="team" id="team">
      <div class="team-container">
        <div class="team-content fade__in">
          <div class="team-header fade__up">
            <h2>
              <?php the_field('team_title'); ?>
            </h2>
            <?php the_field('description_team'); ?>
          </div>

          <div class="team-grid fade__up">
            <div class="swiper team-slider">
              <div class="swiper-wrapper">

              <?php
                $loopTeam = new WP_Query( array(
                    'post_type' => 'avocat',
                    'posts_per_page' => -1
                )
                );
                ?>

                <?php while ( $loopTeam->have_posts() ) : $loopTeam->the_post(); ?>
                    <?php if(!get_field('no_bio')): ?>
                      <a href="<?php the_permalink() ?>" class="swiper-slide team-item">
                          <div class="image">
                              <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()), 'full'); ?>" loading="lazy" alt="<?php the_title(); ?>" />
                          </div>
                          <div class="name">
                              <h2><?php the_title(); ?></h2>
                              <span><?php the_field('statut'); ?></span>
                              <?php if(!get_field('no_bio')): ?>
                                <div class="read-more">
                                    <?php echo __("Biography", "hakiki-tra"); ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/plus-icon.svg" alt="Plus Icon" />
                                </div>
                              <?php endif; ?>
                          </div>
                      </a>
                    <?php else: ?>
                      <div class="swiper-slide team-item">
                          <div class="image">
                              <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()), 'full'); ?>" loading="lazy" alt="<?php the_title(); ?>" />
                          </div>
                          <div class="name">
                              <h2><?php the_title(); ?></h2>
                              <span><?php the_field('statut'); ?></span>
                              <?php if(!get_field('no_bio')): ?>
                                <div class="read-more">
                                    <?php echo __("Biography", "hakiki-tra"); ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/plus-icon.svg" alt="Plus Icon" />
                                </div>
                              <?php endif; ?>
                          </div>
                      </div>
                    <?php endif; ?>
                <?php endwhile; wp_reset_query(); ?>

              </div>
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
        </div>
      </div>
    </section>

    <!-- End Team Section -->

    <!-- Start Quote Section -->

    <section class="quote">
      <div class="quote-container">
        <div class="quote-content fade__up">
          <div class="icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="42.875"
              height="34.375"
              viewBox="0 0 42.875 34.375"
            >
              <path
                id="Tracé_81"
                data-name="Tracé 81"
                d="M19.75-93.25C12.125-91,2.875-84.375,2.875-72.625c0,9,5.875,13.75,11.625,13.75,4.75,0,7.75-3.375,7.75-7.25,0-3.125-2-6.75-7.125-7.5-3.375-.5-7.375-1-7.375-5.125,0-5.875,6.875-11.625,12.25-13.75Zm23.5,0C35.625-91,26.375-84.375,26.375-72.625c0,9,5.875,13.75,11.625,13.75,4.75,0,7.75-3.375,7.75-7.25,0-3.125-2-6.75-7.125-7.5-3.375-.5-7.375-1-7.375-5.125,0-5.875,6.875-11.625,12.25-13.75Z"
                transform="translate(-2.875 93.25)"
                fill="#1f2e4a"
              />
            </svg>
          </div>
          <p>
            <?php the_field('quote'); ?>
          </p>
          <span><?php the_field('quote_author'); ?></span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="6.429"
            height="6.429"
            viewBox="0 0 6.429 6.429"
          >
            <g
              id="Groupe_21002"
              data-name="Groupe 21002"
              transform="translate(-749.786 -6383.286)"
            >
              <path
                id="Tracé_7086"
                data-name="Tracé 7086"
                d="M122.535,263.947l-3.214,3.214,3.214,3.214-1.74-3.214Z"
                transform="translate(633.68 6119.339)"
                fill="#1f2e4a"
              />
              <path
                id="Tracé_7089"
                data-name="Tracé 7089"
                d="M122.535,263.947l-3.214,3.214,3.214,3.214-1.74-3.214Z"
                transform="translate(485.839 6505.82) rotate(-90)"
                fill="#1f2e4a"
              />
              <path
                id="Tracé_7087"
                data-name="Tracé 7087"
                d="M119.321,263.947l3.215,3.214-3.215,3.214,1.74-3.214Z"
                transform="translate(630.465 6119.339)"
                fill="#1f2e4a"
              />
              <path
                id="Tracé_7088"
                data-name="Tracé 7088"
                d="M119.321,263.947l3.215,3.214-3.215,3.214,1.74-3.214Z"
                transform="translate(485.839 6509.035) rotate(-90)"
                fill="#1f2e4a"
              />
            </g>
          </svg>
        </div>
      </div>
    </section>

    <!-- End Quote Section -->

    <!-- Start Carrières Section -->

    <section class="carrieres fade__in">
      <div class="carriers-container">
        <div class="carriers-content">
          <div class="carriers-header fade__up">
            <h2><?php echo __("Careers", "hakiki-tra"); ?></h2>
            <div class="subtitle">
              <h3><?php the_field('title_carrieres', 'option'); ?></h3>
            </div>
          </div>
          <div class="carriers-body fade__up">
            <p>
              <?php the_field('description_carrieres', 'option'); ?>
            </p>
            <a href="<?php the_permalink(97); ?>"> <?php the_field('cta_carrieres', 'option'); ?> </a>
          </div>
        </div>
      </div>
    </section>

    <!-- End Carrières Section -->


<?php get_footer(); ?>