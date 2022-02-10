<?php
/*******
 * Plugin Name: Button CTA Custom Block
 * Description: Add custom button cta
 * version: 1.0.0
 */
function bccb_register_blocks(){
    // check if guterberg is active
    if( !function_exists ('register_block_type') ){
        return;
    }
    // add block scritp
    wp_register_script(
        'bccb-cta',
        plugins_url('blocks/cta/cta.js', __FILE__),
        [ 'wp-blocks', 'wp-dom' ] , null, true );
    
    // add block stype
    wp_register_style (
        'bccb-cta',
        plugins_url('blocks/cta/cta.css', __FILE__)
        , [ 'wp-edit-blocks' ] );
    // register block script and syle
    register_block_type(
        'my/simple-text',
        ['style' => 'bccb-cta', // Loads on both edior and fron end side
        'editor_script' => 'bccb-cta',        
        ]
    );
}
add_action( 'init', 'bccb_register_blocks' );