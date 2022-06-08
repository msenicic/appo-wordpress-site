<?php
/* Template Name: About */
get_header(); ?>
<div id="content" class="site-content">
    <?php
        headerPage(); ?>
    <main id="main" class="page-main site-main" role="main">
        <?php
        if( have_rows('repeater') ):
            while( have_rows('repeater') ) : the_row();
                $text = get_sub_field('text');
                $number = get_sub_field('number'); ?>


        <h1>Text: <?= $text ?></h1>
        <h2>Number: <?= $number ?></h2>
        <br>
        <br>

        <?php
            endwhile;
        else :
        endif; ?>
    </main>
</div>
<?php
get_footer();