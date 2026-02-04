<?php get_header(); ?>

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

    <!-- Start Single Team Page -->

    <section class="singleTeam">
        <?php 
          $args = array(
            'post_type' => 'avocat',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' => -1,
            'meta_query'     => array(
              'relation' => 'OR', // Define the relationship between the conditions
              array(
                  'key'     => 'no_bio',
                  'compare' => 'NOT EXISTS', // Check if the key doesn't exist
              ),
              array(
                  'key'     => 'no_bio',
                  'value'   => '1',
                  'compare' => '!=', // Check if the value is not equal to 1
              ),
            ),
          );
          $teamQuery = new WP_Query($args);
          $teamAll = $teamQuery->posts;
          
          function getPostsNavigation($idx,$posts) {
              $len = count($posts);
              $currentPostIndex = 0;
              for ($i = 0; $i < $len - 1; $i++) {
                  if($posts[$i]->ID == $idx){
                      $currentPostIndex = $i;
                      break;
                  }
                  $currentPostIndex++;
              }
              $prevPostIndex = $currentPostIndex - 1;
              $nextPostIndex = $currentPostIndex + 1;

              if($prevPostIndex < 0){
                  $prevPostIndex = $len - 1;
              }
              if($nextPostIndex > $len - 1){
                  $nextPostIndex = 0;
              }

              $nextPostID = $posts[$nextPostIndex]->ID;
              $prevPostID = $posts[$prevPostIndex]->ID;

              return array('next' => $nextPostID, 'prev' => $prevPostID);
          }
          $navigation = getPostsNavigation(get_the_ID(), $teamAll);

          $next_url = get_permalink($navigation['next']);
          $prev_url = get_permalink($navigation['prev']);
        ?>
      <div class="switch-singleTeam fade__in">
        <a href="<?php echo $prev_url; ?>" class="switch-button-prev">
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
        </a>
        <a href="<?php echo $next_url; ?>" class="switch-button-next">
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
        </a>
      </div>
      <div class="top fade__in">
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
        <div class="badge-hakiki">
          <img src="<?php echo get_template_directory_uri(); ?>/images/hero-bg.png" />
        </div>
        <div class="top-container">
          <div class="top-content ">
            <div class="top-left fade__up">
              <h1><?php the_field('first_name'); ?></h1>
              <div class="last-name">
                <h2><?php the_field('last_name'); ?></h2>
                <span><?php the_field('statut'); ?></span>
              </div>
              <ul>
                <?php if(get_field('linkedin')): ?>
                    <li>
                        <a href="<?php the_field('linkedin'); ?>" target="_blank">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="13.464"
                            height="13.464"
                            viewBox="0 0 13.464 13.464"
                            >
                            <path
                                id="Icon_awesome-linkedin-in"
                                data-name="Icon awesome-linkedin-in"
                                d="M3.014,13.464H.222V4.475H3.014ZM1.617,3.249A1.624,1.624,0,1,1,3.233,1.617,1.63,1.63,0,0,1,1.617,3.249ZM13.461,13.464H10.676V9.089c0-1.043-.021-2.38-1.451-2.38-1.451,0-1.674,1.133-1.674,2.305v4.451H4.762V4.475H7.439V5.7h.039A2.933,2.933,0,0,1,10.12,4.25c2.825,0,3.344,1.86,3.344,4.277v4.938Z"
                                transform="translate(0 0)"
                                fill="#f6f6f6"
                            />
                            </svg>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if(get_field('mobile')): ?>
                    <li>
                        <a href="tel:<?php the_field('mobile'); ?>">
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
                                fill="#f6f6f6"
                            />
                            </svg>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if(get_field('mail')): ?>
                    <li>
                        <a href="mailto:<?php the_field('mail'); ?>">
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
                                stroke="#f6f6f6"
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
                                stroke="#f6f6f6"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1"
                                />
                            </g>
                            </svg>
                        </a>
                    </li>
                <?php endif; ?>
              </ul>
              <div class="singleTeam-expertise">
                <?php if( have_rows('expertises') ): ?>
                    <?php while( have_rows('expertises') ): the_row(); 
                        $title = get_sub_field('title');
                        ?>
                        <div class="item-expertise"><?php echo $title; ?></div>
                    <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
            <div class="top-right fade__up">
              <div class="image">
                <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()), 'full'); ?>" alt="<?php the_title(); ?>" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom">
        <div class="bottom-container">
          <div class="bottom-content">
            <div class="bottom-left fade__up">
              <div class="intro">
                <h3><?php the_field('intro'); ?></h3>
              </div>
              <div class="description">
                <?php the_content(); ?>
              </div>
            </div>
            <div class="bottom-right fade__up">
                <?php if(get_field('associations')): ?>
                    <div class="associations">
                        <h3>Associations</h3>
                        <?php the_field('associations'); ?>
                    </div>
                <?php endif; ?>
                <?php if( have_rows('langues') ): ?>
                    <div class="langues">
                        <?php if(count(get_field('langues')) > 1): ?>
                          <h3><?php echo __("Languages", "hakiki-tra"); ?></h3>
                        <?php endif; ?>
                        <?php if(count(get_field('langues')) === 1): ?>
                          <h3><?php echo __("Language", "hakiki-tra"); ?></h3>
                        <?php endif; ?>
                        <ul>
                            <?php while( have_rows('langues') ): the_row();  $lang = get_sub_field('lang'); ?>
                                <li><?php echo $lang; ?></li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
          </div>

            <?php if( have_rows('formations') ): ?>
                <div class="formation fade__up">
                  <h3><?php echo __("Educations", "hakiki-tra"); ?></h3>
                  <ul>
                      <?php while( have_rows('formations') ): the_row();  $title = get_sub_field('title'); ?>
                          <li><?php echo $title; ?></li>
                      <?php endwhile; ?>
                  </ul>
                </div>
            <?php endif; ?>

            <?php if( have_rows('experiences') ): ?>
                <div class="experiences fade__up">
                  <?php if(count(get_field('experiences')) > 1): ?>
                    <h3><?php echo __("Professional experiences", "hakiki-tra"); ?></h3>
                  <?php endif; ?>
                  <?php if(count(get_field('experiences')) === 1): ?>
                    <h3><?php echo __("Professional experience", "hakiki-tra"); ?></h3>
                  <?php endif; ?>
                  <ul>
                      <?php while( have_rows('experiences') ): the_row();  $title = get_sub_field('title'); ?>
                          <li><?php echo $title; ?></li>
                      <?php endwhile; ?>
                  </ul>
                </div>
            <?php endif; ?>

        </div>
      </div>
    </section>

    <!-- End Single Team Page -->

    <!-- Start Carrières Section -->

    <section class="carrieres">
      <div class="carriers-container">
        <div class="carriers-content fade__in">
          <div class="carriers-header fade__up">
            <h2><?php echo __("Careers", "hakiki-tra"); ?></h2>
            <div class="subtitle">
              <h3><?php the_field('title_carrieres', 'option'); ?></h3>
            </div>
          </div>
          <div class="carriers-body fade__up">
            <p></p>
            <a href="<?php the_permalink(97); ?>"> <?php the_field('cta_carrieres', 'option'); ?> </a>
          </div>
        </div>
      </div>
    </section>

    <!-- End Carrières Section -->

<?php get_footer(); ?>