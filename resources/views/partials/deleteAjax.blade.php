<script>
    $(document).ready(function () {
        $('.btn-delete').click(function(e) {
            e.preventDefault();
            var row = $(this).parents('tr');
            var id = row.data('id');
            var form = $('#form-delete');
            var url = form.attr('action').replace(':USER_ID', id);
            var data = form.serialize();

            row.fadeOut();

            $.post(url, data, function (result) {
                $('.bottom-right').notify({
                            message: {text: result.message},
                            type: 'info'
                        }
                ).show();
            }).fail(function () {
                row.show();
                $('.bottom-right').notify({
                            message: {text: 'El registro no fue eliminado.'},
                            type: 'danger'
                        }
                ).show();
            });

        });
    });
</script>