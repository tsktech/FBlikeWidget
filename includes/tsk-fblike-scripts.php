<?php

	// Add Scripts
	function tsk_fblike_add_scripts () {
		// add css
		wp_enqueue_style ('tsk_fblike_style' , plugins_url() . '/tsk-fblike/css/tsk-fblike.css');
		// add js
		wp_enqueue_script ('tsk_fblike_script' , plugins_url() . '/tsk-fblike/js/tsk-fblike.js', array(), '1.0.1', true);
		wp_enqueue_script('facebook', 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3');
		// wp_enqueue_script('facebook', 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=1644994905551750&autoLogAppEvents=1'); js#xfbml=1&version=v2.10
	}
	add_action ('wp_enqueue_scripts', 'tsk_fblike_add_scripts');
