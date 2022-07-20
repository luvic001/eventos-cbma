<?php

if (!defined('PATH')) exit;

?>

<aside class="megamenu">

  <div class="glass" close-menu></div>
  <div class="content">
    <a class="close-button" href="javascript:void(0);" close-menu>
      <?= svg('close-thin') ?>
      fechar
    </a>

    <?php get_modules('Header-nav', 'page/global') ?>

  </div>

</aside>