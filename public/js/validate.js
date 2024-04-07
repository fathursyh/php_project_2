
// validate NPM input
$('#npm').on('change', function() {
    var field = $(this).get();

    field.setCustomValidity('');

    if(!field.validity.valid) {
        field.setCustomValidity('Masukan format NPM (0651-xxxxx)');
    }
});

$('#npm').on('focus', function() {
    $(this).attr('placeholder', 'format 0651-xxxxx');
});
