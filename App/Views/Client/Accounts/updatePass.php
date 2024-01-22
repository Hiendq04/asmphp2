<div style="height: 60px;"></div>
<div class="signUp updatePass">
    <h2>Thay đổi mật khẩu</h2>

    <form action="" id="formSignUp" method="post">
        <div>
            <input type="text" placeholder="Mã xác nhận" name="token" id="user" class="mb20">
            <p style="opacity: 0;" class="err errUser">Ít nhất 6 kí tự gồm chữ cái và số</p>
        </div>
        <div>
            <input type="password" name="pass" id="pass" placeholder="Mật khẩu mới">
            <div class="icon icon1"><i class="fa-solid fa-eye"></i></div>
            <p class="err errPass">Ít nhất 8 kí tự gồm chữ cái, kí tự đặc biệt và số</p>
        </div>
        <div>
            <input type="password" name="repass" id="repass" placeholder="Nhập lại mật khẩu mới">
            <div class="icon icon2"><i class="fa-solid fa-eye"></i></div>
            <p class="err errRePass">Mật khẩu trùng khớp</p>
        </div>
        <input type="submit" id="btn_sub" name="btn_update" value="Cập nhật">
    </form>
</div>
<div style="height: 23px;"></div>
<?php
    if (isset($_COOKIE['logup'])) {
        logSuccess("Vui lòng xác nhận email để hoàn tất đăng kí!");
    }
?>
<script>
    function validate(input, error, condition, callback) {
        input.addEventListener('input', function() {
            let val = input.value;
            let check = condition(val);
            if (check) {
                error.style.color = "green";
            } else {
                error.style.color = "red";
            }
            callback(check);
        });
    }

    let checkPass = false;
    let checkRepass = false;

    validate(document.querySelector("#pass"), document.querySelector(".errPass"), function(value) {
        return /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(value);
    }, function(check) {
        checkPass = check;
    });

    let rePass = document.querySelector("#repass");
    let errRePass = document.querySelector(".errRePass");

    validate(rePass, errRePass, function() {
        return rePass.value === document.querySelector("#pass").value;
    }, function(check) {
        checkRepass = check;
    });

    // Ẩn hiện pass
    let inPass = document.querySelector("#pass");
    document.querySelector(".icon1").onclick = function() {
        if (inPass.type == "password") inPass.type = "text";
        else inPass.type = "password";
    }

    let inRePass = document.querySelector("#repass");
    document.querySelector(".icon2").onclick = function() {
        if (inRePass.type == "password") inRePass.type = "text";
        else inRePass.type = "password";
    }

</script>