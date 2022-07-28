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
      'data_do_evento_inicial' => '2022-08-08', 
      'data_do_evento_final' => '2022-08-08', 
      'horario_do_evento_inicial' => '18:30:00',
      'horario_do_evento_final' => '21:00:00',
      'local' => 'Kincaid Advogados <br/> Av. Rio Branco 1, 14º andar',
      'link_do_evento' => false,
      'link_do_cadastro' => false,
      'informacoes_adicionais' => false,
      'precos' => false
    ],
    [
      'nome_do_evento' => 'Abertura do Curso Prático de Arbitragem Esportiva',
      'data_do_evento_inicial' => '2022-08-08', 
      'data_do_evento_final' => '2022-08-08', 
      'horario_do_evento_inicial' => '19:00:00',
      'horario_do_evento_final' => '21:00:00',
      'local' => false,
      'link_do_evento' => 'https://youtube.com/c/CPACursoPraticodeArbitragem',
      'link_do_cadastro' => false,
      'informacoes_adicionais' => false,
      'precos' => false
    ],
    [
      'nome_do_evento' => 'Arbitragem e Direito Marítimo',
      'data_do_evento_inicial' => '2022-08-09', 
      'data_do_evento_final' => '2022-08-09', 
      'horario_do_evento_inicial' => '09:30:00',
      'horario_do_evento_final' => '11:30:00',
      'local' => 'Kincaid Advogados <br/> Av. Rio Branco 1, 14º andar',
      'link_do_evento' => false,
      'link_do_cadastro' => false,
      'informacoes_adicionais' => false,
      'precos' => false
    ],
    [
      'nome_do_evento' => 'Arbitragem, Blockchain, Criptomoeda e Metaverso',
      'data_do_evento_inicial' => '2022-08-09', 
      'data_do_evento_final' => '2022-08-09', 
      'horario_do_evento_inicial' => '18:00:00',
      'horario_do_evento_final' => '20:00:00',
      'local' => 'OAB-RJ <br/> Av. Marechal Câmara 150, 4º andar',
      'link_do_evento' => false,
      'link_do_cadastro' => false,
      'informacoes_adicionais' => false,
      'precos' => false
    ],
    [
      'nome_do_evento' => 'Evento do CJA',
      'data_do_evento_inicial' => '2022-08-09', 
      'data_do_evento_final' => '2022-08-09', 
      'horario_do_evento_inicial' => '18:00:00',
      'horario_do_evento_final' => '23:00:00',
      'local' => 'CBMA <br/> Rua da Candelária, 9/803',
      'link_do_evento' => false,
      'link_do_cadastro' => false,
      'informacoes_adicionais' => false,
      'precos' => false
    ],
    [
      'nome_do_evento' => 'Global Experience in Regulatory Sandboxes: Current Challenges and Future Perspectives',
      'data_do_evento_inicial' => '2022-08-10', 
      'data_do_evento_final' => '2022-08-10', 
      'horario_do_evento_inicial' => '09:00:00',
      'horario_do_evento_final' => '10:30:00',
      'local' => false,
      'link_do_evento' => 'https://www.youtube.com/c/CBMAoficial',
      'link_do_cadastro' => false,
      'informacoes_adicionais' => 'Local: International Webinar - Evento Online',
      'precos' => false
    ],
    [
      'nome_do_evento' => 'Course on CISG and International Contracts',
      'data_do_evento_inicial' => '2022-08-10', 
      'data_do_evento_final' => '2022-08-10', 
      'horario_do_evento_inicial' => '18:00:00',
      'horario_do_evento_final' => '23:00:00',
      'local' => 'CBMA <br/> Rua da Candelária, 9/803',
      'link_do_evento' => false,
      'link_do_cadastro' => false,
      'informacoes_adicionais' => false,
      'precos' => false
    ],
    [
      'nome_do_evento' => 'Congresso Internacional CBMA de Arbitragem',
      'data_do_evento_inicial' => '2022-08-11', 
      'data_do_evento_final' => '2022-08-11', 
      'horario_do_evento_inicial' => '00:00:00',
      'horario_do_evento_final' => '23:59:59',
      'local' => 'Museu do Amanhã <br/> Praça Mauá, nº 1, Centro',
      'link_do_evento' => false,
      'link_do_cadastro' => false,
      'informacoes_adicionais' => 'O dia todo',
      'precos' => false
    ],
    [
      'nome_do_evento' => 'Congresso Internacional CBMA de Arbitragem',
      'data_do_evento_inicial' => '2022-08-12', 
      'data_do_evento_final' => '2022-08-12', 
      'horario_do_evento_inicial' => '00:00:00',
      'horario_do_evento_final' => '23:59:59',
      'local' => 'Museu do Amanhã <br/> Praça Mauá, nº 1, Centro',
      'link_do_evento' => false,
      'link_do_cadastro' => false,
      'informacoes_adicionais' => 'O dia todo',
      'precos' => false
    ],
    [
      'nome_do_evento' => 'Evento ICC YAF/CJA/CAMARB: Simulação do Caso da Competição Brasileira de Arbitragem',
      'data_do_evento_inicial' => '2022-08-12', 
      'data_do_evento_final' => '2022-08-12', 
      'horario_do_evento_inicial' => '16:00:00',
      'horario_do_evento_final' => '18:00:00',
      'local' => 'Museu do Amanhã <br/> Praça Mauá, nº 1, Centro',
      'link_do_evento' => false,
      'link_do_cadastro' => false,
      'informacoes_adicionais' => 'O dia todo',
      'precos' => false
    ],
  ]
];