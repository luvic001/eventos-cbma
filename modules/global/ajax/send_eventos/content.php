<?php

if (!defined('PATH')) exit;
hjson();

global $fields, $additional_comment;

$fields = [
  'event_name' => true,
  'event_organization_contact_name' => true,
  'event_organization_contact_email' => true,
  'event_organization_contact_phone' => true,
  'event_organization_instituitions' => true,
  'event_start_date' => true,
  'event_end_date' => true,
  'event_start_time' => true,
  'event_end_time' => true,
  'event_price' => true,
  'event_price_details' => null,
  'event_link' => null,
  'event_local' => null,
  'event_registration_link' => null,
  'event_organization_environment' => true,
  'additional_comment' => null,
];

foreach ($fields as $field => $is_required) {
  if ($is_required) {
    if (!$_POST[$field]) {
      $err[$field] = 'Este campo é obrigatório *';
    } 
  }
}

foreach ($fields as $field => $is_required) {
  $$field = escapestr($_POST[$field]);
}

if (!filter_var($event_organization_contact_email, FILTER_VALIDATE_EMAIL)) {
  $err['event_organization_contact_email'] = 'E-mail inválido';
}

if (!$event_link and !$event_local) {
  $err['event_link'] = 'Informe o link para evento online ou o endereço para evento presencial';
}

$date_start = formatDateYMD($event_start_date);
$date_end = formatDateYMD($event_end_date);

if (strtotime($date_start) > strtotime($date_end)) {
  $err['event_end_date'] = 'A data final do evento deve ser maior ou igual a inicial';
}

if ($err) get_modules('events/add_field_error/content', 'global/ajax', [
  'err' => $err
]);

// Getting EMKT content
ob_start();
get_modules('ajax/send_eventos/event-mkt-html');
$content_email = ob_get_contents();
ob_end_clean();

// Saving into database
global $wpdb;
$ins = $wpdb->insert('wp_eventos_cbma', [
  'event_name' => $event_name,
  'event_organization_contact_name' => $event_organization_contact_name,
  'event_organization_contact_email' => $event_organization_contact_email,
  'event_organization_contact_phone' => $event_organization_contact_phone,
  'event_organization_instituitions' => $event_organization_instituitions,
  'event_start_date' => $date_start . ' 00:00:00',
  'event_end_date' => $date_end . ' 23:59:59',
  'event_start_time' => $event_start_time,
  'event_end_time' => $event_end_time,
  'event_link' => $event_link,
  'event_local' => $event_local,
  'event_registration_link' => $event_registration_link,
  'event_price' => ($event_price !== 'paid') ? 'free' : 'paid',
  'event_price_details' => $event_price_details,
  'event_organization_environment' => $event_organization_environment,
  'additional_comment' => $additional_comment,
  'INSERT_DATE' => date('Y-m-d H:i:s')
]);

if (!$ins) {
  fjson([
    'success' => false,
    'content' => '<p>Não foi possível inserir seu evento. Por favor, tente novamente mais tarde.</p>'
  ], 400);
}

// Sending MKT
wp_mail(
  get_option('admin_email'),
  'Novo evento publicado no formulário do Rio Arbitration Week',
  $content_email
);

fjson([
  'success' => true,
  'content' => '<p><b style="font-size: 20px;">Obrigado</b><br/><br/>Seu evento foi encaminhado para análise com sucesso.</p>'
]);