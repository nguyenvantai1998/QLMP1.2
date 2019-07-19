<!-- mã sản phẩm -->
<?php $masp = $_GET['masp']; ?>

<!-- update product -->
<?php 
    if(isset($_POST["submit-update"]))
    {
        try{
            $maloai = $_POST['slMaloai'];
            $mancc = $_POST['slMaNCC'];
            $dungtich = $_POST['txtDungtich'];
            $ngaynhaphang = $_POST['dateNgaynhap'];
            $ngaysanxuat = $_POST['dateNgaysanxuat'];
            $hansudung = $_POST['txtHansudung'];
            $tensp = $_POST['txtTensanpham'];
            $gia = $_POST['txtGia'];
            $trangthai = $_POST['slTrangthai'];
            $motaSP = $_POST['textMota'];
            $soluong = $_POST['txtSoluong'];

            update_sanpham($masp, $maloai, $tensp, $gia, $soluong, $mancc, $ngaysanxuat, $hansudung, $dungtich, $motaSP, $ngaynhaphang, $trangthai);
        }
        catch(Throwable $th){}
    }

?>

<div class="row">
    <div class="col-12">
        <h4>
            <i class="fas fa-database"></i> Chi Tiết Sản Phẩm
            <small class="float-right"><a href="indexAdmin.php"><i class="fas fa-undo-alt"></i> Trở lại</a></small>
        </h4>
    </div>
</div><br>

