
function getData(elem) {
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


function askDelete(elem) {
     console.log(1);
    var result = confirm("Bạn chắc chắn muốn xóa");
    if(result)  {
        $.ajax({
            url: "../../../controller/admin/delete/user.php",
            method: "post",
            data: {
                id: $(elem).data('id')
            },
            success: function (kq) {
                $(elem).html(kq);
                location.reload();
            }
        });
    }
}