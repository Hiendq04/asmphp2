<?php
    session_start();
    
    // pdo
    require_once "./App/Config/db.php";
    require_once "./App/Config/function.php";

    // model 
    require_once "./App/Models/AccountModels.php";
    require_once "./App/Models/GroupModels.php";
    require_once "./App/Models/QuestionModels.php";
    require_once "./App/Models/AnswerModels.php";

    // send mail
    require_once "./sendMail.php";

    // router
    $clientUrl = '/asmphp2/?url=';
    $pathUpload = "./App/Public/uploads/";
    $views = "./App/Views/Client/";
    $controllers = "./App/Controllers/Client/";
    

    require_once $views . "Layout/header.php";
    $url = $_GET['url'] ?? '/';
    switch($url){
        case '/' : {
            require_once $controllers."Home/home.php";
            break;
        }
        case 'login' : {
            require_once $controllers."Accounts/logIn.php";
            break;
        }
        case 'signup' : {
            require_once $controllers."Accounts/signUp.php";
            break;
        }
        case 'forgot' : {
            require_once $controllers."Accounts/forgot.php";
            break;
        }
        case 'infoAccount' : {
            require_once $controllers."Accounts/infoAccount.php";
            break;
        }
        case 'editInfo' : {
            require_once $controllers."Accounts/editInfo.php";
            break;
        }
        case 'changePass' : {
            require_once $controllers."Accounts/changePass.php";
            break;
        }
        case 'updatePass' : {
            require_once $controllers."Accounts/updatePass.php";
            break;
        }
        case 'confirm' : {
            require_once $controllers."Accounts/confirm.php";
            break;
        }
        case 'group' : {
            require_once $controllers."Questions/question.php";
            break;
        }
    }
    require_once "./App/Views/Client/Layout/footer.php";
?>