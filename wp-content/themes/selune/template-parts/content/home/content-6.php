<?php
$content6_title  = get_field('content-6_title');
$content6_text   = get_field('content-6_text');
$content6_icon   = get_field('content-6_icon');
?>

<div class="content-6">
    <div class="container">
        <div class="text">
            <?php if ($content6_icon) : ?>
            <?= $content6_icon ?>
            <?php endif; ?>
            <?php if ($content6_title) : ?>
            <h3><?= $content6_title ?></h3>
            <?php endif; ?>
            <?php if ($content6_text) : ?>
            <p><?= $content6_text ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>