<?php

if (!defined('PATH')) exit;
global $fields, $additional_comment;

foreach ($fields as $field => $is_required) {
  $$field = escapestr($_POST[$field]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body bgcolor="#dddddd">
  
  <table align="center" width="640px" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <td style="background-color: #ffffff;">
          <p style="text-align: center;">
            <a href="https://rioarbitrationweek.com.br"><img src="https://cbma.com.br/wp-content/uploads/2021/12/logo.png" alt="CBMA"></a>
          </p>
        </td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="background-color: #068a76; padding: 60px 0px;">
          <p style="text-align: center;">
            <img src="<?= get_image('icon-check-o.png') ?>" width="80px" height="80px" alt="Ícone check">
          </p>
          <p style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; text-align: center; font-size: 20px; color: #ffffff;">
            Novo evento publicado no formulário
          </p>
        </td>
      </tr>
      <tr>
        <td style="background-color: #ffffff; padding: 20px 30px;">
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>NOME DO EVENTO:</b> <br/> <?= $event_name ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>NOME DO RESPONSÁVEL PELO EVENTO:</b><br/> <?= $event_organization_contact_name ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>E-MAIL DO RESPONSÁVEL PELO EVENTO:</b><br/> <?= $event_organization_contact_email ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>CELULAR DO RESPONSÁVEL PELO EVENTO:</b><br/> <?= $event_organization_contact_phone ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>NOME DAS ENTIDADES ORGANIZADORAS DO EVENTO:</b><br/> <?= $event_organization_instituitions ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>DATA DE INÍCIO:</b> <?= $event_start_date ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>DATA DE TÉRMINO:</b> <?= $event_end_date ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>HORÁRIO DE INÍCIO:</b> <?= $event_start_time ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>HORÁRIO DE TÉRMINO:</b> <?= $event_end_time ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>VALOR DOS INGRESSOS:</b> <br/> <?= $event_price_details ?: 'Evento Gratuito' ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>LINK DO EVENTO:</b><br/> <?= $event_link ?: '-' ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>ENDEREÇO DO EVENTO:</b><br/> <?= $event_local ?: '-' ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>LINK PARA SE CADASTRAR NO EVENTO:</b><br/> <?= $event_registration_link ?: '-' ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>LISTA DE PALESTRANTES DO EVENTO:</b><br/> <?= $event_organization_environment ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>INFORMAÇÕES GERAIS SOBRE O EVENTO:</b><br/> <?= $additional_comment ?: '-' ?></p>
        </td>
      </tr>
    </tbody>
  </table>

</body>
</html>