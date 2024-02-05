<?php

/**
 * Simple Text Block Column Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create class attribute allowing for custom "className" and "align" values.
$className = 'simple-text-block';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

$block_id = get_field('block_id');

$title = get_field('title');
$content = get_field('content');

?>

 <section class="<?php echo esc_attr($className); ?>" <?php echo $block_id ? 'id="' . $block_id . '"' : ''; ?>>
    <div class="width-wrap fadein-wrap">
        <h3 class="heading"><?php echo $title; ?></h3>
        <div class="simple-text-content"><?php echo $content; ?></div>
    </div>
</section>
