<?php 
    $id = $_GET['id'];
    $verfy = $_GET['verfy'];
    if(isset($_POST['btn_update'])){
        $token = $_POST['token'];
        if(password_verify($token,$verfy)){
            $data = [
                'password' => password_hash($_POST['pass'],PASSWORD_DEFAULT)
            ];
            AccountModels::AccountUpdate($id, $data);
            setcookie('updatePass',true,time()+ 1);
            reUrlClient('login');
        }else{
            echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Mã xác nhận không đúng!",
                    willClose: () => {
                        history.back();
                    }
                });
            </script>';
        }
    }
    require_once $views . "Accounts/updatePass.php";
?>