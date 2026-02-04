<?php 

    /**
     * Template name: Actualites
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

    <!-- Start Actualites Page -->

    <section class="actuaPage">
      <div class="actuaPage-featured fade__in">
        <div class="line">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1187.019" height="605.476" viewBox="0 0 1187.019 605.476">
            <defs>
              <linearGradient id="linear-gradient" x1="-0.076" y1="3.038" x2="1.157" y2="1.218" gradientUnits="objectBoundingBox">
                <stop offset="0" stop-color="#40171f"/>
                <stop offset="0.153" stop-color="#fff6ef"/>
                <stop offset="0.517" stop-color="#bf9166"/>
                <stop offset="1" stop-color="#fff"/>
              </linearGradient>
            </defs>
            <rect id="Rectangle_23" data-name="Rectangle 23" width="1331.713" height="1" transform="matrix(0.891, 0.454, -0.454, 0.891, 0.454, 0)" opacity="0.1" fill="url(#linear-gradient)"/>
          </svg>
        </div>
        <div class="featured-container">
          <div class="featured-content fade__up">
            <h1><?php echo __("Headline news", "hakiki-tra") ?></h1>
            <?php
              $loopFeatured = new WP_Query( array(
                  'post_type' => 'post',
                  'meta_query' => array(
                    array(
                      'key'   => 'a_la_une',
                      'value' =>  1,
                      'compare' => '='
                    )
                    ),
                  'posts_per_page' => 1,
                )
              );
            ?>
            <?php while ( $loopFeatured->have_posts() ) : $loopFeatured->the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="featured-item">
                <div class="image">
                  <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()), 'full'); ?>" alt="<?php the_title(); ?>" />
                </div>
                <div class="item-header">
                  <span><?php the_field('date'); ?></span>
                  <h3>
                    <?php the_title(); ?>
                  </h3>
                </div>
                <div class="item-body">
                  <small><?php foreach(get_the_category($post->ID) as $category){ echo $category->name . ' '; }?></small>
                  <div class="author">
                    <h4><?php the_field('author'); ?></h4>
                    <div class="read-more">
                      <span><?php echo __("I’m interested", "hakiki-tra"); ?></span>
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
            <?php endwhile; wp_reset_query(); ?>
          </div>
        </div>
      </div>

      <div class="actuaPage-container">
        <div class="actuaPage-content">
          <div class="filters">
            <ul>
              <?php $categories = get_categories(); ?>
              <li data-category="all" class="active"><?php echo __("All", "hakiki-tra"); ?></li>
              <?php foreach ($categories as $category): ?>
                <li data-category-slug="<?php echo $category->slug ?>" data-category="<?php echo $category->cat_ID ?>"><?php echo $category->name; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="grid-actua">
          </div>
        </div>
      </div>
    </section>

    <!-- End Actualites Page -->


<?php get_footer(); ?>