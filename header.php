<?php

if (!defined('PATH')) exit;
global $TEMPLATE_DIRECTORY_URI;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= wp_title() ?></title>

  <?php if (GOOGLE_FONTS): ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<?= GOOGLE_FONTS ?>" rel="stylesheet">
  <?php endif; ?>

  <?php wp_head(); ?>

  <?php if (function_exists('load_fonts')) load_fonts() ?>
  <?php load_extra_css() ?>
  <style>
    <?= get_file('style.css') ?>
  </style>
  <script src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/jQuery.min.js"></script>
  <script src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/jquery-ui.min.js"></script>
  <script src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/bootstrap.min.js"></script>
  <?php /* <script src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/isotope.pkgd.min.js"></script> */ ?>
  <script src="<?= $TEMPLATE_DIRECTORY_URI ?>/js/fontawesome-all.min.js"></script>

  <link href="<?= $TEMPLATE_DIRECTORY_URI ?>/css/jquery-ui.min.css" rel="stylesheet">

  <script>
    let site_url = '<?= site_url() ?>';
    let siteLoader = `
    <div class="loading-options">
      <?= svg('lds-ring') ?>
      <p>Carregando</p>
    </div>
    `;
    const SITE_TITLE = '<?= wp_title() ?>';
    <?= get_file('js/script.min.js') ?>
  </script>

</head>
<body <?= body_class() ?>>
  
<main class="site-content">

<?php 

get_modules('Popup');