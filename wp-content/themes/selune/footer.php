<?php
/**
 * @package selune
 */
?>
<?php
    $footer_text = get_field('footer_text', 'option');
?>

<footer>
    <div class="container">
        <div class="text">
            <?php if ($footer_text) : ?>
            <p><?= $footer_text ?></p>
            <?php endif; ?>
        </div>
        <div class="icons">
            <?php if( have_rows('footer_icon', 'option') ):
                    while( have_rows('footer_icon', 'option') ) : the_row();
                    $text = get_sub_field('text');
                    $link = get_sub_field('link'); 
                        $link_url = $link['url'];
                    ?>
            <a href="<?= $link_url ?>"><?= $text ?></a>
            <?php
                endwhile;
                else :
                endif; 
            ?>
        </div>
    </div>
</footer>
<!--<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <?php echo 'All rights reserved. | <a href="https://selune.io/" rel="designer">selune.io</a>'; ?>
    </div>
</footer>-->
</div>
<?php wp_footer(); ?>
</body>

</html>