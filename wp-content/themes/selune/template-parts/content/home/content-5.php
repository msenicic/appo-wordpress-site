<?php
$content5_title  = get_field('content-5_title');
$content5_text   = get_field('content-5_text');
$content5_image  = get_field('content-5_image');
?>

<div class="content-5">
    <div class="container">
        <div class="text">
            <?php if ($content5_title) : ?>
            <h2><?= $content5_title ?></h2>
            <?php endif; ?>
            <div class="check">
                <?php if( have_rows('content-5_list') ):
                    while( have_rows('content-5_list') ) : the_row();
                    $title = get_sub_field('title');
                    $check = get_sub_field('check');  
                    ?>
                <div class="phone">
                    <?= $check ?>
                    <p><?= $title ?></p>
                </div>
                <?php
                endwhile;
                else :
                endif; ?>
            </div>
            <?php if ($content5_text) : ?>
            <p><?= $content5_text ?></p>
            <?php endif; ?>
        </div>
        <div class="image">
            <?php if ($content5_image) : ?>
            <img src="<?= $content5_image['url'] ?>" alt="">
            <?php endif; ?>
        </div>
    </div>
</div>