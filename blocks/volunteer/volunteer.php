<?php

/**
 * Volunteer Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Source: https://www.advancedcustomfields.com/resources/acf_register_block_type/

$block_to_publish = null;

// Create id attribute allowing for custom "anchor" value.
$id = 'volunteer-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'volunteer';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


// ACF stuff here
$block_to_publish = get_field('test');


// publish to the page
$block_to_publish = '<div class="' . $className . '" id="' . $id . '">' . $block_to_publish . '</div>';
