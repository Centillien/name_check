<?php
/**
 * Name Check
 * Simple script to online check and correct for illegal characters in name
 *
 * @package Name Check
 * Auto remove invalid characters
 */
?>
<script>
elgg.provide('elgg.name_check');

$('input[name=name]').bind('input propertychange', function () {
	var blacklist = /[\'/\\"*$#!%^(){}~?<>;|Â¬`@+=]/;
	while (blacklist.test($(this).val())) {
		$(this).val(function (i, v) {
			return v.replace(blacklist, '');
		}).val();
	elgg.register_error(elgg.echo("name_check:invalidchar"));
	}
});

elgg_load_js('elgg.name_check');
</script>
