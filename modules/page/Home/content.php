<?php

if (!defined('PATH')) exit;

get_modules('Header', 'page/global');
get_modules('Webdoor/content', 'page/Home');
get_modules('Sobre-nos/content', 'page/Home');
get_modules('Calendario-de-eventos/content', 'page/Home');

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

get_modules('Fale-conosco/content', 'page/Home');
get_modules('Apoiadoras/content', 'page/Home');
get_modules('Footer', 'page/global');