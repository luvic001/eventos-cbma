<?php

if (!defined('PATH')) exit;
global $fields, $additional_comment;

foreach ($fields as $field) {
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
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>Nome do evento:</b> <?= $event_name ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>Contato na organização:</b> <?= $event_organization_contact_first_name ?> <?= $event_organization_contact_last_name ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>E-mail:</b> <?= $event_organization_contact_email ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>Instituições Organizadoras:</b> <?= $event_organization_instituitions ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>Data inicial do Evento:</b> <?= $event_start_date ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>Data final do Evento:</b> <?= $event_end_date ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>Horário Inicial:</b> <?= $event_start_time_hour ?>:<?= $event_start_time_minutes ?> <?= $event_start_time_ampm ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>Horário Final:</b> <?= $event_end_time_hour ?>:<?= $event_end_time_minutes ?> <?= $event_end_time_ampm ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>Link para inscrição/cadastro do evento:</b> <?= $event_link ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>Taxas de inscrição/evento gratuito:</b> <?= $event_price ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>Palestrantes, moderadores e programação do evento (você pode inserir o link para o programa) Consulte as regras para obter mais informações sobre nossas diretrizes de representação:</b><br/> <?= $event_organization_environment ?></p>
          <p style="font-family: Arial, Helvetica, sans-serif;"><b>Quaisquer informações adicionais:</b><br/> <?= $additional_comment ?: '-' ?></p>
        </td>
      </tr>
    </tbody>
  </table>

</body>
</html>