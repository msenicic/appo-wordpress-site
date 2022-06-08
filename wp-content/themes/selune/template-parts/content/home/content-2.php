<?php
$content2_title = get_field('content-2_title');
?>

<div class="content-2">
    <div class="container">
        <div class="title">
            <?php if ($content2_title) : ?>
            <h2><?= $content2_title ?></h2>
            <?php endif; ?>
        </div>
        <div class="line"></div>
        <div class="blocks">
            <?php
                if( have_rows('content-2_block') ):
                    while( have_rows('content-2_block') ) : the_row();
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $text  = get_sub_field('text'); 
                ?>
            <div class="block">
                <img src="<?= $image['url'] ?>" alt="">
                <h4><?= $title ?></h4>
                <p><?= $text ?></p>
            </div>
            <?php
                    endwhile;
                else :
                endif;
            ?>
        </div>
    </div>
</div>