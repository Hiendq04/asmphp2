<?php
if (isset($_POST['btnlogout'])) {
    unset($_SESSION['user']);
    reUrlClient('/');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="./App/Public/Styles/Client.css" />
</head>

<body>
    <header style="opacity: 1;" class="header-web">
    <div class="container">
    <nav>
        <a href="<?=$clientUrl . "/"?>">
        <div class="logo">
            <svg aria-hidden="true" class="pre-logo-svg" focusable="false" viewBox="0 0 24 24" role="img" width="60px" height="60px" fill="none">
            <path fill="currentColor" fill-rule="evenodd" d="M21 8.719L7.836 14.303C6.74 14.768 5.818 15 5.075 15c-.836 0-1.445-.295-1.819-.884-.485-.76-.273-1.982.559-3.272.494-.754 1.122-1.446 1.734-2.108-.144.234-1.415 2.349-.025 3.345.275.2.666.298 1.147.298.386 0 .829-.063 1.316-.19L21 8.719z" clip-rule="evenodd"></path>
            </svg>
        </div>
        </a>
        <form action="<?=$clientUrl . "group"?>" class="search" method="post">
        <input type="text" placeholder="Tìm kiếm chủ để theo ID" name="id" />
        <button type="submit" name="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <div class="menu">
        <ul>
            <li><a href="<?=$clientUrl . "/"?>">Trang chủ</a></li>
            <li><a href="#">Hỗ trợ</a></li>
        </ul>
        <div>
            <div class=" dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?=(empty($_SESSION['user']['u_img'])) ? $pathUpload . 'user.jpg' : $pathUpload . $_SESSION['user']['u_img']?>" class="avatar-user" alt="" />
                </button>

                <ul class="dropdown-menu gap-2">
                <?php
if (isset($_SESSION['user'])) {
    ?>
                    <li><a class="dropdown-item" href="<?=$clientUrl . "infoAccount"?>">Thông tin cá nhân</a></li>
                    <?php
if ($_SESSION['user']['role'] == 'admin') {
        ?>
                    <li><a class="dropdown-item" href="admin.php">Trang quản trị</a></li>
                    <?php
}
    ?>
                    <!-- <li><a class="dropdown-item" href="<?=$clientUrl . "cart"?>">Giỏ hàng</a></li>
                    <li><a class="dropdown-item" href="<?=$clientUrl . "bill/list"?>">Đơn hàng của bạn</a></li> -->
                    <li>
                    <form action="" method="post">
                        <button type="submit" name="btnlogout" class="btn btn-danger" style="width:100%;">Đăng xuất</button>
                    </form>
                    </li>
                <?php
} else {
    ?>
                    <li><a class="dropdown-item" href="<?=$clientUrl . "signup"?>">Đăng kí</a></li>
                    <li><a class="dropdown-item" href="<?=$clientUrl . "login"?>">Đăng nhập</a></li>
                <?php
}
?>
                </ul>
        </div>
    </div>
    </div>
    </nav>
    </div>
</header>
</body>