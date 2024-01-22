<?php 
    $infoUser = AccountModels::AccountFind('id = '.$_SESSION['user']['id']);
    $id = $infoUser['id'];
    $account = AccountModels::AccountFind("id = ".$id);

    if(isset($_POST['btn-changePass'])){
        $pass = $_POST['pass'];
        if(password_verify($pass,$infoUser['password'])){
            $data = [
                'password' => password_hash($_POST['newPass'],PASSWORD_DEFAULT),
                'update_at' => date('Y-m-d')
            ];
            AccountModels::AccountUpdate(''.$id, $data);
            setcookie('userInfo',true,time()+ 1);
            reUrlClient('infoAccount');
        }else{
            logError('Mật khẩu sai!');
        }
    }
    require_once $views."Accounts/changePass.php";
?>