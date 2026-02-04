<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hakiki-wp
 */

get_header();
?>

    <!-- Start Single Actualite -->

    <section class="singleActua fade__in">
      <div class="singleActua-header fade__in">
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
              <g
                id="Groupe_37"
                data-name="Groupe 37"
                transform="translate(42.292)"
              >
                <g
                  id="Groupe_36"
                  data-name="Groupe 36"
                  transform="translate(0)"
                >
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
                <g
                  id="Groupe_38"
                  data-name="Groupe 38"
                  transform="translate(0 0)"
                >
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

        <div class="singleActua-container">
          <div class="singleActua-top fade__in">
            <div class="line">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1187.019" height="605.476" viewBox="0 0 1187.019 605.476">
                <defs>
                  <linearGradient id="linear-gradient" x1="-0.076" y1="3.038" x2="1.157" y2="1.218" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#40171f"></stop>
                    <stop offset="0.153" stop-color="#fff6ef"></stop>
                    <stop offset="0.517" stop-color="#bf9166"></stop>
                    <stop offset="1" stop-color="#fff"></stop>
                  </linearGradient>
                </defs>
                <rect id="Rectangle_23" data-name="Rectangle 23" width="1331.713" height="1" transform="matrix(0.891, 0.454, -0.454, 0.891, 0.454, 0)" opacity="0.1" fill="url(#linear-gradient)"></rect>
              </svg>
            </div>
            <div class="left-side fade__up">
              <h3><?php the_field('date'); ?></h3>
              <h4><?php foreach(get_the_category($post->ID) as $category){ echo $category->name . ' '; }?></h4>
            </div>

            <div class="right-side fade__up">
              <h1>
                <?php the_title(); ?>
              </h1>
              <span><?php the_field('author'); ?></span>

              <div class="intro">
                <h4>
                  <?php the_field('intro'); ?>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="singleActua-bio fade__in">
        <div class="singleActua-container">
          <div class="singleActua-content fade__up">
            <div class="singleActua-bottom">
              <div class="share">
                <h3><?php echo __("Share on", "hakiki-tra"); ?> :</h3>
                <ul>
                  <li>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>" target="_blank">
                      LinkedIn
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="50"
                        height="50"
                        viewBox="0 0 50 50"
                      >
                        <g
                          id="Groupe_21118"
                          data-name="Groupe 21118"
                          transform="translate(-434 -7389)"
                        >
                          <circle
                            id="Ellipse_2"
                            data-name="Ellipse 2"
                            cx="25"
                            cy="25"
                            r="25"
                            transform="translate(434 7389)"
                            fill="#40171f"
                            opacity="0.1"
                          />
                          <path
                            id="Icon_awesome-linkedin-in"
                            data-name="Icon awesome-linkedin-in"
                            d="M3.014,13.464H.222V4.475H3.014ZM1.617,3.249A1.624,1.624,0,1,1,3.233,1.617,1.63,1.63,0,0,1,1.617,3.249ZM13.461,13.464H10.676V9.089c0-1.043-.021-2.38-1.451-2.38-1.451,0-1.674,1.133-1.674,2.305v4.451H4.762V4.475H7.439V5.7h.039A2.933,2.933,0,0,1,10.12,4.25c2.825,0,3.344,1.86,3.344,4.277v4.938Z"
                            transform="translate(452 7407)"
                            fill="#40171f"
                          />
                        </g>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a class="copylink" data-link="<?php the_permalink(); ?>">
                      <?php echo __("Copy the link", "hakiki-tra"); ?>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="50"
                        height="50"
                        viewBox="0 0 50 50"
                      >
                        <g
                          id="Groupe_21119"
                          data-name="Groupe 21119"
                          transform="translate(-434 -7389)"
                        >
                          <circle
                            id="Ellipse_2"
                            data-name="Ellipse 2"
                            cx="25"
                            cy="25"
                            r="25"
                            transform="translate(434 7389)"
                            fill="#40171f"
                            opacity="0.1"
                          />
                          <g
                            id="Icon_feather-link"
                            data-name="Icon feather-link"
                            transform="translate(449.813 7404.993)"
                          >
                            <path
                              id="Tracé_7109"
                              data-name="Tracé 7109"
                              d="M15,9.815a3.1,3.1,0,0,0,4.668.334l1.857-1.857a3.1,3.1,0,1,0-4.377-4.377L16.083,4.973"
                              transform="translate(-7.051)"
                              fill="none"
                              stroke="#40171f"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                            />
                            <path
                              id="Tracé_7110"
                              data-name="Tracé 7110"
                              d="M10.425,14.734A3.1,3.1,0,0,0,5.757,14.4L3.9,16.257a3.1,3.1,0,1,0,4.377,4.377l1.058-1.059"
                              transform="translate(0 -6.157)"
                              fill="none"
                              stroke="#40171f"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                            />
                          </g>
                        </g>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="singleActua-description">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="relatedArticles fade__up">
      <div class="relatedArticles-container">
        <div class="relatedArticles-content">
          <div class="left-side"><?php echo __("Take a look at", "hakiki-tra"); ?></div>

          <div class="right-side">
            <?php
              $loopFeatured = new WP_Query( array(
                  'post_type' => 'post',
                  'post__not_in' => [get_the_ID()],
                  'posts_per_page' => 2,
                )
              );
            ?>
            <?php while ( $loopFeatured->have_posts() ) : $loopFeatured->the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="actua-item">
                <div class="line">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/line-blocks.svg" alt="Line" />
                </div>
                <div class="date">
                  <?php if(get_field('date')): ?>
                    <h3><?php the_field('date'); ?></h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="1" viewBox="0 0 10 1">
                        <line id="Ligne_40" data-name="Ligne 40" x2="10" transform="translate(0 0.5)" fill="none" stroke="#1f2e4a" stroke-width="1"/>
                    </svg>
                  <?php endif; ?>
                  <h3><?php foreach(get_the_category($post->ID) as $category){ echo $category->name . ' '; } ?></h3>
                </div>
                <div class="title">
                  <?php the_title(); ?>
                </div>
                <div class="tag"><?php the_field('tag'); ?></div>
                <div class="read-more">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/actua-plus-blue.svg" alt="Actua Plus Blue" />
                  Ça m’intéresse
                </div>
              </a>
            <?php endwhile; wp_reset_query(); ?>
          </div>
        </div>
      </div>
    </section>

    <!-- End Single Actualite -->


<?php
get_footer();
