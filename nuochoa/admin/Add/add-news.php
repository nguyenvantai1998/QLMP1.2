<?php
   if (isset($_POST["submit"])) {
       if ($_POST['tenTin'] != ""&& $_POST['noidungTin'] != "") {
           try {
            $tieude = $_POST['tenTin'];
            $noidung = $_POST['noidungTin'];
               insert_tintuc($noidung,$tieude);
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
      <label for="inputEmail3" class="col-sm-2 col-form-label">Tin tức<span
         class="text-danger">*</span></label>
      <div class="col-sm-10">
         <div class="form-row">
            <!-- <div class="form-group col-md-6">
               <input type="text" class="form-control" placeholder="Mã tin tức" name="maTin" >
            </div> -->
            <div class="form-group col-md-12">
               <input type="text" class="form-control" placeholder="Tên tin tức" name="tenTin">
            </div>
         </div>
      </div>
   </div>
   <!-- DESCRIPTION -->
   <div class="form-group row">
      <label class="col-sm-2 col-form-label">Mô tả <span class="text-danger">*</span></label><i
         class="fas fa-signal-slash"></i></label>
      <div class="col-sm-10">
         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="noidungTin"></textarea>
      </div>
   </div>
   <div class="form-group row">
      <label for="inputPassword3" class="col-sm-12 col-form-label text-danger">* thông tin bắt buột</label><i
         class="fas fa-signal-slash"></i></label>
   </div>
   <!-- BUTTON SEND -->
   <div class="form-group row text-center">
      <div class="col-sm-12 col-sm-custom">
         <button type="submit" name="submit" class="btn btn-warning">Thêm Loại</button>
      </div>
   </div>
</form>
<!-- END FORM -->