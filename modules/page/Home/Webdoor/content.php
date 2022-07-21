<?php

if (!defined('PATH')) exit;

?>

<section 
  class="homepage-webdoor background-parallax-ctrl" 
  data-background="<?= get_image('bg-webdoor.jpg') ?>">
  <div class="container">

    <div class="row justify-content-center">
      <div class="col-lg-10">

        <div class="webdoor-content">

          <div class="site-logo">
            <h2><b>RJ</b>AW</h2>
            <p>RIO ARBITRATION WEEK</p>
          </div>

          <p class="event-date">
            08 a 12 de Agosto de 2022
          </p>

          <div class="webdoor-links">
            <a href="#confira-o-calendario-de-eventos" class="btn-site white-button icon-left"><i class="fas fa-calendar-alt"></i>CALENDÁRIO DE EVENTOS</a>
            <a href="#cadastro" class="btn-site transparent-button icon-left"><i class="fas fa-check-square"></i>INSCREVA SEU EVENTO</a>
          </div>

        </div>

      </div> 
    </div>

  </div>

  <a href="#sobre-o-rio-arbitration-week" class="scrolldown">
    <?= svg('scroll-down') ?>
  </a>

</section>