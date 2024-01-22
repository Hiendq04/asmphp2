  <?php
  session_start();

  if(!isset($_SESSION['user']) || $_SESSION['user']['role']!='admin'){
    header('Location: index.php');
  }

  // Config
  require_once "./App/Config/db.php";
  require_once "./App/Config/function.php";

    // Models
    require_once "./App/Models/AccountModels.php";
    require_once "./App/Models/GroupModels.php";
    require_once "./App/Models/QuestionModels.php";
    require_once "./App/Models/AnswerModels.php";
  
  // Điều hướng
  $pathUpload = "./App/Public/uploads/";
  $adminUrl = "/asmphp2/admin.php?url=";
  $views = "./App/Views/Admin/";
  $controller = "./App/Controllers/Admin/";

  require_once $views . "Layout/header.php";
  $url = $_GET['url'] ?? '/';
  switch ($url) {
    case "/": {
        require_once $controller . "Home/home.php";
        break;
      }
    case "groups/list": {
        require_once $controller . "Groups/list.php";
        break;
      }
    case "accounts/list": {
        require_once $controller . "Accounts/list.php";
        break;
      }
    case "accounts/delete": {
        require_once $controller . "Accounts/delete.php";
        break;
      }
    case "accounts/accountInfo": {
        require_once $controller . "Accounts/accountInfo.php";
        break;
      }
    case "accounts/update": {
        require_once $controller . "Accounts/update.php";
        break;
      }
    case "accounts/add": {
        require_once $controller . "Accounts/add.php";
        break;
      }

    default: {
        echo "Loại";
        break;
      }
  }
  require_once $views . "Layout/footer.php";
  ?>