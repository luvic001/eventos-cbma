$(document).on('click', '[open-menu]', event => {
  event.preventDefault();
  $('body').addClass('menu-open');
});

$(document).on('click', '[close-menu], aside.megamenu a', event => {
  event.preventDefault();
  $('body').removeClass('menu-open');
});

