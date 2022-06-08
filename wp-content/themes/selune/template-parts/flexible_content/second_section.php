<?php
$text  = get_sub_field('text');
$image = get_sub_field('image');
?>
<section class="section second-section">
    <h2><?= $text ?></h2>

    <?php
    if (have_rows('super_table')) :

        while (have_rows('super_table')) : the_row();
        $link = get_sub_field('link'); ?>

    <a href="<?= $link ?>"><?= $link ?></a>
    <?php    
        endwhile;
    endif; ?>
</section>