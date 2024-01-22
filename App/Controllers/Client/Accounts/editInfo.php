<?php 
    $infoUser = AccountModels::AccountFind('id = '.$_SESSION['user']['id']);
    $infoUser['address'] = strstr($infoUser['address'],",",true);
    $id = $infoUser['id'];
    $account = AccountModels::AccountFind("id = ".$id);
    if(isset($_POST['btn-editInfo'])){
        $img=$_FILES['avatar'];
        $imgPath=$account['avatar'];
        if(move_uploaded_file($img['tmp_name'],$pathUpload.$img['name'])){
            $imgPath=basename($img['name']);
        }
        if($_POST['birth_day']!='0000-00-00'){
            $_POST['birth_day'] = NULL;
        }
        $data = [
            'id' => $id,
            'user_name' => $_POST['user_name'],
            'full_name' => $_POST['full_name'],
            'avatar' => $imgPath,
            'gender' => $_POST['gender'],
            'birth_day' => $_POST['birth_day'],
            'address' => $_POST['address'].", ".$_POST['xa'].", ".$_POST['huyen'].", ".$_POST['tinh'],
            'telephone' => $_POST['telephone'],
            'role' => $account['role'],
            'update_at' => date('Y-m-d')
        ];
        // var_dump($data);
        // die();
        AccountModels::AccountUpdate($id, $data);
        $_SESSION['user'] = $data;
        setcookie('editInfo',true,time()+ 1);
        reUrlClient('infoAccount');
    }
    require_once $views . "Accounts/editInfo.php";
?>