<?php
    $data = [
        'user_name' => $_GET['user_name'],
        'email' => $_GET['email'],
        'password' => $_GET['password'],
        'created_at' => date('Y-m-d'),
        'role' => 'client'
    ];
    AccountModels::AccountInsert($data);
    require_once $views . "Accounts/signUp.php";
?>
<script>
    Swal.fire({
    title: "Hoàn tất!",
    text: "Đã hoàn tất quá trình đăng kí tài khoản!",
    icon: "success",
    willClose: () => {
        window.location.href = "http://localhost/asmphp2/?url=login";
    }
});
</script>