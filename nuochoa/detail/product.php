
<?php $masp = $_GET['masp']; ?>

<?php
    $table = query_select("SELECT * FROM sp, nhacungcap WHERE sp.MaNcc = nhacungcap.MaNCC AND sp.MaSP= '$masp'");
    $count = $table->rowCount();
    if ($count > 0) {
        foreach ($table as $row) {
?>

    <div class="col-left detail">
        <div class="title-name">
            <div class="brand"> <?php echo $row['TenNCC']; ?> </div>
            <div class="name"> <?php echo $row['Tensp']; ?> </div>
        </div>

        <div class="row box">
            <div class="left-img">
                <div class="list-img-product">
                    <?php
                        $table = query_select("SELECT * FROM sp, video WHERE sp.MaSP = video.MaSP AND sp.MaSP= '$masp' limit 0,5 ");
                        $count = $table->rowCount();
                        if ($count > 0) {
                            foreach ($table as $row1) {
                    ?>
                    <img src="<?php echo $row1['URLHinh'] ?>" class="tabImgDetail" alt="">
                        <?php
                            }
                        }
                    ?>
                </div>

                <div class="list-button-img">
                    <?php
                        $table = query_select("SELECT * FROM sp, video WHERE sp.MaSP = video.MaSP AND sp.MaSP= '$masp' limit 0,5 ");
                        $count = $table->rowCount();
                        if ($count > 0) {
                            foreach ($table as $row2) {
                    ?>
                    <button class="buttonTabImgDetail buttonTabImgDetail-active">
                        <img src="<?php echo $row2['URLHinh'] ?>">
                    </button>
                        <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="right-content">
                <div class="row-1">
                    <ul class="content">
                        <li><span>Nhãn hiệu</span>: <span><?php echo $row['TenNCC']; ?></span></li>
                        <li><span>Trạng thái</span>: <span> <?php echo $row['trangthai']; ?> </span></li>
                        <li><span>Ngày nhập hàng</span>: <span><?php echo $row['Ngaynhaphang']; ?></span></li>
                        <li><span>Hạng sử dụng</span>: <span><?php echo $row['hansudung']; ?> ngày</span></li>
                        <li><span>Mã nhà cung cấp</span>: <span><?php echo $row['MaNcc']; ?></span></li>
                        <li><span>Giá</span>: <span><?php echo $row['Gia']; ?> VNĐ</span></li>
                    </ul>
                </div>

                <div class="row-2">
                    <h4 class="title-sub">Mô tả</h4>
                    <p><?php echo $row['Mota']; ?></p>
                </div>
            </div>
        </div>
    </div>

<?php
        }
    }
?>


