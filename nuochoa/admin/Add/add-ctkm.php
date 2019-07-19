<?php
   if (isset($_POST["submit"])) {
       if ($_POST['maKM'] != "" && $_POST['motaCTKM'] != "") {
           try {
               if($_POST['check_product']){
                    foreach($_POST['check_product'] as $selected){
                        $makm = $_POST['maKM'];
                        $masp = $selected ;
                        $tgbd = $_POST['tgbatdau'];
                        $tgkt = $_POST['tgketthuc'];
                        $tilegiamgia = $_POST['htkm'];
                        $ghichu = $_POST['motaCTKM'];
                        insert_ctkm($makm,$masp,$tgbd,$tgkt,$tilegiamgia,$ghichu);  
                    }
                }                        
                else{
                        echo '<script type="text/javascript">';
   
                        echo "setTimeout(function () { Swal.fire({
                            type: 'error',
                            title: 'Chọn sản phẩm khuyến mãi !',
                            showConfirmButton: false,
                            timer: 1500
                             });";
                
                        echo '}, 1000);</script>';
                }
           } catch (Throwable $th) {
               echo $th;
           }
       } else {
           echo '<script type="text/javascript">';
   
           echo "setTimeout(function () { Swal.fire({
               type: 'error',
               title: 'Nhập đầy đủ các trường !',
               showConfirmButton: false,
               timer: 1500
           });";
   
           echo '}, 1000);</script>';
       }
   }
   ?>
<!-- FORM -->
<form id="" method="post">
    <!-- CODE DISCOUNT -->
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Mã Khuyến mãi<span
                class="text-danger">*</span></label>
        <div class="col-sm-10">
            <!-- <input type="text" class="form-control" placeholder="KM00xxx" name="maKM"> -->
            <select class="form-control" name="maKM">
                <?php
                     $tablekm = query_select("SELECT * FROM kmai");
                     $countkm = $tablekm->rowCount();
                     if ($countkm > 0) {
                     foreach ($tablekm as $rowkm) {
                     ?>
                <option value="<?php echo $rowkm['MaKm'] ?>"><?php echo $rowkm['tenkm'];?></option>
                <?php
                     }
                     }
                     else
                     {
                     echo "<h2>Hiện tại chưa có KM...</h2>";
                     }
                     ?>
            </select>
        </div>
    </div>
    <!-- TIME START AND END DISCOUNT -->
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">TG bắt đầu và kết thúc <span
                class="text-danger">*</span></label>
        <div class="col-sm-10">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="date" class="form-control" name="tgbatdau" value="<?php echo date("Y-m-d")?>">
                </div>
                <div class="form-group col-md-6">
                    <input type="date" class="form-control" name="tgketthuc" value="<?php echo date("Y-m-d")?>">
                </div>
            </div>
        </div>
    </div>
    <!--INFO DISCOUNT-->
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">thông tin CT</span></label>
        <div class="col-sm-10">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputState">Sale (%)</label>
                    <input type="number" class="form-control" placeholder="50" name="htkm">
                </div>
            </div>
        </div>
    </div>
    <!-- /DISCOUNT -->
    <!-- DESCRIPTION -->
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Mô tả <span class="text-danger">*</span></label><i
            class="fas fa-signal-slash"></i></label>
        <div class="col-sm-10">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="motaCTKM"></textarea>
            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (empty($_POST["motaCTKM"])) {
                                    echo "<span class='text-danger'>Mô tả chương trình KM cần phải điền!</span>";
                                }
                            }
         ?>
        </div>
    </div>
    <!-- PRODUCT -->
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Sản phẩm khuyến mãi <span
                class="text-danger">*</span></label><i class="fas fa-signal-slash"></i></label>
        <div class="col-sm-10">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th>Chọn</th>
                        <th>Mã Sản Phẩm</th>
                        <th>Loại</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Trạng Thái</th>
                    </tr>
                </thead>
                <tbody>

            <?php
            $table = query_select("SELECT * FROM sp");
            $count = $table->rowCount();
            $stt = 1;
            if ($count > 0) {
                foreach ($table as $row) {
            ?>

                    <tr>
                        <td><input type="checkbox" id="subscribeNews" name="check_product[]"
                             value="<?php echo $row['MaSP']?>"></td>
                        <td><?php echo $row['MaSP'] ?></td>
                        <td><?php echo $row['Maloai'] ?></td>
                        <td><?php echo $row['Tensp'] ?></td>
                        <td><?php echo $row['Gia'] ?></td>
                        <td><?php echo $row['Soluong'] ?></td>
                        <td><?php echo $row['trangthai'] ?></td>
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
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-12 col-form-label text-danger">* thông tin bắt buột</label><i
            class="fas fa-signal-slash"></i></label>
    </div>
    <!-- BUTTON SEND -->
    <div class="form-group row text-center">
        <div class="col-sm-12 col-sm-custom">
            <button type="submit" name="submit" class="btn btn-warning">Thêm chương trình khuyến mãi</button>
        </div>
    </div>
</form>
<!-- END FORM -->