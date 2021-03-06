<?php
/*
Plugin Name: bloginfo as shortcode
Plugin URI: https://github.com/djyugg/wordpress-bloginfo-shortcode
Description: Use a template tag "bloginfo" as a shortcode
Version: 0.0.1
Author: djyugg
Author URI: http://about.djyugg.me/
License: MIT
*/

function getBloginfoTemplateUrl()
{
    return get_bloginfo('template_url');
}

add_shortcode('bloginfo_template_url', 'getBloginfoTemplateUrl');