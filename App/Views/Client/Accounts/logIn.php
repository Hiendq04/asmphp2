<div class="signIn">
    <h2>Đăng nhập</h2>
    <form action="" id="form_logup" method="Post">
        <div><input type="text" placeholder="Tên đăng nhập/Email/Số điện thoại" name="tendn" id="username" class="mb20">
            <p class="errUser"></p>
        </div>
        <div>
            <input class="password" type="password" name="pass" id="pass" placeholder="Mật khẩu">
            <div class="icon"><i class="fa-solid fa-eye"></i></div>
        </div>
        <a href="<?= $clientUrl . 'forgot'?>">Quên mật khẩu</a>
        <input type="submit" name="btn_signIn" value="Đăng nhập">
    </form>
    <div class="more">
        Bạn chưa có tài khoản?
        <a href="<?= $clientUrl . "signup" ?>">Đăng ký</a>
    </div>
    <?php
    if (isset($_COOKIE['updatePass'])) {
        logSuccess("Thay đổi mật khẩu thành công!");
    }
    ?>
</div>
<script>
    let inPass = document.querySelector(".password");
    document.querySelector(".icon").onclick = function() {
        if (inPass.type == "password") inPass.type = "text";
        else inPass.type = "password";
    }
</script>