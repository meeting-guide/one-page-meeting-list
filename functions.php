<?php
//be sure to install 12 Step Meeting List https://wordpress.org/plugins/12-step-meeting-list/

//make the home page the meetings post_type archive
if (function_exists('tsml_front_page')) {
	add_action('pre_get_posts', 'tsml_front_page');	
} elseif (!is_admin()) {
	echo 'warning! twelve step meeting list not installed';
}

