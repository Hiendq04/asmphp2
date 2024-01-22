<?php 
    $idacc = $_GET['id'] ?? 0;
    AccountModels::AccountDelete($idacc);
    $_SESSION["delAcc"] = true;
    reUrl("accounts/list");
?>