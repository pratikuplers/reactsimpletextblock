<?php

function loadMyBlockFiles() {
	wp_enqueue_script(
		'my-test-text',
		plugin_dir_url(__FILE__). 'custom.js',
		array('wp-blocks', 'wp-i18n', 'wp-editor'),
		true
	);
}

add_action('enqueue_block_editor_assets', 'loadMyBlockFiles');

?>