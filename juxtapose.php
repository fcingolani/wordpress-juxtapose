<?php
/*
Plugin Name: Juxtapose
Plugin URI: http://wordpress.org/plugins/juxtaposejs/
Description: Adds a [juxtapose] shortcode to embed Northwestern University Knight Lab's JuxtaposeJS frame comparisons.
Author: Federico Cingolani
Version: 1.0
Author URI: http://fcingolani.com.ar/
*/

class Juxtapose {

  static $shortcode_rendered;

  static function initialize() {
    self::$shortcode_rendered = false;

    add_shortcode('juxtapose', array(__CLASS__, 'shortcode'));

    add_action('init',      array(__CLASS__, 'init'));
    add_action('wp_footer', array(__CLASS__, 'wp_footer'));
  }

  // TODO: Sanitize attributes
  static function shortcode( $atts ) {
    self::$shortcode_rendered = true;

    wp_enqueue_script('juxtapose');

    $a = shortcode_atts( array(
        'startingposition'  => 50,
        'showlabels'        => true,
        'showcredits'       => true,
        'animate'           => true,
        'mode'              => 'horizontal',

        'leftsrc'           => '',
        'leftlabel'         => '',
        'leftcredit'        => '',

        'rightsrc'          => '',
        'rightlabel'        => '',
        'rightcredit'       => '',
    ), $atts );

    return <<<EOT
<div class="juxtapose" data-startingposition="{$a['startingposition']}" data-showlabels="{$a['showlabels']}" data-showcredits="{$a['showcredits']}" data-animate="{$a['animate']}" data-mode="{$a['mode']}">
  <img src="{$a['leftsrc']}" data-label="{$a['leftlabel']}" data-credit="{$a['leftcredit']}">
  <img src="{$a['rightsrc']}" data-label="{$a['rightlabel']}" data-credit="{$a['rightcredit']}">
</div>
EOT;

  }

  static function init() {
    wp_register_script( 'juxtapose',  "//s3.amazonaws.com/cdn.knightlab.com/libs/juxtapose/latest/js/juxtapose.js", null, null, true );
    
  }

  static function wp_footer() {
    // Should be using wp_enqueue_style, but it can't be used to add styles to the footer.
    // Yeah i know, <link> inside <body> is not valid HTML.
    // But i don't want to load this css when there's not need to.
    // SUE ME.
    if(self::$shortcode_rendered){
      echo '<link rel="stylesheet" href="//s3.amazonaws.com/cdn.knightlab.com/libs/juxtapose/latest/css/juxtapose.css">';
    }    
  }

}

Juxtapose::initialize();