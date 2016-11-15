<?php
//be sure to install 12 Step Meeting List https://wordpress.org/plugins/12-step-meeting-list/

//make the home page the meetings post_type archive
add_action('pre_get_posts', function($wp_query){
	if (is_admin()) return; //don't do this to inside pages
	if ($wp_query->get('page_id') == get_option('page_on_front')) {
		$wp_query->set('post_type', 'tsml_meeting');
		$wp_query->set('page_id', '');
		$wp_query->is_page = 0;
		$wp_query->is_singular = 0;
		$wp_query->is_post_type_archive = 1;
		$wp_query->is_archive = 1;
	}
});
