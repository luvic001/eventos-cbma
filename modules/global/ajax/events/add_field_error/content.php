<?php

if (!defined('PATH')) exit;
global $err;

if ($err) {
  ob_start();

  ___('<script>');
    foreach ($err as $field => $label) {
      ___(sprintf('$.add_field_error(`#%s`, `%s`);', $field, $label));
    }
  ___('</script>');
  ___('<p>Atenção, alguns campos possuem erros, verifique e tente novamente.</p>');
  
  $content = ob_get_contents();
  ob_end_clean();

  fjson([
    'success' => false,
    'content' => $content
  ], 400);
}
