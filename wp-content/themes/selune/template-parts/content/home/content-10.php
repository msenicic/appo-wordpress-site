<?php
$content10_title    = get_field('content-10_title');
$content10_text     = get_field('content-10_text');
$content10_btntext  = get_field('content-10_btntext');
?>

<div class="content-10">
    <div class="container">
        <div class="list">
            <?php if( have_rows('content-10_blocks') ):
                    while( have_rows('content-10_blocks') ) : the_row();
                    $title = get_sub_field('title'); 
                    ?>
            <div class="block">
                <h4><?= $title ?></h4>
                <ul>
                    <?php if( have_rows('block') ):
                    while( have_rows('block') ) : the_row();
                    $link = get_sub_field('link'); 
                        $text = $link['title'];
                        $url  = $link['url'];
                    ?>
                    <li><a href="<?= $url ?>"><?= $text ?></a></li>
                    <?php
                        endwhile;
                        else :
                        endif; 
                    ?>
                </ul>
            </div>
            <?php
                endwhile;
                else :
                endif; 
            ?>
        </div>
        <div class="input-text">
            <div class="text">
                <?php if ($content10_title) : ?>
                <h2><?= $content10_title ?></h2>
                <?php endif; ?>
                <?php if ($content10_text) : ?>
                <p><?= $content10_text ?></p>
                <?php endif; ?>
            </div>
            <div class="input">
                <input type="email" name="" id="">
                <button type="submit">
                    <?php if ($content10_btntext) : ?>
                    <?= $content10_btntext ?>
                    <?php endif; ?>
                </button>
            </div>
        </div>
    </div>
</div>