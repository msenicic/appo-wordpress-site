<?php
$content3_title = get_field('content-3_title');
$content3_text  = get_field('content-3_text');
?>

<div class="content-3">
    <div class="background"></div>
    <div class="text">
        <?php if ($content3_title) : ?>
        <h2><?= $content3_title ?></h2>
        <?php endif; ?>
        <?php if ($content3_text) : ?>
        <p><?= $content3_text ?></p>
        <?php endif; ?>
    </div>
</div>