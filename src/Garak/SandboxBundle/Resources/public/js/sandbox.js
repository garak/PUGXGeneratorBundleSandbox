$(document).ready(function() {
    /* delete confirm */
    $('form#delete').submit(function(e) {
        var $form = $(this);
        var $hidden = $form.find('input[name="modal"]');
        if ($hidden.val() != 1) {
            e.preventDefault();
            $('#delete_confirm').modal('show');
            $('#delete_confirm').find('button.btn-danger').click(function() {
                $('#delete_confirm').modal('hide');
                $hidden.val(1);
                $form.submit();
            });
        }
    });

    // filter icon
    $('button.filter').click(function() {
        var $icon = $(this).find('i');
        var target = $(this).attr('data-target');
        if ($icon.length) {
            var $div = $(target);
            if ($div.height() > 0) {
                $icon.attr('class', 'fa fa-angle-down')
            } else {
                $icon.attr('class', 'fa fa-angle-right')
            }
        }
    });
});