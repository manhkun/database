function getData(elem) {
    // console.log(1);
    $.ajax({
        url: "../../../controller/admin/form_edit/form-admin.php",
        method: "post",
        data: {
            id: $(elem).data('id')
        },
        success: function (result) {
            $('#modal-popup-edit').html(result);
            $('#modal-popup-edit').modal();
        }
    });
}