<?php

if (!defined('PATH')) exit;

get_modules('Header', 'page/global');
get_modules('Webdoor/content', 'page/home');

?>

<section class="site-sections">
  <div class="container">
    <?php get_modules('content', 'page/Home/Form-registration') ?>
  </div>
</section>

<?php

get_modules('Footer', 'page/global');