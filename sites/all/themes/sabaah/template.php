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