<div class="right-sitebar container-xxl pb-5">
    <div class="title-admin">
        <button onclick="back()" class="float-start ms-3 fs-3 text-dark py-4 opacity-75" ><i class="fa-solid fa-arrow-left"></i></button>
        <script>
            function back(){
                history.back();
            }
        </script>
        <h2 class="py-4">Thông tin tài khoản</h2>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="addAcc row mt-5 px-5">
            <div class="col-5 addAcc-img">
                <img src="<?php
                    if((!isset($account['avatar']))||($account['avatar']=="")) echo $pathUpload.'user.jpg'; 
                    else echo $pathUpload.$account['avatar'];
                ?>" alt="" class="rounded-circle mt-4 width:100%;">
            </div>
            <div class="col-7 addAcc-acc">
                <div class="addAcc-acc-show">
                    <div class="title">
                        <h2>Cập nhật thông tin tài khoản: </h2>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Tên đăng nhập</span>
                            <input readonly type="text" class="form-control" value="<?php echo $account['user_name'] ?>" require
                                name="user_name" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Tên</span>
                            <input readonly type="text" class="form-control" value="<?php if(isset($account['full_name'])) echo $account['full_name'] ?>" require
                                name="full_name" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Giới tính</span>
                            <input readonly type="text" class="form-control" value="<?php if(isset($account['gender'])){ $gender=''; if($account['gender']=='male') $gender = 'Nam'; else if($account['gender']=='female') $gender ='Nữ' ; echo $gender; }?>" require
                                name="gender" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Ngày sinh</span>
                            <input readonly type="text" class="form-control" value="<?php if(isset($account['birth_day'])&&($account['birth_day']!='0000-00-00')) echo $account['birth_day'] ?>" require
                                name="birth_day" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Email</span>
                            <input readonly type="text" class="form-control" value="<?php if(isset($account['email'])) echo $account['email'] ?>" require
                                name="u_email" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Số điện thoại</span>
                            <input readonly type="text" class="form-control" value="<?php if(isset($account['telephone'])) echo $account['telephone'] ?>" require
                                name="u_tel" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Địa chỉ</span>
                            <input readonly type="text" class="form-control" value="<?php if(isset($account['address'])) echo $account['address'] ?>" require
                                name="u_address" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Vai trò</span>
                            <input readonly type="text" class="form-control" 
                            value="<?php
                                if($account['role']=='admin') echo "Quản trị viên";
                                else echo "Khách hàng";
                            ?>"
                            require name="address" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Trạng thái</span>
                            <input readonly type="text" class="form-control" 
                            value="<?php
                                if($account['status']=='active') echo "Đang hoạt động";
                                else echo "Đã khóa" ;
                            ?>"
                            require name="address" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Ngày tạo</span>
                            <input readonly type="text" class="form-control" value="<?php echo $account['created_at'] ?>" require name="u_address" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <?php 
                            if(isset($account['update_at'])){
                                echo '<div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">Lần cập nhật gần nhất</span>
                                <input readonly type="text" class="form-control" value="'.$account['update_at'].'" require name="u_address" id="basic-url" aria-describedby="basic-addon3">
                            </div>';
                            }
                        ?>
                        <a class="btn btn-info mb-3" href="<?= $adminUrl . "accounts/update&id=".$account['id'] ?>">Sửa thông tin tài khoản</a>
                        <a onclick="return confirm('Bạn chắc chắn muốn xóa tài khoản này ?')" class="btn btn-danger mb-3" href="<?= $adminUrl . "accounts/delete&id=".$account['id'] ?>">Xóa tài khoản</a>
                        <div class="input-group mb-3">
                            <!-- <input type="submit" class="btn btn-success" name="btn_update-acc" value="Cập nhật">
                            <a onclick="return confirm('Bạn chắc chắn muốn quay lại trang danh sách tài khoản không ?')"
                                style="z-index: 1000;" class="btn p-0" href="<?= $adminUrl . "account/list" ?>"><span
                                    class="btn btn-secondary">Hủy</span></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
    <!-- Chủ để đã làm -->
    <div class="mt-5">
        <hr class="border border-dark border-2 opacity-50">
        <h4 class="modal-title">Chủ để đã làm</h4>
        <table style="width:100%;" class="table-hung">
            <tr>
                <th>
                    <p>STT</p>
                </th>
                <th>
                    <p>Số lượng</p>
                </th>
                <th>
                    <p>Thành tiền</p>
                </th>
                <th>
                    <p>Ngày đặt</p>
                </th>
                <th>
                    <p>Trạng thái</p>
                </th>
                <th>
                    <p>Thao tác</p>
                </th>
            </tr>
            <tbody>
                <?php $i=1; foreach ($echoBill as $bill) {
                            $linkBill = $adminUrl."billinfo&id=".$bill['id'];
                            echo "<tr>
                                <td>". $i++ ."</td>
                                <td>". $bill['bill_count'] ."</td>
                                <td>". number_format($bill['bill_price'])." </td>
                                <td>". date('d-m-Y',strtotime($bill['bill_create'])) ."</td>
                                <td>". $bill['echo_status'] ."</td>";
                            echo <<<HTML
                                    <td><a onclick="return confirm('Bạn có muốn chuyển sang trang quản lý đơn hàng ?')"  href="$linkBill"><i>chi tiết</i></a></td>
                                HTML;
                            echo "</tr>";
                        
                } ?>
            </tbody>
        </table>
    </div>
</div>