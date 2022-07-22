<?php

if (!defined('PATH')) exit;

get_modules('Header-megamenu', 'page/global');

?>

<header class="site-header">

  <div class="container-fluid">
    <div class="row align-items-center justify-content-between">
      <div class="col-xl-3 col-10">
        <div class="site-logo">
          <a href="<?= site_url() ?>" class="no-decoration" title="RJAW | RIO ARBITRATION WEEK">
            <h1>
              <img src="<?= get_image('logo-site-rjaw.png') ?>" alt="RJAW | Rio Arbitration Week">
            </h1>
          </a>
        </div>
      </div>
      <div class="col-xl-9 d-none d-xl-flex justify-content-end">
        <?php get_modules('Header-nav', 'page/global') ?>
      </div>
      <div class="col-2 d-flex justify-content-end d-xl-none mobile-toggle">
        <a class="burguer" href="javascript:void(0);" open-menu>
          <span></span>
          <span></span>
          <span></span>
        </a>
      </div>
    </div>
  </div>

</header>