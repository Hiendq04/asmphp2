<?php
$listAccount = AccountModels::AccountAll();
$check = 0;
if(isset($_POST['btn_add-acc'])){
    $img = $_FILES['avatar'];
    $imgPath = null;
    if(move_uploaded_file($img['tmp_name'],$pathUpload.$img['name'])){
        $imgPath = basename($img['name']);
    }
    if (!isset($_POST['gender']) || ($_POST['gender'] != 'male')&&($_POST['gender']=='male')) {
        $_POST['gender'] = null;
    }
    if (!isset($_POST['birth_day'])||($_POST['birth_day'])=='0000-00-00') {
        $_POST['birth_day'] = null;
    }
    if($_POST['user_name']==""||$_POST['email']==""||$_POST['password']==""||$_POST['role']=="") $check = 2;
    else{$data = [
        'user_name' => $_POST['user_name'],
        'full_name' => $_POST['full_name'],
        'gender' => $_POST['gender'],
        'birth_day' => $_POST['birth_day'],
        'email' => $_POST['email'],
        'avatar' => $imgPath,
        'password' => password_hash($_POST['password'],PASSWORD_DEFAULT),
        'address' => $_POST['address'],
        'telephone' => $_POST['telephone'],
        'status' => 'active',
        'role' => $_POST['role'],
        'created_at' => date('Y-m-d')
    ];
    AccountModels::AccountInsert($data);
    $check = 1;}
}
if($check == 1) logSuccess("Thêm tài khoản thành công");
else if($check == 2) logWarning("Vui lòng nhập các trường thông tin bắt buộc");
require_once $views."Accounts/add.php";
?>