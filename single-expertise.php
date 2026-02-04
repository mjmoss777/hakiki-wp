<?php get_header(); ?>

    <!-- Start Scroll Bottom Icon -->

    <div class="scroll-bottom-icon fade__in">
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

    <!-- Start Single Expertises -->

    <section class="singleExpertises">
        <div class="singleExpertises-hero fade__in">
            <div class="hero-container">
                <div class="title fade__up">
                    <h1>
                        <?php the_field('title'); ?>
                    </h1>
                </div>

                <div class="intro fade__up">
                    <?php the_field('intro'); ?>
                </div>
            </div>
            <div class="hero-linkedin fade__in">
                <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank" rel="noopener"> LinkedIn </a>
            </div>
            <?php 
                $args = array(
                    'post_type' => 'expertise',
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'posts_per_page' => -1
                );
                $savoirFairesQuery = new WP_Query($args);
                $savoirFaires = $savoirFairesQuery->posts;
                
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
                $navigation = getPostsNavigation(get_the_ID(),$savoirFaires);

                $next_url = get_permalink($navigation['next']);
                $prev_url = get_permalink($navigation['prev']);
            ?>
            <div class="expertises-switch fade__up">
                <a href="<?php echo $next_url; ?>">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="34.5"
                    height="68.998"
                    viewBox="0 0 34.5 68.998"
                >
                    <path
                    id="Tracé_82"
                    data-name="Tracé 82"
                    d="M106.96,263.947l18.675,34.5-18.675,34.5,34.5-34.5Z"
                    transform="translate(-106.96 -263.947)"
                    fill="#ffedde"
                    opacity="0.5"
                    />
                </svg>
                <h3>
                    <?php the_field('title', $navigation['next']); ?>
                </h3>
                </a>
            </div>
        </div>

        <div class="singleExpertises-about">
            <div class="singleExpertises-about-line fade__in">
                <img src="<?php echo get_template_directory_uri(); ?>/images/line-singleExpertises.svg" alt="Bg Line" />
            </div>
            <div class="singleExpertises-about-container">
                <div class="singleExpertises-about-content">
                    <div class="top fade__up">
                        <div class="left-side">
                            <?php the_content(); ?>
                        </div>
                        <div class="right-side">
                            <div class="image">
                                <img src="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()), 'full'); ?>" alt="<?php the_title(); ?>" />
                            </div>
                            <div class="description">
                                <p>
                                    <?php the_field('description_image'); ?>
                                </p>
                            </div>
                            <div class="list">
                                <p>
                                    <?php the_field('description_2'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bottom fade__up">
                        <div class="header-bottom">
                            <h3><?php the_field('title_blocks'); ?></h3>
                        </div>
                        <?php $countBlocks = count(get_field('blocks')); ?>
                        <?php if($countBlocks > 2): ?>
                            <div class="blocks-bottom">
                                <?php if( have_rows('blocks') ): ?>
                                    <?php while( have_rows('blocks') ): the_row(); 
                                        $description = get_sub_field('description');
                                        ?>
                                        <div class="item">
                                            <?php echo $description; ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        <?php else: ?>
                            <div class="blocks-bottom" style="width:970px;margin: 50px auto 0 auto;grid-template-columns: repeat(2, 1fr)">
                                <?php if( have_rows('blocks') ): ?>
                                    <?php while( have_rows('blocks') ): the_row(); 
                                        $description = get_sub_field('description');
                                        ?>
                                        <div class="item">
                                            <?php echo $description; ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="singleExpertises-statistics">
            <div class="statistics-container">
                <div class="statistics-content">
                    <div class="top fade__up">
                        <div class="left-side">
                            <?php the_field('description_chiffer'); ?>
                        </div>
                        <div class="right-side">
                            <h3><?php the_field('chiffre'); ?></h3>
                            <span><?php the_field('title_chiffer'); ?></span>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="left-side fade__up">
                            <div class="badge-hakiki fade__in">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/hero-bg.png" />
                            </div>
                            <div class="image fade__in">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-singleExpertises.svg" />
                            </div>
                        </div>
                        <div class="right-side fade__up">
                            <h3>
                                <?php the_field('title_2'); ?>
                            </h3>
                            <p></p>
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.svg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="domainesIntervention">
            <div class="domainesIntervention-container">
                <div class="domainesIntervention-content">
                    <div class="domainesIntervention-header fade__up">
                        <h3><?php echo __("Our fields of intervention", "hakiki-tra") ?></h3>
                    </div>
                    <div class="domainesIntervention-blocks fade__up">
                        <div class="left-side">
                            <?php if( have_rows('domaines_intervention') ): ?>
                                <?php $indexDM1 = 0; while( have_rows('domaines_intervention') ): the_row(); $indexDM1++;
                                    $title = get_sub_field('title');
                                    $description = get_sub_field('description');
                                    $class = (!empty($description)) ? "item-with-content" : "item-without-content";
                                    ?>
                                    <div class="item <?php echo $class; ?>" data-item="item<?php echo $indexDM1; ?>">
                                        <h4><?php echo $title; ?></h4>
                                        <?php if($description !== ""): ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-singleExpertises-list.svg" />
                                        <?php endif; ?>
                                    </div>
                                    <?php if($description !== ""): ?>
                                        <div class="item-content">
                                            <p>
                                                <?php echo $description; ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="right-side">
                            <?php if( have_rows('domaines_intervention') ): ?>
                                <?php $indexDM2 = 0; while( have_rows('domaines_intervention') ): the_row(); $indexDM2++;
                                    $description = get_sub_field('description');
                                    ?>
                                    <?php if($description !== ""): ?>
                                        <div class="item-content <?php if($indexDM2 === 1): echo "active"; endif; ?>" id="item<?php echo $indexDM2; ?>">
                                            <p>
                                                <?php echo $description; ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Single Expertises -->

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