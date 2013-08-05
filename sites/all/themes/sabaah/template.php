<?php

/*
* Override filter.module's theme_filter_tips() function to disable tips display.
*/
function sabaah_filter_tips($tips, $long = FALSE, $extra = '') {
  return '';
}
function sabaah_filter_tips_more_info () {
  return '';
}

/**
 * Implements template_preprocess_html().
 */
function sabaah_preprocess_html(&$variables) {

  drupal_add_js('//use.typekit.net/shj6eih.js', 'external');
  drupal_add_js('try{Typekit.load();}catch(e){}', 'inline', 'page_bottom');

}