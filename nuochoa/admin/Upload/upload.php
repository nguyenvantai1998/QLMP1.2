<?php 
    $masp = $_GET['masp'];
    include("./../connect.php");
?>

<div class="row">
    <div class="col-12">
        <h4>
            <i class="fas fa-images"></i> Thêm ảnh sản phẩm
            <small class="float-right"><a href="indexAdmin.php"><i class="fas fa-undo-alt"></i> Trở lại</a></small>
        </h4>
    </div>
</div><br>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="padding-bottom: 25px;">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div style="height:24px;width:100%;">
                        <?php
                            if(isset($_POST['submit'])){
                                
                                // File upload configuration
                                $targetDir = "./../picture/";
                                $allowTypes = array(
                                    'Jpg','JPj','JPG','jpg',
                                    'Png','PNg','PNG','png',
                                    'Jpeg','JPeg','JPEg','JPEG','jpeg',
                                    'Git','GIt','GIT','gif'
                                );
                                
                                $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
                                if(!empty(array_filter($_FILES['files']['name']))){
                                    foreach($_FILES['files']['name'] as $key=>$val){
                                        // File upload path
                                        $fileName = basename($_FILES['files']['name'][$key]);
                                        $targetFilePath = $targetDir . $fileName;
                                        
                                        // Check whether file type is valid
                                        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                                        if(in_array($fileType, $allowTypes)){
                                            // Upload file to server
                                            if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                                                // Image db insert sql
                                                $insertValuesSQL .= "('','./picture/".$fileName."', '".$masp."','1','1', NOW()),";
                                            }else{
                                                $errorUpload .= $_FILES['files']['name'][$key].', ';
                                            }
                                        }else{
                                            $errorUploadType .= $_FILES['files']['name'][$key].', ';
                                        }
                                    }
                                    
                                    if(!empty($insertValuesSQL)){
                                        $insertValuesSQL = trim($insertValuesSQL,',');
                                        // Insert image file name into database
                                        $insert = $conn->query("INSERT INTO video (URLVideo, URLHinh, MaSP, MaTin, MaKH, update_on) VALUES  $insertValuesSQL");
                                        if($insert){
                                            $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
                                            $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                                            $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
                                            $statusMsg = "Files are uploaded successfully.".$errorMsg;
                                        }else{
                                            $statusMsg = "Sorry, there was an error uploading your file.";
                                        }
                                    }
                                }else{
                                    $statusMsg = 'Please select a file to upload.';
                                }
                                
                                // Display status message
                                echo $statusMsg;
                            }
                        ?>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <input type="file" name="files[]" multiple >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button 
                                name="submit" 
                                type="submit" 
                                class="btn btn-info"
                            >Upload</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <?php 
                    $table = query_select("SELECT * FROM sp, video WHERE sp.MaSP = video.MaSP AND sp.MaSP = '$masp'");
                    $count = $table->rowCount();
                    if($count > 0)
                    {
                        foreach ($table as $row) {
                ?>
                <div class="col-md-2" style="margin-bottom:15px;">
                    <img class="img-thumbnail" src="./../<?php echo $row['URLHinh'] ?>" style="height:190px;">
                </div>
                <?php
                        }
                    }
                ?>
                <div class="col-md-2" style="margin-bottom:15px;font-size:30px;display: flex;align-items:center;justify-content: center;">
                    <a href="indexAdmin.php"><i class="fas fa-undo-alt"></i> Trở lại</a>
                </div>
            </div>  
        </div>
        <!-- /.card -->
    </div>
</div>