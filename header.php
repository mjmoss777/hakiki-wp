<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hakiki-wp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<style>
  #loading-screen {
    position: fixed;
    width: 100%;
    height: 100%;
    background: white; /* ou une couleur de ton choix */
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    font-weight: bold;
  }
</style>

<script>
  // OLD: 5-second forced delay - commented for performance
  // document.addEventListener("DOMContentLoaded", function () {
  //   setTimeout(function () {
  //     document.getElementById("loading-screen").style.display = "none";
  //   }, 5000);
  // });
  // NEW: Hide loading screen when page is fully loaded
  window.addEventListener("load", function () {
    document.getElementById("loading-screen").style.display = "none";
  });
</script>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="google-site-verification" content="wWcQQj041YD58mWeMVqtLbrB29h9qGm-10vY_V-C8Wc" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Preconnect hints for performance -->
	<link rel="preconnect" href="https://use.typekit.net" crossorigin>
	<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
	<link rel="preconnect" href="https://prod.spline.design" crossorigin>
	<!-- Css Files -->
	<link rel="stylesheet" href="https://use.typekit.net/aup2xuc.css" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" /> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Écran de chargement -->
<div id="loading-screen">
</div>
<?php wp_body_open(); ?>
    <!-- Start Header -->

    <header>
      <div class="header-container">
        <div class="header-content">
          <div class="logo">
            <a href="<?php echo get_home_url(); ?>">
              <svg
                id="Groupe_31"
                data-name="Groupe 31"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="151.225"
                height="45"
                viewBox="0 0 151.225 45"
              >
                <defs>
                  <clipPath id="clip-path">
                    <rect
                      id="Rectangle_6"
                      data-name="Rectangle 6"
                      width="151.225"
                      height="45"
                      fill="none"
                    />
                  </clipPath>
                  <clipPath id="clip-path-3">
                    <path
                      id="Tracé_4"
                      data-name="Tracé 4"
                      d="M0,2.134a3.392,3.392,0,0,1,1.541,1.5,7.327,7.327,0,0,1,.513,3.19V41.342a7.337,7.337,0,0,1-.513,3.191A3.384,3.384,0,0,1,0,46.034v.22l2.036-.315a3.916,3.916,0,0,0,3.318-3.87V6.1a3.916,3.916,0,0,0-3.318-3.87L0,1.914Z"
                      transform="translate(0 -1.914)"
                      fill="none"
                    />
                  </clipPath>
                  <clipPath id="clip-path-4">
                    <path
                      id="Tracé_5"
                      data-name="Tracé 5"
                      d="M134.949,1.914l5.012,41.344a2.616,2.616,0,0,0,1.922,2.213l2.934.784v-.22q-1.394-.806-1.76-4.326L138,1.914Z"
                      transform="translate(-134.949 -1.914)"
                      fill="none"
                    />
                  </clipPath>
                  <clipPath id="clip-path-5">
                    <path
                      id="Tracé_6"
                      data-name="Tracé 6"
                      d="M96.656,163.908h4.2v-.22a3.717,3.717,0,0,1-2.347-2.2,12.064,12.064,0,0,1-.733-4.694,33.518,33.518,0,0,1,.22-3.667l1.121-9.151Z"
                      transform="translate(-96.656 -143.976)"
                      fill="none"
                    />
                  </clipPath>
                </defs>
                <g
                  id="Groupe_11"
                  data-name="Groupe 11"
                  clip-path="url(#clip-path)"
                >
                  <g id="Groupe_2" data-name="Groupe 2">
                    <g
                      id="Groupe_1"
                      data-name="Groupe 1"
                      clip-path="url(#clip-path)"
                    >
                      <path
                        id="Tracé_1"
                        data-name="Tracé 1"
                        d="M121.449,41.709,116.389,1.914H110.6l.147,1.32q.145,1.468.146,2.787,0,.881-.146,2.787l-1.883,14.566h.725l1.965-16.033,3.74,32.167q.145,2.054.146,2.566a6.123,6.123,0,0,1-.44,2.64,2.777,2.777,0,0,1-1.54,1.32v.22h9.754v-.22q-1.394-.806-1.76-4.326"
                        transform="translate(-90.155 -1.585)"
                        fill="#c6966b"
                      />
                      <path
                        id="Tracé_2"
                        data-name="Tracé 2"
                        d="M22.14,24.482H8.654V6.828a7.324,7.324,0,0,1,.513-3.19,3.391,3.391,0,0,1,1.541-1.5v-.22H0v.22a3.4,3.4,0,0,1,1.541,1.5,7.349,7.349,0,0,1,.513,3.19V41.342a7.361,7.361,0,0,1-.513,3.191A3.4,3.4,0,0,1,0,46.034v.22H10.708v-.22a3.385,3.385,0,0,1-1.541-1.5,7.335,7.335,0,0,1-.513-3.191V25.215H22.209Z"
                        transform="translate(0 -1.585)"
                        fill="#c6966b"
                      />
                      <path
                        id="Tracé_3"
                        data-name="Tracé 3"
                        d="M85.264,153.127a41.249,41.249,0,0,1-1.283,7.151q-.845,2.9-1.723,3.409v.22h6.673v-.22a3.717,3.717,0,0,1-2.346-2.2,12.063,12.063,0,0,1-.733-4.694,33.557,33.557,0,0,1,.219-3.667l1.121-9.151h-.745Z"
                        transform="translate(-68.125 -119.238)"
                        fill="#c6966b"
                      />
                    </g>
                  </g>
                  <g
                    id="Groupe_4"
                    data-name="Groupe 4"
                    transform="translate(0 0.329)"
                  >
                    <g
                      id="Groupe_3"
                      data-name="Groupe 3"
                      clip-path="url(#clip-path-3)"
                    >
                      <image
                        id="Rectangle_2"
                        data-name="Rectangle 2"
                        width="5.525"
                        height="44.717"
                        transform="translate(0 -0.442)"
                        xlink:href="data:image/png;base64,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"
                      />
                    </g>
                  </g>
                  <g
                    id="Groupe_6"
                    data-name="Groupe 6"
                    transform="translate(23.187 0.329)"
                  >
                    <g
                      id="Groupe_5"
                      data-name="Groupe 5"
                      clip-path="url(#clip-path-4)"
                    >
                      <image
                        id="Rectangle_3"
                        data-name="Rectangle 3"
                        width="9.414"
                        height="41.326"
                        transform="translate(0.348 -0.442)"
                        xlink:href="data:image/png;base64,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"
                      />
                    </g>
                  </g>
                  <g
                    id="Groupe_8"
                    data-name="Groupe 8"
                    transform="translate(16.607 24.738)"
                  >
                    <g
                      id="Groupe_7"
                      data-name="Groupe 7"
                      clip-path="url(#clip-path-5)"
                    >
                      <image
                        id="Rectangle_4"
                        data-name="Rectangle 4"
                        width="4.446"
                        height="20.005"
                        transform="translate(-0.133 -0.139)"
                        xlink:href="data:image/png;base64,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"
                      />
                    </g>
                  </g>
                  <g id="Groupe_10" data-name="Groupe 10">
                    <g
                      id="Groupe_9"
                      data-name="Groupe 9"
                      clip-path="url(#clip-path)"
                    >
                      <path
                        id="Tracé_7"
                        data-name="Tracé 7"
                        d="M235.586,2.065c-1.852,0-1.961,1.362-1.961,3.378V18.191c0,2.016.109,3.378,1.961,3.378v.163h-6.973v-.163c1.852,0,1.961-1.362,1.961-3.378V11.708h-7.627v6.483c0,2.016.109,3.378,1.961,3.378v.163h-6.973v-.163c1.852,0,1.961-1.362,1.961-3.378V5.443c0-2.016-.109-3.378-1.961-3.378V1.9h6.973v.163c-1.852,0-1.961,1.362-1.961,3.378v5.775h7.627V5.443c0-2.016-.109-3.378-1.961-3.378V1.9h6.973Z"
                        transform="translate(-180.49 -1.575)"
                        fill="#f6f6f6"
                      />
                      <path
                        id="Tracé_8"
                        data-name="Tracé 8"
                        d="M338.22,16.67c.79,2.234,1.335,3.214,2.478,3.323v.163h-6.973v-.163c1.526-.109,2.043-1.144,1.526-2.588l-1.417-4H327.76l-.545,1.5c-1.144,3.214-.953,4.876.9,5.094v.163h-4.576v-.163c1.307-.164,1.988-1.989,3.16-5.257L332.009,0h.218Zm-10.242-3.922h5.639l-2.805-7.954Z"
                        transform="translate(-267.948)"
                        fill="#f6f6f6"
                      />
                      <path
                        id="Tracé_9"
                        data-name="Tracé 9"
                        d="M431.215,18.191c0,2.016.109,3.378,1.961,3.378v.163H426.2v-.163c1.852,0,1.961-1.362,1.961-3.378V5.443c0-2.016-.109-3.378-1.961-3.378V1.9h6.973v.164c-1.852,0-1.961,1.362-1.961,3.378Zm3.024-8.2c4.931,7.654,7.491,11.25,8.907,11.577v.163a25.914,25.914,0,0,1-2.723.109c-2.343,0-3.378-1.852-8.5-9.915L436.8,6.179c1.171-1.362,1.689-2.234,1.689-3a1.112,1.112,0,0,0-1.062-1.117V1.9h5.23v.164c-.927.163-2.915,1.471-5.448,4.44Z"
                        transform="translate(-352.973 -1.575)"
                        fill="#f6f6f6"
                      />
                      <path
                        id="Tracé_10"
                        data-name="Tracé 10"
                        d="M527.382,21.732v-.163c1.852,0,1.961-1.362,1.961-3.378V5.443c0-2.016-.109-3.378-1.961-3.378V1.9h6.973v.163c-1.852,0-1.962,1.362-1.962,3.378V18.191c0,2.016.109,3.378,1.962,3.378v.163Z"
                        transform="translate(-436.768 -1.575)"
                        fill="#f6f6f6"
                      />
                      <path
                        id="Tracé_11"
                        data-name="Tracé 11"
                        d="M577.783,18.191c0,2.016.109,3.378,1.961,3.378v.163h-6.973v-.163c1.852,0,1.961-1.362,1.961-3.378V5.443c0-2.016-.109-3.378-1.961-3.378V1.9h6.973v.164c-1.852,0-1.961,1.362-1.961,3.378Zm3.024-8.2c4.93,7.654,7.49,11.25,8.907,11.577v.163a25.915,25.915,0,0,1-2.724.109c-2.343,0-3.378-1.852-8.5-9.915l4.876-5.748c1.171-1.362,1.689-2.234,1.689-3a1.112,1.112,0,0,0-1.062-1.117V1.9h5.23v.164c-.927.163-2.915,1.471-5.448,4.44Z"
                        transform="translate(-474.358 -1.575)"
                        fill="#f6f6f6"
                      />
                      <path
                        id="Tracé_12"
                        data-name="Tracé 12"
                        d="M673.949,21.732v-.163c1.852,0,1.961-1.362,1.961-3.378V5.443c0-2.016-.109-3.378-1.961-3.378V1.9h6.973v.163c-1.852,0-1.962,1.362-1.962,3.378V18.191c0,2.016.109,3.378,1.962,3.378v.163Z"
                        transform="translate(-558.152 -1.575)"
                        fill="#f6f6f6"
                      />
                      <path
                        id="Tracé_13"
                        data-name="Tracé 13"
                        d="M227.545,159.355c.79,2.233,1.335,3.214,2.478,3.323v.164H223.05v-.164c1.525-.109,2.043-1.144,1.525-2.588l-1.416-4h-6.074l-.545,1.5c-1.144,3.214-.953,4.876.9,5.094v.164h-4.576v-.164c1.307-.163,1.988-1.988,3.16-5.257l5.312-14.737h.218ZM217.3,155.432h5.639l-2.805-7.954Z"
                        transform="translate(-176.289 -118.168)"
                        fill="#f6f6f6"
                      />
                      <path
                        id="Tracé_14"
                        data-name="Tracé 14"
                        d="M316.455,162.051l-.163-4.494h.163c1.2,3.432,3.078,5.23,5.612,5.23a3.853,3.853,0,0,0,4.059-3.922c0-2.479-1.961-3.514-4.25-4.631l-1.389-.681c-1.825-.9-3.786-2.179-3.786-5.23a5.465,5.465,0,0,1,5.693-5.639,13.539,13.539,0,0,1,4.9,1.09v3.541h-.164c-1.226-2.942-2.833-4.249-4.9-4.249a3.432,3.432,0,0,0-3.623,3.677c0,2.288,1.743,3.132,3.405,3.949l1.389.681c2.37,1.171,4.63,2.452,4.63,5.8,0,3.432-2.56,5.993-6.374,5.993a13.567,13.567,0,0,1-5.2-1.117"
                        transform="translate(-261.947 -118.168)"
                        fill="#f6f6f6"
                      />
                      <path
                        id="Tracé_15"
                        data-name="Tracé 15"
                        d="M392.125,162.051l-.163-4.494h.163c1.2,3.432,3.078,5.23,5.612,5.23a3.853,3.853,0,0,0,4.059-3.922c0-2.479-1.961-3.514-4.25-4.631l-1.389-.681c-1.825-.9-3.786-2.179-3.786-5.23a5.465,5.465,0,0,1,5.693-5.639,13.539,13.539,0,0,1,4.9,1.09v3.541H402.8c-1.226-2.942-2.833-4.249-4.9-4.249a3.432,3.432,0,0,0-3.623,3.677c0,2.288,1.743,3.132,3.405,3.949l1.389.681c2.37,1.171,4.631,2.452,4.631,5.8,0,3.432-2.56,5.993-6.374,5.993a13.568,13.568,0,0,1-5.2-1.117"
                        transform="translate(-324.616 -118.168)"
                        fill="#f6f6f6"
                      />
                      <path
                        id="Tracé_16"
                        data-name="Tracé 16"
                        d="M466.648,152.981c0-6.1,3.6-10.3,8.989-10.3,5.448,0,8.935,3.977,8.935,10.188,0,6.1-3.6,10.3-8.99,10.3-5.448,0-8.934-3.977-8.934-10.188m14.545-.054c0-5.5-1.907-9.861-5.612-9.861s-5.556,4.195-5.556,9.861c0,5.5,1.906,9.86,5.611,9.86s5.557-4.195,5.557-9.86"
                        transform="translate(-386.469 -118.168)"
                        fill="#f6f6f6"
                      />
                      <path
                        id="Tracé_17"
                        data-name="Tracé 17"
                        d="M578.812,152.981c0-6.1,3.95-10.3,9.37-10.3a12.264,12.264,0,0,1,5.884,1.471l.163,3.759h-.163c-1.308-3.051-3.16-4.848-5.993-4.848-3.6,0-5.884,4.195-5.884,9.861s2.342,9.86,5.884,9.86c2.833,0,4.9-1.907,6.211-5.339h.163l-.491,4.359a12.978,12.978,0,0,1-5.775,1.362c-5.42,0-9.37-3.923-9.37-10.188"
                        transform="translate(-479.361 -118.168)"
                        fill="#f6f6f6"
                      />
                      <path
                        id="Tracé_18"
                        data-name="Tracé 18"
                        d="M673.235,164.417v-.164c1.852,0,1.962-1.362,1.962-3.378V148.128c0-2.016-.109-3.378-1.962-3.378v-.163h6.973v.163c-1.852,0-1.961,1.362-1.961,3.378v12.748c0,2.016.109,3.378,1.961,3.378v.164Z"
                        transform="translate(-557.561 -119.744)"
                        fill="#f6f6f6"
                      />
                      <path
                        id="Tracé_19"
                        data-name="Tracé 19"
                        d="M734.68,123.621l-.654,4.821H720.052v-.164c1.852,0,1.961-1.362,1.961-3.378V112.153c0-2.016-.109-3.378-1.961-3.378v-.163h13.565l.354,4.3h-.163c-1.5-3.187-2.506-3.868-5.5-3.868h-3.242V117.9h2.479c2.534,0,3.187-.681,3.732-2.7h.163v6.047h-.163c-.545-2.016-1.2-2.915-3.732-2.915h-2.479v8.39c0,.817.245,1.28,1.09,1.28h2.534c2.833,0,4.086-.6,5.829-4.385Zm-8.254-16.48-.109-.054c.708-1.634,1.689-4.767,2.043-5.339a1.182,1.182,0,0,1,.981-.6,1.152,1.152,0,0,1,.98,1.825c-.354.572-2.724,2.806-3.9,4.168"
                        transform="translate(-596.334 -83.769)"
                        fill="#f6f6f6"
                      />
                      <path
                        id="Tracé_20"
                        data-name="Tracé 20"
                        d="M811.974,162.051l-.163-4.494h.163c1.2,3.432,3.078,5.23,5.612,5.23a3.853,3.853,0,0,0,4.058-3.922c0-2.479-1.961-3.514-4.249-4.631l-1.389-.681c-1.825-.9-3.787-2.179-3.787-5.23a5.466,5.466,0,0,1,5.693-5.639,13.542,13.542,0,0,1,4.9,1.09v3.541h-.164c-1.226-2.942-2.833-4.249-4.9-4.249a3.432,3.432,0,0,0-3.623,3.677c0,2.288,1.743,3.132,3.4,3.949l1.39.681c2.37,1.171,4.631,2.452,4.631,5.8,0,3.432-2.561,5.993-6.374,5.993a13.569,13.569,0,0,1-5.2-1.117"
                        transform="translate(-672.327 -118.168)"
                        fill="#f6f6f6"
                      />
                    </g>
                  </g>
                </g>
              </svg>
            </a>
          </div>
          <div class="navbar">
            <ul>
              <li>
                <a href="<?php echo get_home_url(); ?>#team" data-target="team" class="nav-link <?php if(is_single() && 'avocat' == get_post_type()): echo "active"; endif; ?>"> 
                  <?php echo __("Team", "hakiki-tra"); ?>
                </a>
              </li>
              <li class="dropdown">
                <a href="<?php echo get_home_url(); ?>#expertises" data-target="expertises" class="nav-link <?php if(is_single() && 'expertise' == get_post_type()): echo "active"; endif; ?>"> 
                  <?php echo __("Expertise", "hakiki-tra"); ?>
                </a>
                <!-- <div class="expertises_all">
                  <?php
                    $loopHeaderExpertises = new WP_Query( array(
                        'post_type' => 'expertise',
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                        'posts_per_page' => -1
                      )
                    );
                  ?>

                  <?php while ( $loopHeaderExpertises->have_posts() ) : $loopHeaderExpertises->the_post(); ?>

                    <div class="expertise">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_field('title'); ?>
                      </a>
                    </div>

                  <?php endwhile; wp_reset_query(); ?>
                </div> -->
              </li>
              <li>
                <a href="<?php the_permalink(94); ?>" class="<?php if(is_single() && 'post' == get_post_type() || is_page(94) || is_page(453)): echo "active"; endif; ?>"> 
                  <?php echo __("News", "hakiki-tra"); ?>
                </a>
              </li>
              <li>
                <a href="<?php the_permalink(97); ?>" class="<?php if(is_page(97) || is_page(452)): echo "active"; endif; ?>"> 
                  <?php echo __("Careers", "hakiki-tra"); ?>
                </a>
              </li>
            </ul>
          </div>
          <div class="cta">
            <!-- <ul>
              <li><a class="active">FR</a></li>
              <li><a>EN</a></li>
            </ul> -->
            <ul>
                <?php
                  function language_header()
                  {
                      $languages = icl_get_languages('skip_missing=0&orderby=code');
                      if (!empty($languages)) {
                          $class_current = '';
                          foreach ($languages as $l) {
                              if ($l['active']) {
                                  echo '<li ><a class="active" href="' . $l['url'] . ' ">' . $l['native_name'] . '</a></li>';
                              } else {
                                  echo '<li><a href="' . $l['url'] . '">' . $l['native_name'] . '</a></li>';
                              }
                          }
                      }
                  }
                ?>
                <?php language_header(); ?>
            </ul>

            <div class="btn-contact">
              <a href="#contact" data-target="contact" class="nav-link"><?php echo __("Contact us", "hakiki-tra"); ?></a>
            </div>
          </div>
          <div class="burger-btn">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </header>

    <!-- End Header -->