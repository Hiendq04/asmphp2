<div class="right-sitebar container-xxl">
    <h2 class="py-4 title-admin">Thêm tài khoản</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="addAcc row mt-5 px-5">
            <div class="col-5 addAcc-img">
                <div>
                    <label src="" for="formFile"><img src="<?php echo $pathUpload.'user.jpg' ?>" id="img-add-acc" alt="" class="rounded-circle width:100%;"></label>
                </div>
                <div class="my-3">
                    <input class="form-control" type="file" name="avatar" onchange="chooseFile(this,'img-add-acc')" id="formFile">
                </div>
            </div>
            <div class="col-7 addAcc-acc">
                <div class="addAcc-acc-show">
                    <div class="title">
                        <h2>Thông tin tài khoản: </h2>
                        <h6>(<span style="color:red">*</span>)Trường thông tin bắt buộc.</h6>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Tên đăng nhập<span style="color:red">*</span></span>
                            <input type="text" class="form-control user" placeholder="abc123" require name="user_name" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Tên</span>
                            <input type="text" class="form-control name" placeholder="Nguyễn Văn A" require name="full_name" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Giới tính</span>
                            <span type="text" class="form-control"  id="basic-url" aria-describedby="basic-addon3">
                                <label class="gender-label ms-4 me-5">
                                    <input type="radio" name="gender" value="male" <?php if (isset($account['gender']) && $account['gender'] == 'male')
                                        echo 'checked'; ?>>
                                    <span>Nam</span>
                                </label>

                                <label class="gender-label">
                                    <input type="radio" name="gender" value="female" <?php if (isset($account['gender']) && $account['gender'] == 'female')
                                        echo 'checked'; ?>>
                                    <span>Nữ</span>
                                </label>
                            </span>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Ngày sinh</span>
                            <input style="text-transform: uppercase;" type="date" class="form-control name" require name="birth_day" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Email<span style="color:red">*</span></span>
                            <input type="text" class="form-control email" placeholder="nguyenvana@gmail.com" require name="email" aria-describedby="basic-addon3" >
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Số điện thoại</span>
                            <input type="text" class="form-control tel" placeholder="0123456789" require name="telephone" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3" style="position: relative;">
                            <span class="input-group-text" id="basic-addon3">Mật khẩu<span style="color:red">*</span></span>
                            <input type="password" class="form-control pass" min="0" step="5" placeholder="Chứa 8-16 kí tự gồm chữ cái, kí tự đặc biệt và số" require name="password" aria-describedby="basic-addon3">
                            <div class="iconPass"><i class="fa-solid fa-eye"></i></div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Địa chỉ</span>
                            <input type="text" class="form-control address" min="0" step="5" placeholder="Nhập địa chỉ người dùng" require name="address" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Vai trò<span style="color:red">*</span></span>
                            <select name="role" class="form-control role" aria-describedby="basic-addon3">
                                <option value="0" hidden>Chọn</option>
                                <option value="admin"><?php echo "Quản trị viên" ?></option>
                                <option value="client"><?php echo "Khách hàng" ?></option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="submit" class="btn btn-success form-control" name="btn_add-acc" value="Thêm tài khoản">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </form>
</div>
<script>
    let inPass = document.querySelector(".pass");
    let iconPass = document.querySelector(".iconPass");
    iconPass.onclick = function() {
        if (inPass.type == "password") {
            inPass.type = "text";
            iconPass.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
        }
        else {
            inPass.type = "password";
            iconPass.innerHTML = '<i class="fa-solid fa-eye"></i>';
        }
    }

    // Validate
    function validate(input, condition, callback) {
        input.addEventListener('input', function() {
            let val = input.value;
            let check = condition(val);
            callback(check);
        });
    }
    let checkUser = false;
    let checkEmail = false;
    let checkPass = false;
    let checkName = false;
    let checkTel = false;
    let checkAddress = false;
    let checkRole = false;

    validate(document.querySelector(".user"),function(value) {
        return /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/.test(value);
    }, function(check) {
        checkUser = check;
    });

    validate(document.querySelector(".name"),function(value) {
        return /^[a-zA-Z\sàáạảãăắằẳẵặâấầẩẫậèéẹẻẽêếềểễệđìíịỉĩòóọỏõôốồổỗộơớờởỡợùúụủũưứừửữựỳỹỷỵ]+$/.test(value);
    }, function(check) {
        checkName = check;
    });
    validate(document.querySelector(".email"),function(value) {
        return /^[a-zA-Z0-9._-]+@gmail\.com$/.test(value);
    }, function(check) {
        checkEmail = check;
    });
    validate(document.querySelector(".tel"),function(value) {
        return /^0\d{9}$/.test(value);
    }, function(check) {
        checkTel = check;
    });
    validate(document.querySelector(".pass"),function(value) {
        return /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/.test(value);
    }, function(check) {
        checkPass = check;
    });
    validate(document.querySelector(".address"),function(value) {
        return /^[\p{L}0-9\s,\/]+$/u.test(value);
    }, function(check) {
        checkAddress = check;
    });

    let role = document.querySelector(".role");
    role.addEventListener('input', function() {
        let check = false;
        if(role.value==1&&role.value==2) return check = true;
    });
    console.log(checkRole)
    console.log(role.value)
    

</script>