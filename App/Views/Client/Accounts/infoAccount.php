<div class="box-userInfo">
    <div class="box-userInfo-header">
        <h3>Hồ sơ của tôi</h3>
        <p>Quản lí thông tin hồ sơ để bảo mật tài khoản</p>
    </div>
    <div class="box-userInfo-content">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="box-userInfo-content-left">
                <table class="table">
                    <tr>
                        <td>Tên đăng nhập</td>
                        <td>
                            <?php if(isset($infoUser['user_name'])) echo $infoUser['user_name'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <?php if(isset($infoUser['email'])) echo $infoUser['email'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Họ và tên</td>
                        <td>
                            <?php if(isset($infoUser['full_name'])) echo $infoUser['full_name'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Giới tính</td>
                        <td>
                            <?php
                                $gender = '';
                                if(($infoUser['gender']=='male')) {
                                    $gender = 'Nam';
                                } else if($infoUser['gender']=='female'){
                                    $gender = 'Nữ';
                                }
                                echo $gender;
                            ?>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Ngày sinh</td>
                        <td>
                            <?php if(($infoUser['birth_day']!='0000-00-00')) echo $infoUser['birth_day'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td>
                            <?php if(isset($infoUser['telephone'])) echo $infoUser['telephone'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td>
                            <?php if((isset($gender['address']))&&($gender['address']!="")) echo $infoUser['address'] ?>
                        </td>
                    </tr>
                </table>
                <a class="btn p-0" href="<?= $clientUrl . "editInfo" ?>"><span name="btnInfo" class="btn btn-success">Thay
                        đổi thông tin</span></a>
                <a class="btn p-0" href="<?= $clientUrl . "changePass" ?>"><span name="btnInfo" class="btn btn-success">Đổi
                        mật khẩu</span></a>
            </div>
            <div class="box-userInfo-content-right">
                <div class="box-userInfo-content-right-img">
                    <img src="<?php
                    if ((!isset($infoUser['avatar'])) || ($infoUser['avatar'] == ""))
                        echo $pathUpload . 'user.jpg';
                    else
                        echo $pathUpload . $infoUser['avatar'];
                    ?>?>" alt="" id="userInfo-avatar" />
                </div>
            </div>
        </form>
    </div>
</div>
<?php
if (isset($_COOKIE['userInfo'])) {
    logSuccess("Đổi mật khẩu thành công");
}
if (isset($_COOKIE['editInfo'])) {
    logSuccess('Thay đổi thông tin tài khoản thành công');
}
?>