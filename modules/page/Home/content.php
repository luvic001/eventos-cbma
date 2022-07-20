<?php

if (!defined('PATH')) exit;

get_modules('Header', 'page/global');

?>

<section class="site-sections">
  <div class="container">
    <?php get_modules('content', 'page/Home/Form-registration') ?>
  </div>
</section>

<?php

get_modules('Footer', 'page/global');