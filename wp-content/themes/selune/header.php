<?php
/**
 * @package selune
 */
global $globalSite;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="icon" href="<?= SELUNE_BUILD_IMG_URI . '/favicon.ico'; ?>" type="image/x-icon" />

    <?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8a391c339d.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
    <?php
include (locate_template('template-parts/globals/svg-icons/index.php', false, true)); ?>
    <div id="page" class="site">
        <div class="m-overlay"></div>
        <!--<header id="masthead" class="site-header" role="banner">
            <div class="wrapper">
                <a href="<?php _e( home_url( '/' ) ); ?>" id="brand" class="site-logo">
                    </!--<img src="<?= $site_logo['url'] ?>" style="height: 30px">--/>
                </a>
                <button id="menu-button" class="site-menu-button v1">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <nav id="site-navigation" class="site-navigation" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
                </nav>
            </div>
        </header>-->
        <?php
            $site_logo = get_field('site_logo', 'option');
            $btn_text  = get_field('btn_text', 'option');
        ?>
        <header>
            <div class="container">
                <div class="logo">
                    <div class="img">
                        <a href="<?php _e( home_url( '/' ) ); ?>"><img src="<?= $site_logo['url'] ?>" alt="Logo"></a>
                    </div>
                    <div id="list">
                        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
                    </div>
                    <div class="bars">
                        <?php if( $btn_text ): 
                        $url = $btn_text['url'];
                        $title = $btn_text['title'];
                        ?>
                        <div class="button"><a href="<?= $url ?>"><?= $title ?></a></div>
                        <?php endif; ?>
                        <div class="bar"><i class="fas fa-bars"></i></div>
                    </div>
                </div>
                <div class="list">
                    <ul>
                        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
                        <?php if( $btn_text ): 
                        $url = $btn_text['url'];
                        $title = $btn_text['title'];
                        ?>
                        <div class="button"><a href="<?= $url ?>"><?= $title ?></a></div>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </header>