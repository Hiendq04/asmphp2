<?php 
    if (isset($_POST['btn_signIn']) && ($_POST['btn_signIn'])) {
        $tendn = $_POST['tendn'];
        $pass = $_POST['pass'];
        if (empty($tendn) || empty($pass)) {
            logError("Vui lòng nhập đầy đủ thông tin!");
        } else {
            //$user = AccountModels::AccountFind("user_name = '$tendn' or email = '$tendn' or telephone = '$tendn' and password = '$pass'");
            $user = AccountModels::AccountFind("user_name = '$tendn' or email = '$tendn' or telephone = '$tendn'");
            if (empty($user)) {
                logWarning("Tài khoản không tồn tại!");
            }else if(password_verify($pass,$user['password'])){
                if ($user['status'] == 'inactive') {
                    logError("Tài khoản này đã bị khóa");
                } else {
                    $_SESSION['user'] = $user;
                    setcookie("login", true, time() + 1);
                    reUrlClient("/");
                }
            }else{
                logWarning("Sai mật khẩu đăng nhập!");
            }
        }
    }

    require_once $views . "Accounts/logIn.php";
?>