<div class="row">
    <div class="col-md-6">
        <form method="POST" action="">  
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Thông tin sản phẩm
                        <small class="float-right">
                            <?php 
                                if(isset($_POST['submit-undo']) || !isset($_POST['submit-undo']))
                                {
                                    echo '<button type="submit" class="btn btn-warning" name="update-product"><i class="fas fa-edit"></i> Cập nhật</button>';
                                }
                            ?>
                            <?php 
                                if(isset($_POST['update-product']))
                                {
                                    echo '<button type="submit" class="btn btn-info" name="submit-undo"><i class="fas fa-undo"></i> Trở lại</button>';
                                }
                            ?>
                        </small>
                    </h3>
                </div>

                <?php
                    $table = query_select("SELECT * FROM sp, loaisp, nhacungcap WHERE sp.Maloai = loaisp.Maloai AND sp.MaNcc = nhacungcap.MaNCC AND sp.MaSP = '$masp'");
                    $count = $table->rowCount();
                    if($count > 0)
                    {
                        foreach ($table as $row) {
                ?>
                <div class="card-body">

                    <?php 
                        // if(!isset($_POST['update-product']) && !isset($_POST["submit-update"]))
                        if(!isset($_POST['update-product']))
                        {
                            ?>
                            <dl>
                                <dt>Mã sản phẩm: <span class="text-success"><?php echo $row['MaSP']; ?></span> </dt>
                                <dt>Tên: <span class="text-success"><?php echo $row['Tensp']; ?></span> </dt>
                                <dt>Mã loại: <span class="text-success"><?php echo $row['Maloai']; ?></span> ( <span class="text-danger"><?php echo $row['TenLoai']; ?></span> ) </dt>
                                <dt>Giá: <span class="text-success"><?php echo $row['Gia']; ?></span> </dt>
                                <dt>Số lượng: <span class="text-success"><?php echo $row['Soluong']; ?></span> </dt>
                                <dt>Mã nhà cung cấp: <span class="text-success"><?php echo $row['MaNcc']; ?></span> ( <span class="text-danger"><?php echo $row['TenNCC']; ?></span> )</dt>
                                <dt>Hạn sử dụng: <span class="text-success"><?php echo $row['hansudung']; ?></span> </dt>
                                <dt>Dung tích: <span class="text-success"><?php echo $row['dungtich']; ?></span> </dt>
                                <dt>Trạng thái: <span class="text-success"><?php echo $row['trangthai']; ?></span> </dt>
                                <dt>Ngày sản xuất: <span class="text-success"><?php echo $row['Ngaysanxuat']; ?></span> </dt>
                                <dt>Ngày nhập: <span class="text-success"><?php echo $row['Ngaynhaphang']; ?></span> </dt>
                                <dt>Mô tả: <span class="text-success"><?php echo $row['MotaSP']; ?></span> </dt>
                            </dl>
                        <?php
                        }

                        else
                        {   
                            ?>
                        <!-- INFO PRODUCT -->
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <!-- mã sản phẩm -->
                                <label for="inputState">Mã sản phẩm:</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    placeholder="35463"
                                    value="<?php echo $row['MaSP']; ?>"
                                    style="margin-bottom:10px;"
                                    name="txtMasp"
                                    id="myInput"
                                    disabled="disabled"
                                >

                                <!-- tên sản phẩm -->
                                <label for="inputState">Tên sản phẩm:</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    placeholder="Possess The Secret..."
                                    name="txtTensanpham"
                                    style="margin-bottom:10px;"
                                    value="<?php echo $row['Tensp']; ?>"
                                >

                                <!-- mã loại, nhà cung cấp, dung tích -->
                                <div class="form-row">
                                    <!-- mã loại -->
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Mã loại:</label>
                                        <select 
                                            id="inputState" 
                                            class="form-control"
                                            name="slMaloai"
                                        >

                                        <option value="<?php echo $row['Maloai']; ?>"><?php echo $row['TenLoai']; ?></option>
                                        <?php 
                                            $table = query_select("SELECT * FROM loaisp");
                                            $count = $table->rowCount();
                                            if ($count > 0) {
                                                foreach ($table as $row_ml) {
                                                    if($row_ml['MaLoai'] != $row['MaLoai'])
                                                    {
                                        ?>
                                        <option value="<?php echo $row_ml['MaLoai']; ?>"><?php echo $row_ml['TenLoai'] ?></option>
                                                <?php
                                                    }
                                                }
                                            }
                                        ?> 


                                        </select>
                                    </div>

                                    <!-- mã nhà cung cấp -->
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Mã nhà cung cấp:</label>
                                        <select 
                                            id="inputState" 
                                            class="form-control"
                                            name="slMaNCC"
                                        >
                                            <option value="<?php echo $row['MaNCC'] ?>"><?php echo $row['TenNCC'] ?></option>
                                            <?php 
                                                $table = query_select("SELECT * FROM nhacungcap");
                                                $count = $table->rowCount();
                                                if ($count > 0) {
                                                    foreach ($table as $row_ncc) {
                                                        if($row_ncc['MaNCC'] != $row['MaNCC'])
                                                        {
                                            ?>
                                            <option value="<?php echo $row_ncc['MaNCC'] ?>"><?php echo $row_ncc['TenNCC'] ?></option>
                                            <?php
                                                        }
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    <!-- dung tích -->
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Dung tích(ml):</label>
                                        <input 
                                            type="number" 
                                            class="form-control" 
                                            placeholder="500"
                                            value="<?php echo $row['dungtich']; ?>"
                                            name="txtDungtich"
                                        >
                                    </div>

                                </div>

                                <!-- ngày, hạn -->
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Ngày nhập:</label>
                                        <input 
                                            type="date" 
                                            class="form-control"
                                            value="<?php echo $row['Ngaynhaphang']; ?>"
                                            name="dateNgaynhap"
                                        >
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputState">Ngày sản xuất:</label>
                                        <input 
                                            type="date" 
                                            class="form-control"
                                            name="dateNgaysanxuat"
                                            value="<?php echo $row['Ngaysanxuat']; ?>"
                                        >
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputState">Hạn sử dụng(năm/tháng):</label>
                                        <input 
                                            type="number" 
                                            class="form-control" 
                                            minlength="1"
                                            value="<?php echo $row['hansudung']; ?>"
                                            name="txtHansudung"
                                        >
                                    </div>
                                </div>

                                <!-- Giá, số lượng, trạng thái -->
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Giá:</label>
                                        <input 
                                            type="number" 
                                            class="form-control" 
                                            placeholder="99000"
                                            name="txtGia"
                                            value="<?php echo $row['Gia']; ?>"
                                        >
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputState">Số lượng:</label>
                                        <input 
                                            type="number" 
                                            class="form-control" 
                                            placeholder="Số lượng sản phẩm"
                                            name="txtSoluong"
                                            value="<?php echo $row['Soluong']; ?>"
                                        >
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputState">Trạng thái:</label>
                                        <select 
                                            id="inputState" 
                                            class="form-control"
                                            name="slTrangthai"
                                        >
                                            <option value="<?php echo $row['trangthai']; ?>"><?php echo $row['trangthai']; ?></option>
                                            <option value="hot">Hot</option>
                                            <option value="new">New</option>
                                            <option value="sale">Sale</option>
                                            <option value="selling">Selling</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- mô tả -->
                                <label for="inputState">Mô tả sản phẩm:</label>
                                <textarea 
                                    class="form-control" 
                                    id="exampleFormControlTextarea1" 
                                    rows="5"
                                    name="textMota"
                                    value="<?php echo $row['MotaSP']; ?>"
                                ><?php echo $row['MotaSP']; ?></textarea>
                            </div> <br>
                        </div>
                        <div class="row pull-right"><button type="submit" name="submit-update" class="btn btn-info">Cập nhật ngay</button></div>
                        <?php
                        } 

                    ?>
                </div>
                <?php
                        }
                    }
                ?>
            </div>
        </form>
        <!-- /.card -->
    </div>

    <!-- ảnh sản phẩm -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Ảnh sản phẩm
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <dl class="dl-horizontal">
                    <div class="card-footer bg-white">
                        <div class="row">
                            <?php 
                                $table = query_select("SELECT * FROM video WHERE video.MaSP = '$masp'");
                                $count = $table->rowCount();
                                if($count > 0)
                                {
                                    foreach ($table as $row_img) {
                            ?>
                            <div class="col-md-4" style="margin-bottom:10px;">
                                <img class="img-thumbnail" src="./../<?php echo $row_img['URLHinh'] ?>" style="height:160px;">
                            </div>
                                <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </dl>
            </div>
        </div>
    </div>

</div>