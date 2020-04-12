function validateSignInForm()
{
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (email == ''){
        alert('Bạn chưa nhập tên đăng nhập');
    }
    else if (password == '')
    {
        alert('Bạn chưa nhập mật khẩu');
    }
    return false;
}
function validateRegisterForm()
{
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (email == ''){
        alert('Bạn chưa nhập tên đăng nhập');
    }
    else if (password == '')
    {
        alert('Bạn chưa nhập mật khẩu');
    }
    return false;
}