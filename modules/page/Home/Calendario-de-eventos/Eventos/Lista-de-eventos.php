<?php

if (!defined('PATH')) exit;
global $eventos;

/**
 * @author Lucas Victor
 * @version 1.0
 * 
 * https://www.google.com/calendar/event?action=TEMPLATE&text=Brazil-UK+Arbitration+Summit+2022&dates=20221019T120000Z/20221019T160000Z&details=Brazil-UK+Arbitration+Summit+2022&location=%20-
 * 
 * A variável global $eventos aceita os seguintes parâmetros:
 * 
 * @param object [
 *  'Agosto de 2022' => [
 *    [
 *      'nome_do_evento' => 'Coquetel Mulher',
 *      'data_do_evento_inicial' => '2022-08-09', 
 *      'data_do_evento_final' => '2022-08-09', 
 *      'horario_do_evento_inicial' => '18:30:00',
 *      'horario_do_evento_final' => '21:00:00',
 *      'local' => '',
 *      'link_do_evento' => '',
 *      'link_do_cadastro' => '',
 *      'informacoes_adicionais' => '',
 *      'preços' => ''
 *    ]
 *  ]
 * ]
 * 
 */

$eventos = [
  'Agosto de 2022' => [
    [
      'nome_do_evento' => 'Coquetel Mulher',
      'data_do_evento_inicial' => '2022-08-09', 
      'data_do_evento_final' => '2022-08-09', 
      'horario_do_evento_inicial' => '18:30:00',
      'horario_do_evento_final' => '21:00:00',
      'local' => 'Kincaid Advogados <br/> Av. Rio Branco 1, 14º andar',
      'link_do_evento' => false,
      'link_do_cadastro' => false,
      'informacoes_adicionais' => false,
      'precos' => false
    ]
  ]
];