<div class="right-sitebar container content-admin">
    <h2 class="py-4 title-admin">Tìm kiếm chủ đề theo ID hoặc tên</h2>
    <form class="input-group mb-3" method="post">
        <input type="text" class="form-control" name="keyword" placeholder="Nhập tên sản phẩm muốn tìm" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="submit" name="btn-search" id="button-addon2">Tìm kiếm</button>
        <button class="btn btn-outline-secondary" type="submit" name="btn-all" id="button-addon2">Tất cả</button>
    </form>
    <?=
    isset($keyword) ? "<p style='font-size: 1.1rem;'>Kết quả tìm kiếm của: <span style='color:red;font-weight: 500;'>$keyword</span></p>" : '';
    ?>
    <div class="page mt-2 mb-1 d-flex justify-content-end align-items-center pe-4">
        <?php
        if ($page_current > 1) {
            echo '<a href="' . $adminUrl . "groups/list&size=$page_size&page=" . ($page_current - 1) . '" class=" mx-1 btn btn-outline-dark">Pre</a>';
        }
        ?>
        <?php for ($i = 0; $i < $sotrang; $i++) : ?>
            <a href="<?= $adminUrl . "groups/list&size=$page_size&page=" . $i + 1 ?>" class="<?= $page_current == ($i + 1) ? 'togger' : '' ?> mx-1 btn btn-outline-dark"><?= $i + 1 ?></a>
        <?php endfor; ?>
        <?php
        if ($page_current < $sotrang) {
            echo '<a href="' . $adminUrl . "groups/list&size=$page_size&page=" . ($page_current + 1) . '" class=" mx-1 btn btn-outline-dark">Next</a>';
        }
        ?>
    </div>
    <div class="box-product-right-content new-product">
        <?php
        foreach ($listProducts as $pro) :
            foreach ($listPP as $pp) :
                if ($pro['id'] == $pp['pp_proid']) :
        ?>
                    <div class="card" style="width: 16rem">
                        <img src="<?= $pathUpload . $pro['pro_img'] ?>" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title product-title-name-all"><?= $pro['pro_name'] ?></h5>
                            <div class="card-views">
                                <p class="card-text ">Giá: <?= number_format($pp['minprice']) . " -> " . number_format($pp['maxprice']) . "(vnđ)" ?></p>
                                <span>Lượt mua : <?= $pp['total_buys'] ?></span>
                            </div>
                            <div class="card-views d-flex justify-content-between">
                                <span>Trạng thái: <?= $pro['pro_status'] == 0 ? "Đang bán" : "<span style='color:red;font-weight:500'>Ngừng bán</span>" ?></span>
                                <span>Tồn kho: <?= $pp['total_count'] ?></span>
                            </div>
                            <div class="card-thaotac mt-2 d-flex justify-content-center align-items-center">
                                <a href="<?= $adminUrl . "groups/chitiet&id=" . $pro['id'] ?>" class="btn btn-outline-primary">Chi tiết</a>
                                <a href="<?= $adminUrl . "groups/update&id=" . $pro['id'] ?>" class="btn btn-outline-primary mx-2">Sửa</a>
                                <a href="<?= $adminUrl . "groups/delete&id=" . $pro['id'] ?>" class="btn btn-outline-primary">Xóa</a>
                            </div>
                        </div>
                    </div>
        <?php
                endif;
            endforeach;
        endforeach;
        ?>

    </div>
</div>