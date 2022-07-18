<?php

if (!defined('PATH')) exit;

?>

<form ajax-form action="wp-admin/admin-ajax.php">

  <input type="hidden" name="action" value="send_eventos">

  <div class="row">

    <div class="col-md-6">
      <div class="input-text">
        <label for="event_name">
          <p class="title required">Nome do evento</p>
          <input type="text" name="event_name" id="event_name" required>
        </label>
      </div>
    </div>
    <div class="col-md-6"></div>


    <div class="col-12">
      <p class="title required">Contato na organização</p>
      <div class="row">
        <div class="col-md-6">
          <div class="input-text">
            <label for="event_organization_contact_first_name">
              <input type="text" name="event_organization_contact_first_name" id="event_organization_contact_first_name" required>
              <p class="subtitle">Nome</p>
            </label>
          </div>
        </div>

        <div class="col-md-6">
          <div class="input-text">
            <label for="event_organization_contact_last_name">
              <input type="text" name="event_organization_contact_last_name" id="event_organization_contact_last_name" required>
              <p class="subtitle">Sobrenome</p>
            </label>
          </div>
        </div>
      </div>

    </div>
  
    <div class="col-md-6">
      <div class="input-text">
        <label for="event_organization_contact_email">
          <p class="title required">E-mail</p>
          <input type="email" name="event_organization_contact_email" id="event_organization_contact_email" required>
        </label>
      </div>
    </div>

    <div class="col-md-6"></div>

    <div class="col-12">
      <div class="input-text">
        <label for="event_organization_instituitions">
          <p class="title required">Instituições Organizadoras</p>
          <textarea name="event_organization_instituitions" id="event_organization_instituitions" required></textarea>
        </label>
      </div>
    </div>

    <div class="col-md-3 col-6">
      <div class="input-text">
        <label for="event_start_date">
          <p class="title required">Data inicial do Evento</p>
          <input type="text" name="event_start_date" id="event_start_date" required class="datepicker">
        </label>
      </div>
    </div>

    <div class="col-md-9 col-6"></div>

    <div class="col-md-3 col-6">
      <div class="input-text">
        <label for="event_end_date">
          <p class="title required">Data final do Evento</p>
          <input type="text" name="event_end_date" id="event_end_date" required class="datepicker">
        </label>
      </div>
    </div>

    <div class="col-md-9 col-6"></div>

    <div class="col-lg-4 col-md-5 col-8">
      <p class="title required">Horário Inicial</p>
      <div class="row">
        <div class="col-4">
          <div class="input-text">
            <label for="event_start_time_hour">
              <input type="number" min="0" max="12" name="event_start_time_hour" id="event_start_time_hour" required>
              <p class="subtitle align-center">HH</p>
            </label>
          </div>
        </div>
        <div class="col-4">
          <div class="input-text">
            <label for="event_start_time_minutes">
              <input type="number" min="0" max="59" name="event_start_time_minutes" id="event_start_time_minutes" required>
              <p class="subtitle align-center">MM</p>
            </label>
          </div>
        </div>
        <div class="col-4">
          <div class="input-select">
            <label for="event_start_time_ampm">
              <select name="event_start_time_ampm" id="event_start_time_ampm">
                <option value="am" selected>AM</option>
                <option value="pm">PM</option>
              </select>
            </label>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12"></div>

    <div class="col-lg-4 col-md-5 col-8">
      <p class="title required">Horário final</p>
      <div class="row">
        <div class="col-4">
          <div class="input-text">
            <label for="event_end_time_hour">
              <input type="number" min="0" max="12" name="event_end_time_hour" id="event_end_time_hour" required>
              <p class="subtitle align-center">HH</p>
            </label>
          </div>
        </div>
        <div class="col-4">
          <div class="input-text">
            <label for="event_end_time_minutes">
              <input type="number" min="0" max="59" name="event_end_time_minutes" id="event_end_time_minutes" required>
              <p class="subtitle align-center">MM</p>
            </label>
          </div>
        </div>
        <div class="col-4">
          <div class="input-select">
            <label for="event_end_time_ampm">
              <select name="event_end_time_ampm" id="event_end_time_ampm">
                <option value="am" selected>AM</option>
                <option value="pm">PM</option>
              </select>
            </label>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12"></div>

    <div class="col-md-6">
      <div class="input-text">
        <label for="event_link">
          <p class="title required">Link para inscrição/cadastro do evento</p>
          <input type="text" name="event_link" id="event_link" required>
        </label>
      </div>
    </div>

    <div class="col-12"></div>

    <div class="col-md-6">
      <div class="input-text">
        <label for="event_price">
          <p class="title required">Taxas de inscrição/evento gratuito</p>
          <input type="text" name="event_price" id="event_price" required>
        </label>
      </div>
    </div>

    <div class="col-12"></div>
    
    <div class="col-12">
      <div class="input-text">
        <label for="event_organization_environment">
          <p class="title required">Palestrantes, moderadores e programação do evento (você pode inserir o link para o programa) Consulte as regras para obter mais informações sobre nossas diretrizes de representação.</p>
          <textarea name="event_organization_environment" id="event_organization_environment" required></textarea>
        </label>
      </div>
    </div>

    <div class="col-12">
      <div class="input-text">
        <label for="additional_comment">
          <p class="title">Quaisquer informações adicionais</p>
          <textarea name="additional_comment" id="additional_comment"></textarea>
        </label>
      </div>
    </div>

    <div class="col-12">
      <div class="input-submit">
        <button type="submit">Submit</button>
      </div>
    </div>

  </div>

</form>

<?php

getCurScript('script', 'page/Home/Form-registration');