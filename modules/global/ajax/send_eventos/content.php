<?php

if (!defined('PATH')) exit;
hjson();

global $fields, $additional_comment;

$fields = [
  'event_name',
  'event_organization_contact_first_name',
  'event_organization_contact_last_name',
  'event_organization_contact_email',
  'event_organization_instituitions',
  'event_start_date',
  'event_end_date',
  'event_start_time_hour',
  'event_start_time_minutes',
  'event_start_time_ampm',
  'event_end_time_hour',
  'event_end_time_minutes',
  'event_end_time_ampm',
  'event_link',
  'event_price',
  'event_organization_environment'
];

foreach ($fields as $field) {
  if (!$_POST[$field]) $err[$field] = 'Este campo é obrigatório *';
}

foreach ($fields as $field) {
  $$field = escapestr($_POST[$field]);
}

$additional_comment = escapestr($_POST['additional_comment']);

if (!filter_var($event_organization_contact_email, FILTER_VALIDATE_EMAIL)) {
  $err['event_organization_contact_email'] = 'E-mail inválido';
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

// Sending MKT
wp_mail(
  get_option('admin_email'),
  'Novo evento publicado no formulário do Rio Arbitration Week',
  $content_email
);

// Saving into database
global $wpdb;
$ins = $wpdb->insert('wp_eventos_cbma', [
  'event_name' => $event_name,
  'event_organization_contact_first_name' => $event_organization_contact_first_name,
  'event_organization_contact_last_name' => $event_organization_contact_last_name,
  'event_organization_contact_email' => $event_organization_contact_email,
  'event_organization_instituitions' => $event_organization_instituitions,
  'event_start_date' => $date_start . ' 00:00:00',
  'event_end_date' => $date_end . ' 23:59:59',
  'event_start_time' => $event_start_time_hour.':'.$event_start_time_minutes.' '.$event_start_time_ampm,
  'event_end_time' => $event_end_time_hour.':'.$event_end_time_minutes.' '.$event_end_time_ampm,
  'event_link' => $event_link,
  'event_price' => $event_price,
  'event_organization_environment' => $event_organization_environment,
  'additional_comment' => $additional_comment
]);

if (!$ins) {
  fjson([
    'success' => false,
    'content' => '<p>Não foi possível inserir seu evento. Por favor, tente novamente mais tarde.</p>'
  ], 400);
}
  
fjson([
  'success' => true,
  'content' => '<p>Seu evento foi encaminhado para análise com sucesso.</p>'
]);