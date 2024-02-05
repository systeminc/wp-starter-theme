<?php

/**
 * Gallery Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param (int|string) $post_id The post ID this block is saved to.
 */

// Create class attribute allowing for custom "className" and "align" values.
$className = 'gallery-block';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

$block_id = get_field('block_id');

$small_title = get_field('small_title');
$big_title = get_field('big_title');
$description = get_field('description');
$gallery = get_field('gallery');

$reversed = get_field('reversed') ? "reversed" : '';
?>

<section class="<?php echo esc_attr($className); ?> <?php echo $reversed; ?>" id="<?php echo $block_id ?? $block['id']; ?>">
    <div class="swiper gallery-wrap fadein-wrap">
        <div class="swiper-wrapper">
            <?php foreach( $gallery as $image ): ?>
                <div class="swiper-slide">
                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="gallery-description-wrap fadein-wrap">
        <div class="gallery-description-wrap__content">
            <div class="gallery-description">
                <h3 class="heading"><?php echo $small_title; ?></h3>
                <h2><?php echo $big_title; ?></h2>
                <p><?php echo $description; ?></p>
            </div>

            <div class="swiper-navigation">
                <div class="swiper-prev"></div>
                <div class="swiper-next"></div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("SwiperReady", () => {
        var block = $("#<?php echo $block_id ?? $block['id']; ?>");

        new Swiper(block.find(".swiper")[0], {
            slidesPerView: 1.2,
            spaceBetween: 20,
            navigation: {
                nextEl: block.find(".swiper-next")[0],
                prevEl: block.find(".swiper-prev")[0]
            },
            breakpoints: {
                1024: {
                    slidesPerView: 2.5,
                    spaceBetween: 80,
                },
            }
        });
    });
</script>

