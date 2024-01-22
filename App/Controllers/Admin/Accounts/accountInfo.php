<?php 
    $idAcc = $_GET['id'];
    $account = AccountModels::AccountFind("id=".$idAcc);
    require_once $views . "Accounts/accountInfo.php";
?>