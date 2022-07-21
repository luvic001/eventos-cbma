<?php

if (!defined('PATH')) exit;

get_modules('Header', 'page/global');
get_modules('Webdoor/content', 'page/home');
get_modules('Sobre-nos/content', 'page/home');
get_modules('Calendario-de-eventos/content', 'page/home');

?>

<section class="site-sections green-section" id="cadastro">
  <div class="container">
    <div class="section-title">
      <h2>
        CADASTRE O SEU EVENTO NO <br/>
        <b>RIO ARBITRATION WEEK</b>
      </h2>
    </div>
    <?php get_modules('content', 'page/Home/Form-registration') ?>
  </div>
</section>

<?php

get_modules('Fale-conosco/content', 'page/home');
get_modules('Footer', 'page/global');