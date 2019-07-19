<?php
if(isset($_GET['id']) && isset($_GET['product'])){
    $ID = $_GET['id'];
    $PRODUCT = $_GET['product'];
    // select * from ctkm where makm='km1' AND masp='1'
            $table = query_select("select * from ctkm where makm='".$ID."' and masp='".$PRODUCT."'");
            $count = $table->rowCount();
            if ($count > 0) {
                foreach ($table as $row) {
                $tgbdOld = $row['TGBD'];
                $tgktOld = $row['TGKT'];
                $tilegiamgiaOld = $row['Tilegiamgia'];
                $ghichuOld = $row['Ghichu'];
                }
    }
}
   if (isset($_POST["submit"])) {
       if ($_POST['motaCTKM'] != "") {
           try {
               $tgbd = $_POST['tgbatdau'];
               $tgkt = $_POST['tgketthuc'];
               $tilegiamgia = $_POST['htkm'];
               $ghichu = $_POST['motaCTKM'];
               update_ctkm($ID, $PRODUCT,$tgbd,$tgkt,$tilegiamgia,$ghichu);
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
    <!-- TIME START AND END DISCOUNT -->
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">TG bắt đầu và kết thúc <span
                class="text-danger">*</span></label>
        <div class="col-sm-10">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="date" class="form-control" name="tgbatdau" value="<?php echo $tgbdOld?>">
                </div>
                <div class="form-group col-md-6">
                    <input type="date" class="form-control" name="tgketthuc" value="<?php echo $tgktOld?>">
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
                    <input type="number" class="form-control" placeholder="50" name="htkm" value="<?php echo $tilegiamgiaOld?>">
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
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="motaCTKM"><?php echo $ghichuOld?></textarea>
            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (empty($_POST["motaCTKM"])) {
                                    echo "<span class='text-danger'>Mô tả chương trình KM cần phải điền!</span>";
                                }
                            }
         ?>
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