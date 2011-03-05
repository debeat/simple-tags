<?php
return array(
	// Features
	'use_tag_pages' 		=> 1,
	'active_mass_edit' 		=> 1,
	'active_manage' 		=> 0,
	'active_related_posts'	=> 0,
	'active_autotags' 		=> 1,
	'allow_embed_tcloud' 	=> 0,
	'use_click_tags' 	 	=> 1,
	'use_suggested_tags' 	=> 1,
	'use_autocompletion' 	=> 1,
	
	// Auto link
	'auto_link_tags' 		=> 0,
	'auto_link_min' 		=> 1,
	'auto_link_case' 		=> 1,
	'auto_link_exclude' 	=> '',
	'auto_link_max_by_post' => 10,
	'auto_link_max_by_tag'  => 1,
	'auto_link_priority'  	=> 12,
	
	// Administration
	'order_click_tags' 	=> 'name-asc',
	'opencalais_key' 	=> '',
	'alchemy_api' 		=> '',
	'zemanta_key' 		=> '',
	'autocomplete_mode'	=> 'protomultiselect',
	
	// The tags
	'tt_feed' 		=> 0,
	'tt_embedded' 	=> 'no',
	'tt_separator' 	=> ', ',
	'tt_before' 	=> __('Tags: ', 'simpletags'),
	'tt_after' 		=> '<br />',
	'tt_notagstext' => __('No tags for this post.', 'simpletags'),
	'tt_number' 	=> 0,
	'tt_inc_cats' 	=> 0,
	'tt_xformat' 	=> __('<a href="%tag_link%" title="%tag_name%" %tag_rel%>%tag_name%</a>', 'simpletags'),
	'tt_adv_usage' 	=> '',
	
	// Related Posts
	'rp_taxonomy' 	=> 'post_tag',
	'rp_feed' 		=> 0,
	'rp_embedded' 	=> 'no',
	'rp_order' 		=> 'count-desc',
	'rp_limit_qty' 	=> 5,
	'rp_notagstext' => __('No related posts.', 'simpletags'),
	'rp_title' 		=> __('<h4>Related posts</h4>', 'simpletags'),
	'rp_xformat' 	=> __('<a href="%post_permalink%" title="%post_title% (%post_date%)">%post_title%</a> (%post_comment%)', 'simpletags'),
	'rp_adv_usage' 	=> '',
	
	// Tag cloud
	'cloud_taxonomy' 	=> 'post_tag',
	'cloud_selectionby' => 'count',
	'cloud_selection' 	=> 'desc',
	'cloud_orderby' 	=> 'random',
	'cloud_order' 		=> 'asc',
	'cloud_limit_qty' 	=> 45,
	'cloud_notagstext' 	=> __('No tags.', 'simpletags'),
	'cloud_title' 		=> __('<h4>Tag Cloud</h4>', 'simpletags'),
	'cloud_format' 		=> 'flat',
	'cloud_xformat' 	=> __('<a href="%tag_link%" id="tag-link-%tag_id%" class="st-tags t%tag_scale%" title="%tag_count% topics" %tag_rel% style="%tag_size% %tag_color%">%tag_name%</a>', 'simpletags'),
	'cloud_max_color' 	=> '#000000',
	'cloud_min_color' 	=> '#CCCCCC',
	'cloud_max_size' 	=> 22,
	'cloud_min_size' 	=> 8,
	'cloud_unit' 		=> 'pt',
	'cloud_adv_usage' 	=> ''
);
?>