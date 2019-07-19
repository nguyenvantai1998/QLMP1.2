<script type="text/javascript">
	function deleleAction(){
		return confirm("Bạn có muốn xóa tin tức này?");
	}
</script>
<?php
if($_SESSION['DeleteCheck']){
    echo '<script type="text/javascript">';
    echo "setTimeout(function () { Swal.fire({
        type: 'success',
        title: 'Đã xóa chương trình KM!',
        showConfirmButton: false,
        timer: 1500
         });";
    echo '}, 1000);</script>';
    $_SESSION['DeleteCheck'] = false;
}
?>
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
                <h3>Chương trình khuyến mãi</h3>

                <p>Danh sách CTKM...</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-list"></i>
            </div>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <a href="indexAdmin.php?page=them_ct_km">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>Thêm</h3>

                    <p>Thêm CTKM...</p>
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
                <th>Mã Khuyến mãi</th>
                <th>Sản phẩm KM</th>
                <th>Thời gian bắt đầu</th>
                <th>Thời gian kết thúc</th>
                <th>Tỉ lệ giảm giá</th>
                <th>Số thành viên</th>
                <th>Ghi chú</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $table = query_select("SELECT * FROM ctkm");
            $count = $table->rowCount();
            $stt = 1;
            if ($count > 0) {
                foreach ($table as $row) {
        ?>

            <tr>
                <td><?php echo $stt++; ?></td>
                <td><?php echo $row['MaKm'] ?></td>
                <td><?php echo $row['MaSP'] ?></td>
                <td><?php echo $row['TGBD'] ?></td>
                <td><?php echo $row['TGKT'] ?></td>
                <td><?php echo $row['Tilegiamgia'] ?></td>
                <td><?php echo $row['member'] ?></td>
                <td><?php echo $row['Ghichu'] ?></td>
                <td>
                    <a href="?page=sua_ct_km&id=<?php echo $row['MaKm'];?>&product=<?php echo $row['MaSP'];?>">
                        <button type="button" class="btn btn-info">
                            <i class="fas fa-edit"></i>
                        </button>
                    </a>&nbsp;
                    <a href="?page=xoa_ct_km&id=<?php echo $row['MaKm'];?>&product=<?php echo $row['MaSP'];?>"
                        onclick='return deleleAction();'>
                        <button type="button" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </a>
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