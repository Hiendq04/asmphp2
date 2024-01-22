<div class="box_editUserInfo box-userInfo">
    <div class="box-userInfo-header">
        <h3>Chỉnh sửa hồ sơ</h3>
        <p>Chỉnh sửa thông tin tài khoản</p>
    </div>
    <div class="box-userInfo-content">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="box-userInfo-content-left">
                <table class="table">
                        <tr>
                            <td style="min-width: 150px;">Tên đăng nhập</td>
                            <td><input type="text" id="user" name="user_name" value="<?php if (isset($infoUser['user_name']))
                            echo $infoUser['user_name'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Họ và tên</td>
                            <td><input type="text" id="full_name" name="full_name" value="<?php if (isset($infoUser['full_name']))
                            echo $infoUser['full_name'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Giới tính</td>
                            <td class="gender-row">
                                <label class="gender-label"><input type="radio" name="gender" value="male" <?php if (isset($infoUser['gender']) && $infoUser['gender'] == 'male') echo 'checked'; ?>> <span>Nam</span></label>
                                <label class="gender-label"><input type="radio" name="gender" value="female" <?php if (isset($infoUser['gender']) && $infoUser['gender'] == 'female') echo 'checked'; ?>> <span>Nữ</span></label>
                            </td>
                        </tr>
                        <tr>
                        <td>Ngày sinh</td>
                        <td><input type="date" id="birth_day" name="birth_day" value="<?php if (isset($infoUser['birth_day']))
                            echo $infoUser['birth_day'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input disabled type="text" id="email" name="email" value="<?php if (isset($infoUser['email']))
                            echo $infoUser['email'] ?>" /></td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td><input type="text" id="tel" name="telephone" value="<?php if (isset($infoUser['telephone']))
                            echo $infoUser['telephone'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td class="api-tinh">
                                <select class="form-select" id="tinh">
                                    <option value="">Chọn tỉnh thành</option>
                                </select>
                                <input type="hidden" id="inputTinh" value="" name="tinh">
                                <select class="form-select my-1" id="huyen">
                                    <option value="">Chọn quận huyện</option>
                                </select>
                                <input type="hidden" id="inputHuyen" value="" name="huyen">
                                <select class="form-select" id="xa">
                                    <option value="">Chọn xã</option>
                                </select>
                                <input type="hidden" id="inputXa" value="" name="xa">
                            </td>
                        </tr>
                        <tr>
                            <td>Chi tiết</td>
                            <td><input placeholder="Địa chỉ chi tiết" type="text" id="address" name="address" value="<?php if (isset($infoUser['address']))
                            echo $infoUser['address'] ?>"></td>
                        </tr>           
                </table>
                    <input type="hidden" id="iduser" value="<?= $infoUser['id'] ?>">
                <button type="submit" name="btn-editInfo" id="btn-editInfor" class="btn btn-success">Lưu thông
                    tin</button>
                <a href="<?= $clientUrl . "infoAccount" ?>" class="btn"><button type="button"
                        class="btn btn-secondary">Hủy</button></a>
            </div>
            <div class="box-userInfo-content-right">
                <div class="box-userInfo-content-right-img">
                    <img src="<?php
                    if ((!isset($infoUser['avatar'])) || ($infoUser['avatar'] == ""))
                        echo $pathUpload . 'user.jpg';
                    else
                        echo $pathUpload . $infoUser['avatar'];
                    ?>?>" alt="" id="userInfo-avatar" />
                    <label for="changeFile"><i class="fa-solid fa-pen-to-square"></i></label>
                    <input type="file" class="imageUser" name="avatar" id="changeFile"
                        onchange="chooseFile(this,'userInfo-avatar')">
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#tinh").on('change', function () {
            tinh = $("#tinh").find("option:selected").text();
            $('#inputTinh').val(tinh);
        });
        $("#huyen").on('change', function () {
            huyen = $("#huyen").find("option:selected").text();
            $('#inputHuyen').val(huyen);
        });
        $("#xa").on('change', function () {
            xa = $("#xa").find("option:selected").text();
            $('#inputXa').val(xa);
        });
    });
</script>