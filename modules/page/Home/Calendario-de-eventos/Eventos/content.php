<?php

if (!defined('PATH')) exit;
global $eventos;
get_modules('Eventos/Lista-de-eventos', 'page/Home/Calendario-de-eventos');

?>

<main class="eventos">

  <?php foreach ($eventos as $section_title => $contents): 
    $section_slug = slugify($section_title); ?>
    <div class="events-block">
      <h3 class="events-block-title"><?= $section_title ?></h3>
      <div class="accordion" id="<?= $section_slug ?>">

        <?php foreach ($contents as $ind => $evento): 
          ?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="<?= $section_slug ?>-heading-<?= $ind ?>">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $section_slug ?>-collapse-<?= $ind ?>" aria-expanded="false" aria-controls="<?= $section_slug ?>-collapse-<?= $ind ?>">
                <span class="d-flex align-items-center event-title-box">
                  <span class="date">
                    <span class="day"><?= ttime($evento['data_do_evento_inicial'], '%d') ?></span><br/>
                    <span class="month"><?= ttime($evento['data_do_evento_inicial'], '%B') ?></span>
                  </span>
                  <span class="event-title"><?= $evento['nome_do_evento'] ?></span>
                </span>
              </button>
            </h2>
            <div id="<?= $section_slug ?>-collapse-<?= $ind ?>" class="accordion-collapse collapse" aria-labelledby="<?= $section_slug ?>-heading-<?= $ind ?>" data-bs-parent="#<?= slugify($section_title) ?>">
              <div class="accordion-body">
                <div class="event-content">
                  <div class="row">
                    <div class="col-md-6 mb-5">
                      <h3 class="info">Informações</h3>
                      <p>
                        <?= $evento['precos'] ? '<b>Preço</b><br/> '.$evento['precos'] : '<b>Evento Gratúito</b>' ?> <br/>
                        <?= ($evento['local'] and $evento['link_do_evento']) ? '<b>Evento Híbrido</b> <br/>' : null ?>
                        <?= $evento['local'] ? '<br/><b>Local</b> <br/> ' . $evento['local'] : null ?>
                        <?= 
                          $evento['link_do_cadastro'] ? 
                          sprintf('<br/></br> <a href="%s" target="_blank" title="Cadastre-se no evento">Cadastre-se neste evento</a>', $evento['link_do_cadastro']) : 
                          null 
                        ?>
                        <?= $evento['informacoes_adicionais'] ? '<br/></br><b>Informações adicionais</b><br/>' . $evento['informacoes_adicionais']  : null ?>
                      </p>
                    </div>
                    <div class="col-md-6 mb-5">
                      <h3 class="info">Data</h3>
                      <p>
                        <?= 
                          ($evento['data_do_evento_inicial'] == $evento['data_do_evento_final']) 
                          ? ttime($evento['data_do_evento_inicial'], '%d/%m/%Y')
                          : ttime($evento['data_do_evento_inicial'], '%d/%m/%Y') . ' até ' . ttime($evento['data_do_evento_final'], '%d/%m/%Y')
                        ?> - 
                        <?= 
                          ($evento['horario_do_evento_inicial'] == $evento['horario_do_evento_final'])
                          ? ttime(date('Y-m-d') . $evento['horario_do_evento_inicial'], '%H:%M') 
                          : ttime(date('Y-m-d') . $evento['horario_do_evento_inicial'], '%H:%M') . ' às ' . ttime(date('Y-m-d') . $evento['horario_do_evento_final'], '%H:%M')
                        ?>
                      </p>

                    </div>
                    <?php if ($evento['link_do_evento']): ?>
                      <div class="col-md-6 mb-5">
                        <h3 class="info">Link do Evento</h3>
                        <p>
                          <a href="<?= $evento['link_do_evento'] ?>" target="_blank">Acesse aqui</a>
                        </p>
                      </div>
                    <?php endif; ?>
                    <div class="col-md-6 mb-5">
                      <h3 class="info">Salve no seu calendário</h3>
                      <div class="d-md-flex">
                        <?php 

                          $ics_link_data = do_hash(json([
                            'start' => $evento['data_do_evento_inicial'].' '.$evento['horario_do_evento_inicial'],
                            'end' => $evento['data_do_evento_final'].' '.$evento['horario_do_evento_final'],
                            'name' => $evento['nome_do_evento'],
                            'local' => $evento['local'] . ' ' . $evento['link_do_evento'],
                            'details' => $evento['informacoes_adicionais']
                          ]));
                        
                        ?>

                        <a 
                          href="<?= site_url() ?>/baixar-calendario/?data=<?= $ics_link_data ?>" 
                          target="_blank"
                          class="me-md-3 mb-3 mb-md-0 btn-site small-button grey-button">CALENDÁRIO ICS</a>
                        <a 
                          href="<?= 
                            generate_google_calendar_link(
                              $evento['nome_do_evento'],
                              strtotime($evento['data_do_evento_inicial'].' '.$evento['horario_do_evento_inicial']),
                              strtotime($evento['data_do_evento_final'].' '.$evento['horario_do_evento_final']),
                              $evento['informacoes_adicionais'],
                              strip_tags($evento['local']) . ' ' . $evento['link_do_evento']
                            ) 
                          ?>" 
                          class="btn-site small-button grey-button" target="_blank">CALENDÁRIO GOOGLE</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        
      </div>
    </div>

  <?php endforeach; ?>

</main>