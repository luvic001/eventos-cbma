<?php

if (!defined('PATH')) exit;

get_header();
get_modules('Header', 'page/global');
?>

<section class="site-sections internal-page">

  <div class="container">
    <div class="section-title">
      <h1><?= get_the_title() ?></h1>
    </div>
    <div class="editor-content">
      <?= wpautop(get_the_content()) ?>
    </div>
  </div>

</section>

<?php
get_modules('Fale-conosco/content', 'page/home');
get_modules('Footer', 'page/global');
get_footer();