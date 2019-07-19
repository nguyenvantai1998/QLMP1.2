<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>100</h3>

                <p>Số lượng</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-list"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->

    <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>Loại sản phẩm</h3>

                <p>Danh sách Loại sản phẩm...</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-list"></i>
            </div>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <a href="indexAdmin.php?page=them_loai">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>Thêm</h3>

                    <p>Thêm loại sp...</p>
                </div>
                <div class="icon">
                    <i class="ion ion-plus"></i>
                </div>
            </div>
        </a>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->

<!-- list -->
<div class="row">
    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã Loại</th>
                <th>Tên Loại</th>
                <th>Mô tả</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

        <?php
            $table = query_select("SELECT * FROM loaisp");
            $count = $table->rowCount();
            $stt = 1;
            if ($count > 0) {
                foreach ($table as $row) {
        ?>

            <tr>
                <td><?php echo $stt++; ?></td>
                <td><?php echo $row['MaLoai'] ?></td>
                <td><?php echo $row['TenLoai'] ?></td>
                <td>
                <!-- <?php echo $row['Mota'] ?> -->
                <?php
                $str = $row['Mota']; //Tạo chuỗi
                $str = strip_tags($str); //Lược bỏ các tags HTML
                if(strlen($str)>100) { //Đếm kí tự chuỗi $str, 100 ở đây là chiều dài bạn cần quy định
                $strCut = substr($str, 0, 100); //Cắt 100 kí tự đầu
                $str = substr($strCut, 0, strrpos($strCut, ' ')).'... <a href="#">Read More</a>'; //Tránh trường hợp cắt dang dở như "nội d... Read More"
                }
                echo $str;
                ?>
                </td>
                <td>
                    <a id="example" href="?makm=<?php echo $row['MaKm']; ?>">
                        <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModalDetail">
                            <i class="fas fa-search"></i>
                        </button>
                    </a>&nbsp;

                    <button type="button" class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>

            <?php
                }
            }
            else
            {
                echo "<h2>Hiện tại chưa có sản phẩm...</h2>";
            }
        ?>
        </tbody>
    </table><!-- list product -->
</div>

<!-- modal detail -->
<?php include('list-product-detail.php'); ?>