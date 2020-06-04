function getData(elem) {
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

function closeForm() {
    $.modal.close();
}


function askDelete(elem) {
    console.log(1);
    var result = confirm("Bạn chắc chắn muốn xóa");
    if(result)  {
        $.ajax({
            url: "../../../controller/admin/delete/admin.php",
            method: "post",
            data: {
                id: $(elem).data('id')
            },
            success: function (kq) {
                $(elem).html(kq);
                location.reload();
            }
            // success: function (response) { // success : kết quả trả về sau khi gửi request ajax
            //     // dữ liệu trả về là một object nên để gọi đến status chúng ta sẽ gọi như bên dưới
            //     if (response.status != 'undefined' && response.status == true) {
            //         $.html(response);
            //         // xóa dòng vừa được click delete
            //         // $('.item-'+id).closest('tr').remove(); // class .item- ở trong class của thẻ td đã khai báo trong file index
            //         location.reload();
            //     }
            // },
        });
    }
}

