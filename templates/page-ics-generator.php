<?php

/**
 * Template Name: ICS Generator
 */

if (!defined('PATH')) exit;

class ICS {
  var $data;
  var $name;
  function __construct($start,$end,$name,$description,$location) {
      $this->name = $name;
      $this->data = "BEGIN:VCALENDAR\nVERSION:2.0\nMETHOD:PUBLISH\nBEGIN:VEVENT\nDTSTART:".date("Ymd\THis\Z",strtotime($start))."\nDTEND:".date("Ymd\THis\Z",strtotime($end))."\nLOCATION:".$location."\nTRANSP: OPAQUE\nSEQUENCE:0\nUID:\nDTSTAMP:".date("Ymd\THis\Z")."\nSUMMARY:".$name."\nDESCRIPTION:".$description."\nPRIORITY:1\nCLASS:PUBLIC\nBEGIN:VALARM\nTRIGGER:-PT10080M\nACTION:DISPLAY\nDESCRIPTION:Reminder\nEND:VALARM\nEND:VEVENT\nEND:VCALENDAR\n";
  }
  function save() {
      file_put_contents($this->name.".ics",$this->data);
  }
  function show() {
      header("Content-type:text/calendar");
      header('Content-Disposition: attachment; filename="'.$this->name.'.ics"');
      Header('Content-Length: '.strlen($this->data));
      Header('Connection: close');
      echo $this->data;
  }
}

$data = $_GET['data'];
if (!$data) wp_die('Esta página não pode ser acessada diretamente');

$data = undo_hash($data);
if (!$data) wp_die('Link inválido');

$data = unjson($data);
if (!$data) wp_die('Dados inválidos');

$date_start = new Datetime($data->start);
$date_end = new Datetime($data->end);

$date_start->add(new DateInterval('PT' . 180 . 'M'));
$date_end->add(new DateInterval('PT' . 180 . 'M'));

$event = new ICS ( $date_start->format('Y-m-d H:i:s'), $date_end->format('Y-m-d H:i:s') , $data->name , strip_tags($data->details), strip_tags($data->local));
$event->show();