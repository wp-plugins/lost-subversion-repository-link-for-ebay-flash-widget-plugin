<?php
  /*
Plugin Name: eBay Auction Flash Shortcode
Plugin URI: http://rtm.net
Description: Embed a beautiful Flash eBay auction Widget directly in your posts
Version: 0.9.5
Author: RTM Communications
Author URI: http://rtm.net/
  */
  /* Shortcode is here */
  // register eBay Flash shortcode
add_shortcode('ebayflash', 'ebayflash_shortcode_func');


// You may edit below to customise, but at your own risk - the code is sensitive to spaces & variables!
function ebayflash_shortcode_func($atts, $content = null  ) 
{ 
  return '<span class="ebay"><object width="355" height="300"><param name="movie" value="http://togo.ebay.com/togo/togo.swf?2008013100" /><param name="flashvars" value="base=http://togo.ebay.com/togo/&lang=en-us&mode=normal&itemid=' . $content . '&query=%22iphone%204s%22&campid=5336030796" /><embed src="http://togo.ebay.com/togo/togo.swf?2008013100" type="application/x-shockwave-flash" width="355" height="300" flashvars="base=http://togo.ebay.com/togo/&lang=en-us&mode=normal&itemid=' . $content . '&query=%22iphone%204s%22&campid=5336030796"></embed></object></span>';
}

function ebayflash_shortcode_tinymce() {}

/* Widget */
/*
function ebay_widget() { 

if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
return;

// Add only in Rich Editor mode
if ( get_user_option('rich_editing') == 'true') {
add_filter("mce_external_plugins", "add_myplugin_tinymce_plugin");
add_filter('mce_buttons', 'register_myplugin_button');
}
}
add_action('init', 'ebay_widget');
*/
?>