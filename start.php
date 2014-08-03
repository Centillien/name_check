<?php
/**
 * Name Check
 * Simple script to online check and correct for illegal characters in name
 *
 * @package Name Check
 */

elgg_register_event_handler('init', 'system', 'name_check');

function name_check() {

	elgg_extend_view('forms/register', 'js/name_check_js');
	elgg_extend_view('forms/account/settings', 'js/name_check_js');

}

