<?php
$content1_title = get_field('content-1_title');
$content1_text  = get_field('content-1_text');
$content1_image = get_field('content-1_image');
?>

<div class="content-1">
    <div class="container">
        <div class="text">
            <?php if ($content1_title) : ?>
            <h1><?= $content1_title ?></h1>
            <?php endif; ?>
            <?php if ($content1_text) : ?>
            <p><?= $content1_text; ?></p>
            <?php endif; ?>
            <div class="buttons">
                <?php
                if( have_rows('content-1_link') ):
                    while( have_rows('content-1_link') ) : the_row();
                    $link = get_sub_field('links');
                        $text = $link['title'];
                        $url  = $link['url']; 
                ?>
                <div class="button"><a href="<?= $url ?>"><?= $text ?></a></div>
                <?php
                    endwhile;
                else :
                endif; ?>
            </div>
        </div>
        <div class="smartphone">
            <?php if ($content1_image) : ?>
            <img src="<?= $content1_image['url'] ?>" alt="">
            <?php endif; ?>
        </div>
    </div>
</div>