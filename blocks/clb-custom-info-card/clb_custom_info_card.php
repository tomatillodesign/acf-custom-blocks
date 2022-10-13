<?php
/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

$block_to_publish = null;

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'clb-custom-info-card';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$icon = get_field( 'icon' );
if( $icon ) { $icon = '<div class="clb-icon-wrapper"><i class="fa-regular fa-' . $icon . ' fa-3x"></i></div>'; }

$heading = get_field( 'heading' );
if( $heading ) { $heading = '<div class="clb-heading-wrapper"><h3>' . $heading . '</h3></div>'; }

$description = get_field( 'description' );
if( $description ) { $description = '<div class="clb-description-wrapper">' . $description . '</div>'; }

$block_to_publish = '<div class="' . $class_name . '">' . $icon . $heading . $description . '</div>';
echo $block_to_publish;