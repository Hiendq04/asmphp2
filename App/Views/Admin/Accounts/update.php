<div class="right-sitebar container-xxl">
    <h2 class="py-4 title-admin">Cập nhật tài khoản</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="addAcc row mt-5 px-5">
            <div class="col-5 addAcc-img">
                <div>
                    <label for="formFile"><img id="img-add-acc" src="<?php
                    if ((!isset($account['avatar'])) || ($account['avatar'] == ""))
                        echo $pathUpload . 'user.jpg';
                    else
                        echo $pathUpload . $account['avatar'];
                    ?>" alt="" class="rounded-circle width:100%;"></label>
                </div>
                <div class="my-3">
                    <input class="form-control" type="file" name="avatar" onchange="chooseFile(this,'img-add-acc')"
                        id="formFile">
                </div>
            </div>
            <div class="col-7 addAcc-acc">
                <div class="addAcc-acc-show">
                    <div class="title">
                        <h2>Cập nhật thông tin tài khoản: </h2>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Tên đăng nhập</span>
                            <input type="text" class="form-control" value="<?php echo $account['user_name'] ?>" require
                                name="user_name" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Tên</span>
                            <input type="text" class="form-control" value="<?php echo $account['full_name'] ?>" require
                                name="full_name" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Email</span>
                            <input type="text" class="form-control" value="<?php echo $account['email'] ?>" require
                                name="email" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Số điện thoại</span>
                            <input type="text" class="form-control" value="<?php echo $account['telephone'] ?>" require
                                name="telephone" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Ngày sinh</span>
                            <input style="text-transform: uppercase;" type="date" class="form-control" value="<?php echo $account['birth_day'] ?>" require
                                name="birth_day" id="basic-url" aria-describedby="basic-addon3">
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
                            <span class="input-group-text" id="basic-addon3">Địa chỉ</span>
                            <input type="text" class="form-control" value="<?php echo $account['address'] ?>" require
                                name="address" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Vai trò</span>
                            <select name="role" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                <option value="admin" <?php if ($account['role'] == 'admin')
                                    echo "selected"; ?>>
                                    <?php echo "Quản trị viên" ?>
                                </option>
                                <option value="client" <?php if ($account['role'] == 'client')
                                    echo "selected"; ?>>
                                    <?php echo "Khách hàng" ?>
                                </option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Trạng thái</span>
                            <select name="status" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                <?php
                                if ($account['status'] == 'active') {
                                    echo "
                                        <option value='active' selected>Hoạt động</option>
                                        <option value='inactive'>Khóa</option>";
                                } else if ($account['status'] == 'inactive') {
                                    echo "
                                        <option value='active'>Mở khóa</option>
                                        <option value='inactive' selected >Đã khóa</option>";
                                } else {
                                    echo "
                                        <option value='0' selected hidden>Chọn</option>
                                        <option value='active'>Hoạt động</option>
                                        <option value='inactive'>Khóa</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-success" name="btn_update-acc" value="Cập nhật">
                            <a onclick="return confirm('Bạn chắc chắn muốn quay lại trang danh sách tài khoản không ?')"
                                style="z-index: 1000;" class="btn p-0" href="<?= $adminUrl . "accounts/list" ?>"><span
                                    class="btn btn-secondary">Hủy</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>