<?php
$content4_title   = get_field('content-4_title');
$content4_text    = get_field('content-4_text');
$content4_link    = get_field('content-4_link');
$content4_image1  = get_field('content-4_image1');
$content4_image2  = get_field('content-4_image2');
?>

<div class="content-4">
    <div class="container">
        <div class="first">
            <div class="text">
                <?php if ($content4_title) : ?>
                <h2><?= $content4_title ?></h2>
                <?php endif; ?>
                <?php if ($content4_text) : ?>
                <p><?= $content4_text ?></p>
                <?php endif; ?>
                <?php if( $content4_link ): 
                        $link_url = $content4_link['url'];
                        $link_title = $content4_link['title'];
                    ?>
                <div class="button"><a href="<?= $link_url ?>"><?= $link_title ?></a></div>
                <?php endif; ?>
            </div>
            <div class="image">
                <?php if ($content4_image1) : ?>
                <img src="<?= $content4_image1['url'] ?>" alt="">
                <?php endif; ?>
            </div>
        </div>
        <div class="second">
            <div class="image">
                <?php if ($content4_image2) : ?>
                <img src="<?= $content4_image2['url'] ?>" alt="">
                <?php endif; ?>
            </div>
            <div class="list">
                <?php if( have_rows('content-4_block') ):
                    while( have_rows('content-4_block') ) : the_row();
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $text  = get_sub_field('text'); 
                    ?>
                <div class="block">
                    <div class="icon">
                        <img src="<?= $image['url'] ?>" alt="">
                    </div>
                    <div class="text">
                        <h4><?= $title ?></h4>
                        <p><?= $text ?></p>
                    </div>
                </div>
                <?php
                endwhile;
                else :
                endif; ?>
            </div>
        </div>
    </div>
</div>