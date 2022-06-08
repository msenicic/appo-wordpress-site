<?php
$content9_title  = get_field('content-9_title');
$content9_text   = get_field('content-9_text');
$content9_link   = get_field('content-9_link');
$content9_image  = get_field('content-9_image');
?>

<div class="content-9">
    <div class="container">
        <div class="image">
            <?php if ($content9_image) : ?>
            <img src="<?= $content9_image['url'] ?>" alt="">
            <?php endif; ?>
        </div>
        <div class="text">
            <?php if ($content9_title) : ?>
            <h2><?= $content9_title ?></h2>
            <?php endif; ?>
            <?php if ($content9_text) : ?>
            <p><?= $content9_text ?></p>
            <?php endif; ?>
            <div class="buttons">
                <?php if( have_rows('content-9_buttons') ):
                    while( have_rows('content-9_buttons') ) : the_row();
                    $image = get_sub_field('image');
                    $link  = get_sub_field('link');
                        $url  = $link['url'];  
                    ?>
                <a href="<?= $url ?>"><img src="<?= $image['url'] ?>" alt=""></a>
                <?php
                endwhile;
                else :
                endif; ?>
            </div>
        </div>
        <?php if( $content9_link ): 
            $link_url   = $content9_link['url'];
            $link_title = $content9_link['title'];
            ?>
        <div class="button">
            <a href="<?= $link_url ?>"><?= $link_title ?></a>
        </div>
        <?php endif; ?>
    </div>
</div>