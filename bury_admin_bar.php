<?php
/* 
Plugin Name: Bury Admin Bar
Description: Hides the Admin Bar in WordPress.
Version: 1.0
Author: Awais Altaf
Author URI: http://iticiti.co/
Text Domain: bury-admin-bar
*/ 

add_action('admin_print_scripts-profile.php', 'hdb_hide_admin_bar_prefs');
function hdb_hide_admin_bar_prefs() { ?>
<style type="text/css">
	.show-admin-bar {display: none;}
</style>
<?php
}
add_filter('show_admin_bar', '__return_false');
?>
