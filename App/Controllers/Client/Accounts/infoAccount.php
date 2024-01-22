<?php 
    $infoUser = AccountModels::AccountFind('id = '.$_SESSION['user']['id']);
    if(isset($infoUser)) require_once $views . "Accounts/infoAccount.php";
    else reUrlClient('/');
?>