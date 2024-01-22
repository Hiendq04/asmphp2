<?php 
    if (isset($_POST['btn_signUp']) && ($_POST['btn_signUp'])) {
        $host = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
        $host .= "://" . $_SERVER['HTTP_HOST'] . "/asmphp2/?url=confirm";
        $ten = $_POST['ten'];
        $email = $_POST['email'];
        $pass = password_hash($_POST['pass'],PASSWORD_DEFAULT);
        if (empty($ten) || empty($email) || empty($pass)) {
            logWarning("Vui lòng nhập đầy đủ thông tin!");
        } else {
            $user = AccountModels::AccountFind("email like '%$email%' OR user_name like '%$ten%'");
            if (!empty($user)) {
                logError("Tên đăng nhập hoặc email đã tồn tại!");
            } else {
                $link = $host."&email=".$email."&user_name=".$ten."&password=".$pass;
                $body = '<a href="'.$link.'" class="btn btn-success">Xác nhận đăng kí tài khoản</a>';
                sendMail($email,$ten,'This is the account registration confirmation email',$body);
                setcookie("logup", true, time() + 1);
                reUrlClient('signup');
            }
        }
    }
    require_once $views . "Accounts/signUp.php";
?>