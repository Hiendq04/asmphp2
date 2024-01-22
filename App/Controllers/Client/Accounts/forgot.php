<?php 
    if(isset($_POST['btn_send'])){
        $host = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
        $host .= "://" . $_SERVER['HTTP_HOST'] . "/asmphp2/?url=updatePass";
        $email = $_POST['email'];
        $account = AccountModels::AccountFind("email = '$email' ");
        if(!isset($account['email'])){
            echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Email không tồn tại!",
                    willClose: () => {
                        history.back();
                    }
                });
            </script>';
        }else{
            $token = rand(1000,9999);
            $verfy = password_hash($token,PASSWORD_DEFAULT);

            $body = 'Mã xác nhận của bạn là: <b>'.$token.'</b>';
            sendMail($account['email'],$account['user_name'],'Verification',$body);

            $link = $host .'&id=' . $account['id'] . '&verfy='.$verfy;
            echo '<script>
            Swal.fire({
            title: "Hoàn tất!",
            text: "Mã khôi phục đã được gửi!",
            icon: "success",
            willClose: () => {
                window.location.href = "'.$link.'";
            }
        });
        </script>';
        }
        die();
    }
    require_once $views . "Accounts/forgot.php";
?>