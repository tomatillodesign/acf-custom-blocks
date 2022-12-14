<?php
/*
Plugin Name: ACF Custom Blocks 🧱
Description: Create custom blocks and run all of your code here. Requires Advanced Custom Fields PRO.
Author: Chris Liu-Beers, Tomatillo Design
Author URI: http://www.tomatillodesign.com
Version: 2.0
License: GPL v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/



// Examples below!
// See documentation:
// https://www.advancedcustomfields.com/resources/blocks/
// https://www.advancedcustomfields.com/resources/acf_register_block_type/
//
// IMPORTANT: Remember to create your own custom fields in ACF and set them to the correct Block
// See the attached ACF .json for getting started (import this into ACF using the ACF-->Tools)
//


add_action( 'init', 'clb_custom_acf_blocks_register_acf_blocks' );
function clb_custom_acf_blocks_register_acf_blocks() {
    register_block_type( plugin_dir_path( __FILE__ ) . 'blocks/clb-custom-info-card' );
}


// add_filter('acf/pre_save_block', 'clb_add_permanent_id_markup_to_blocks');
// function clb_add_permanent_id_markup_to_blocks( $attributes ) {

// 	error_log('attributes');
// 	error_log( print_r( $attributes, true ) );

//     if( !isset($attributes['data']['clb-custom-id']) ) {
//         $attributes['data']['clb-custom-id'] = 'CLB-TEST-block-' . uniqid();
//     }
//     return $attributes;
// }


add_filter(
    'acf/pre_save_block',
    function( $attributes ) {

        //error_log('attributes');
        error_log( print_r( $attributes, true ) );

        // if ( empty( $attributes['clb_custom_id'] ) ) {
        //     $attributes['clb_custom_id'] = 'clb_custom_id-' . uniqid();
        // }

        if( !$attributes['clb_custom_id'] ) { $attributes['clb_custom_id'] = uniqid(); }

        // if ( empty( $attributes['data']['clb_custom_id'] ) ) {
        //     $attributes['data']['clb_custom_id'] = 'clb_custom_id-' . uniqid();
        // }

        return $attributes;
    }
);
