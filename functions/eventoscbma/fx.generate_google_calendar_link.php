<?php

if (!defined('PATH')) exit;

function generate_google_calendar_link($name, $begin, $end, $location, $details = '') {
	$params = array('&dates=', '/', '&details=', '&location=', '&sf=true&output=xml');
	$url = 'https://www.google.com/calendar/render?action=TEMPLATE&text=';
	$arg_list = func_get_args();
    for ($i = 0; $i < count($arg_list); $i++) {
    	$current = $arg_list[$i];
    	if(is_int($current)) {
    		$t = new DateTime('@' . $current, new DateTimeZone('UTC'));
        $t->add(new DateInterval('PT' . 0 . 'M'));
    		$current = $t->format('Ymd\THis\Z');
    		unset($t);
    	}
    	else {
    		$current = urlencode($current);
    	}
    	$url .= (string) $current . $params[$i];
    }
    return $url;
}