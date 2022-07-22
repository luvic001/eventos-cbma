<?php

if (!defined('PATH')) exit;

?>

<form ajax-form action="wp-admin/admin-ajax.php">

  <input type="hidden" name="action" value="send_eventos">

  <p style="color: #ffffff; font-size: 12px;" class="mb-3"><b>*</b> Campos obrigatórios</p>

  <div class="row">

    <div class="col-12">
      <div class="input-text">
        <label for="event_name">
          <p class="title required">NOME DO EVENTO</p>
          <input type="text" name="event_name" id="event_name" required>
        </label>
      </div>
    </div>

    <div class="col-12">
      <p class="title required">NOME DO RESPONSÁVEL PELO EVENTO</p>
      <div class="row">
        <div class="col-12">
          <div class="input-text">
            <label for="event_organization_contact_name">
              <input type="text" name="event_organization_contact_name" id="event_organization_contact_name" required>
            </label>
          </div>
        </div>
      </div>

    </div>
  
    <div class="col-md-6">
      <div class="input-text">
        <label for="event_organization_contact_email">
          <p class="title required">E-MAIL DO RESPONSÁVEL PELO EVENTO</p>
          <input type="email" name="event_organization_contact_email" id="event_organization_contact_email" required>
        </label>
      </div>
    </div>

    <div class="col-md-6">
      <div class="input-text">
        <label for="event_organization_contact_phone">
          <p class="title required">CELULAR DO RESPONSÁVEL PELO EVENTO</p>
          <input type="tel" mask="cel" maxlength="15" name="event_organization_contact_phone" id="event_organization_contact_phone" required>
        </label>
      </div>
    </div>

    <div class="col-md-6"></div>

    <div class="col-12">
      <div class="input-text">
        <label for="event_organization_instituitions">
          <p class="title required">NOME DAS ENTIDADES ORGANIZADORAS DO EVENTO</p>
          <textarea name="event_organization_instituitions" id="event_organization_instituitions" required></textarea>
        </label>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <div class="input-text">
        <label for="event_start_date">
          <p class="title required">DATA DE INÍCIO</p>
          <input type="text" name="event_start_date" id="event_start_date" required class="datepicker">
        </label>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <div class="input-text">
        <label for="event_end_date">
          <p class="title required">DATA DE TÉRMINO</p>
          <input type="text" name="event_end_date" id="event_end_date" required class="datepicker">
        </label>
      </div>
    </div>

    <div class="col-12"></div>

    <div class="col-lg-3 col-6">
      <p class="title required">HORÁRIO DE INÍCIO</p>
      <div class="row">
        <div class="col-12">
          <div class="input-text">
            <label for="event_start_time">
              <input type="time" placeholder="HH:MM" name="event_start_time" id="event_start_time" required>
            </label>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <p class="title required">HORÁRIO DE TÉRMINO</p>
      <div class="row">
        <div class="col-12">
          <div class="input-text">
            <label for="event_end_time">
              <input type="time" name="event_end_time" id="event_end_time" required>
            </label>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12"></div>
    
    <div class="col-lg-3 col-sm-6">
      <div class="input-radio">
        <label for="event_price">
          <input type="radio" name="event_price" id="event_price" value="free" required>
          <p>EVENTO GRATUITO</p>
        </label>
      </div>
    </div>

    <div class="col-lg-3 col-sm-6 radio-and-text">
      <div class="input-radio">
        <label>
          <input type="radio" name="event_price" value="paid" required>
          <p>EVENTO PAGO</p>
        </label>
      </div>
      <div class="input-text">
        <p>Valor dos ingressos</p>
        <label for="event_price_details">
          <textarea name="event_price_details" id="event_price_details" cols="30" rows="10"></textarea>
        </label>
      </div>
    </div>

    <div class="col-12"></div>

    <div class="col-md-6">
      <div class="input-text">
        <p class="title">LINK PARA ASSISTIR O EVENTO ONLINE</p>
        <label for="event_link">
          <input type="text" name="event_link" id="event_link">
        </label>
      </div>
    </div>

    <div class="col-md-6">
      <div class="input-text">
        <p class="title">ENDEREÇO PARA EVENTO PRESENCIAL</p>
        <label for="event_local">
          <input type="text" name="event_local" id="event_local">
        </label>
      </div>
    </div>

    <div class="col-12">
      <div class="input-text">
        <label for="event_registration_link">
          <p class="title">LINK PARA SE CADASTRAR NO EVENTO</p>
          <input type="text" name="event_registration_link" id="event_registration_link">
        </label>
      </div>
    </div>

    <div class="col-12">
      <div class="input-text">
        <label for="event_organization_environment">
          <p class="title required">LISTA DE PALESTRANTES DO EVENTO</p>
          <textarea name="event_organization_environment" id="event_organization_environment" required></textarea>
        </label>
      </div>
    </div>

    <div class="col-12">
      <div class="input-text">
        <label for="additional_comment">
          <p class="title">INFORMAÇÕES GERAIS SOBRE O EVENTO</p>
          <textarea name="additional_comment" id="additional_comment"></textarea>
        </label>
      </div>
    </div>

    <div class="col-12 mb-4">
      <div class="input-radio input-checkbox">
        <label>
          <input type="checkbox" required name="accept_terms">
          <p>Li e estou de acordo com os <a href="<?= site_url() ?>/termos-e-regras" target="_blank">termos e regras</a></p>
        </label>
      </div>
    </div>

    <div class="col-12">
      <div class="input-submit">
        <button type="submit" class="btn-site icon-right">ENVIAR EVENTO PARA O RJAW <i class="fas fa-arrow-right"></i></button>
      </div>
    </div>

  </div>

</form>

<?php

getCurScript('script', 'page/Home/Form-registration');