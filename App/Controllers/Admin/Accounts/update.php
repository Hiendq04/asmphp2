<?php 
    $idAcc = $_GET['id'];
    $account = AccountModels::AccountFind("id=".$idAcc);
    if(isset($_POST['btn_update-acc'])){
        $img=$_FILES['avatar'];
        $imgPath=$account['avatar'];
        if(move_uploaded_file($img['tmp_name'],$pathUpload.$img['name'])){
            $imgPath=basename($img['name']);
        }
        if (!isset($_POST['gender']) || ($_POST['gender'] != 'male')&&($_POST['gender']=='male')) {
            $_POST['gender'] = null;
        }
        if (!isset($_POST['birth_day'])||($_POST['birth_day'])=='0000-00-00') {
            $_POST['birth_day'] = null;
        }
        $data = [
            'user_name' => $_POST['user_name'],
            'full_name' => $_POST['full_name'],
            'avatar' => $imgPath,
            'email' => $_POST['email'],
            'gender' => $_POST['gender'],
            'birth_day' => $_POST['birth_day'],
            'address' => $_POST['address'],
            'telephone' => $_POST['telephone'],
            'status' => $_POST['status'],
            'role' => $_POST['role'],
            'update_at' => date('Y-m-d')

        ];
        AccountModels::AccountUpdate(''.$idAcc, $data);
        $_SESSION['updateAcc'] = true;
        reUrl('accounts/list');
    }
    require_once $views . "Accounts/update.php";
?>