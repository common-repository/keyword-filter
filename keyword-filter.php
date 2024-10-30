<?php
/*
Plugin Name: Keyword Filter
Plugin URI: http://www.williamlong.info/archives/1156.html
Description: This plugin replace keywords you chose with a filter words.
Version: 1.0.0
Author: William Long
Author URI: http://www.williamlong.info
License: GNU
Text Domain: keyword-filter
*/

$KeyWordsFilterAds = array(
'和谐' => '水产',
'天安门' => '××门',
'学潮' => '學潮',
'屠杀' => '屠殺',
);

function KeyWordsFilter($content) {
	global $KeyWordsFilterAds;
	$content = strtr($content, $KeyWordsFilterAds);
	return $content;
}

add_filter('the_content', 'KeyWordsFilter');

?>