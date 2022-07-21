<?php

if (!defined('PATH')) exit;

?>

<section class="site-sections" id="confira-o-calendario-de-eventos">

  <div class="container">
    <div class="section-title">
      <h2>CONFIRA O CALENDÁRIO DE EVENTOS</h2>
    </div>
    
    <?php get_modules('Calendario-de-eventos/Eventos/content', 'page/home'); ?>

    <div class="editor-content">
      <p class="disclaimer">Em caso de dúvidas, envie um e-mail para <a href="mailto:eventos@cbma.com.br" title="Enviar e-mail">eventos@cbma.com.br</a></p>
    </div>
  </div>

</section>