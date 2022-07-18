<?php

if (!defined('PATH')) exit;

function send_eventos() {
  get_modules('ajax/send_eventos/content');
}

add_action('wp_ajax_send_eventos', 'send_eventos');
add_action('wp_ajax_nopriv_send_eventos', 'send_eventos');