<?php
/**
 * Header for pages
 * Custom header image functionality
 * @package WordPress
 */

/**
 * @return mixed|string in case there is a image array in field, returns random image from it, otherwise returns random.jpg from images
 *
 */
function randomHeaderImage() {

    $images = array();

    if( have_rows('imgs', 'options') ):
        while( have_rows('imgs', 'options')): the_row();
            $image = get_sub_field('img');

            array_push($images, $image);
        endwhile;
        $random_counter = rand(0, count($images)-1);

    endif;
    if( !empty($images) ) return $images[$random_counter];
    else return SELUNE_BUILD_IMG_URI . '/placeholder.jpg';
}

/**
 * Custom header for home page
 * Change name of images that show up by default if nothing is selected (from random.jpg)
 */
function headerHomePage() { ?>

<section class="section header-section header-overlay">
    <div class="wrapper">
        <div class="header-title">
            <h1 class="title">
                Header Home Page Title
            </h1>
        </div>
    </div>
</section>
<?php
}

/**
 * Custom header for all other pages
 * Change name of images that show up by default if nothing is selected (from random.jpg)
 */
function headerPage() { ?>

<section class="section header-section header-overlay">
    <div class="wrapper">
        <div class="header-title">
            <h1 class="title">
                Header Title
            </h1>
        </div>
    </div>
</section>
<?php
}