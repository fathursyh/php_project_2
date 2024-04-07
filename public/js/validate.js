function customTextValidation(e, text) {
    var field = $(e).get(0);

    field.setCustomValidity('');

    if(!field.validity.valid) {
        field.setCustomValidity(text);
    }
}


// validate NPM input
$('#npm').on('change', function() {
    var field = $(this).get(0);

    field.setCustomValidity('');

    if(!field.validity.valid) {
        field.setCustomValidity('Masukan format NPM (0651-xxxxx)');
    }
});
// NPM placeholder change
$('#npm').on('focus', function() {
    $(this).attr('placeholder', 'format 0651-xxxxx');
});

// autofocus on name when model shown
$(document).on('shown.bs.modal', '#formModal', function() {
    $(this).find('[autofocus]').focus();
  });