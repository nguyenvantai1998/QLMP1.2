<?php
   if (isset($_POST["submit"])) {
       if ($_POST['codekm'] != "" && $_POST['tenkm'] != ""&& $_POST['HTKM'] != "") {
           try {
               $makm = $_POST['codekm'];
               $tenkm = $_POST['tenkm'];
               $htkm = $_POST['HTKM'];
               // $makm = 'km1';
               // $masp = '10';
               // $tgbd = '2019-07-08';
               // $tgkt = '2019-07-08';
               // $tilegiamgia = '20';
               // $ghichu = '3333';
               insert_kmai($htkm,$makm,$tenkm);
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
   <!-- INFO DISCOUNT -->
   <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Thông tin khuyến mãi<span
         class="text-danger">*</span></label>
      <div class="col-sm-10">
         <div class="form-row">
            <div class="form-group col-md-6">
               <input type="text" class="form-control" name="codekm" placeholder="KM00xxx">
            </div>
            <div class="form-group col-md-6">
               <input type="text" class="form-control" name="tenkm" placeholder="sale, new , hot ,...">>
            </div>
         </div>
      </div>
   </div>
   <!-- DESCRIPTION -->
   <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Hình thức Khuyến mãi<span
         class="text-danger">*</span></label>
      <div class="col-sm-10">
         <input type="text" class="form-control" placeholder="giảm giá , combo , mua 1 tặng 1..." name="HTKM">
      </div>
   </div>
   <div class="form-group row">
      <label for="inputPassword3" class="col-sm-12 col-form-label text-danger">* thông tin bắt buột</label><i
         class="fas fa-signal-slash"></i></label>
   </div>
   <!-- BUTTON SEND -->
   <div class="form-group row text-center">
      <div class="col-sm-12 col-sm-custom">
         <button type="submit" name="submit" class="btn btn-warning">Thêm khuyến mãi</button>
      </div>
   </div>
</form>
<!-- END FORM -->