$(document).ready(function() {
    $('#kataPencarian').on('keyup', function() {

        // Ajax Load
        // $('#tabel').load('AJAX/data.php?kataPencarian=' + $('#kataPencarian').val());

        $.get('AJAX/data.php?kataPencarian=' + $('#kataPencarian').val(), function(data) {
            $('#tabel').html(data);
        });
    });
});