<?php
$content7_title  = get_field('content-7_title');
$content7_text   = get_field('content-7_text');
$content7_link   = get_field('content-7_link');
$content7_image  = get_field('content-7_image');
?>

<div class="content-7">
    <div class="container">
        <?php if ($content7_image) : ?>
        <img src="<?= $content7_image['url'] ?>" alt="">
        <?php endif; ?>
        <div class="text">
            <?php if ($content7_title) : ?>
            <h2><?= $content7_title ?></h2>
            <?php endif; ?>
            <?php if ($content7_text) : ?>
            <p><?= $content7_text ?></p>
            <?php endif; ?>
            <?php if( $content7_link ): 
                $link_url = $content7_link['url'];
                $link_title = $content7_link['title'];
            ?>
            <div class="button"><a href="<?= $link_url ?>"><?= $link_title ?></a></div>
            <?php endif; ?>
        </div>
    </div>
</div>