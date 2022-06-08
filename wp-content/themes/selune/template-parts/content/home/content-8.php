<?php
$content8_text = get_field('content-8_text');
?>

<div class="content-8">
    <div class="container">
        <div class="text">
            <?php if ($content8_text) : ?>
            <p><?= $content8_text ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>