
function getData(elem) {
    // console.log(1);
    $.ajax({
        url: "../../../controller/admin/form_edit/form-user.php",
        method: "post",
        data: {
            id: $(elem).data('id')
        },
        success: function (result) {
            $('#modal-content').html(result);
            $('#modal-popup').modal();
        }
    });
}

function closeForm(){
    $.modal.close();
}