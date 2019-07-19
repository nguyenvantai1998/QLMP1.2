<!-- select -->
<?php include ('select.php'); ?>

<!-- giới hạn ký tự -->
<?php include('function/substring.php'); ?>

<!-- tìm kiếm submit search -->
<?php
    $output = '';
    if(isset($_POST['submit']))
    {
        $searchq = $_POST['search'];
        $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
        $table = query_select("SELECT * FROM sp, video, nhacungcap WHERE sp.MaSP = video.MaSP AND sp.MaNcc = nhacungcap.MaNCC AND sp.Tensp LIKE '%$searchq%' ");
        $count = $table->rowCount();
    
        if($count != 0)
        {
            $output = $table;
        }
        else
        {
            $output .= 'Không tìm thấy!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfume</title>
    <!-- swiper -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="./assets/css/swiper.min.css">
    <!-- page -->
    <link rel="stylesheet" href="./assets/scss/main.css">
    <!-- fix css -->
    <link rel="stylesheet" href="./assets/css/fixcss.css">

</head>

<body>

    <!-- header -->
    <header id="header">
        <div class="hd-content">
            <div class="hd-about-content">
                <div class="top-quote">
                    <div class="text-quote">
                        <p>HỆ THỐNG PHÂN PHỐI NƯỚC HOA & MỸ PHẨM CHÍNH HÃNG HÀNG ĐẦU VIỆT NAM</p>
                        <p>VỚI 50 CỬA HÀNG TRÊN TOÀN QUỐC</p>
                    </div>
                    <div class="phone-quote">
                        <a href="#">
                            <div class="icon">
                                <div>
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                            </div>
                            <div class="phone">
                                <div class="hours">
                                    Đặt hàng: (8h30 - 21h30)
                                </div>
                                <div class="telephone">
                                    0907.364.216 <span>(CSKH)</span>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="icon">
                                <div>
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                            </div>
                            <div class="phone">
                                <div class="hours">
                                    Đặt hàng: (8h30 - 21h30)
                                </div>
                                <div class="telephone">
                                    0907.364.216 <span>(CSKH)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="top-navbar">
                    <div class="menu-bar">
                        <div class="logo">
                            <a href="index.php"><img src="./picture/logo.png" alt="logo"></a>
                        </div>

                        <!-- tìm kiếm -->
                        <div class="search-trademark">
                            <form action="?p=search" method="POST" autocomplete="off">
                                <div class="search-bar">
                                    <input 
                                        type="text" 
                                        placeholder="Tìm nước hoa hoặc nhãn hiệu..."
                                        name="search"
                                        value=""
                                        class="autocomplete"
                                        id="product_s"
                                    >
                                    <button name="submit" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                                <div id="productlist_s"></div>
                            </form>
                        </div>

                        <!-- thương hiệu -->
                        <?php 
                            function get_option(){
                                $table = query_select("SELECT * FROM nhacungcap");
                                $count = $table->rowCount();
                                $options = '';
                                
                                if ($count > 0) {
                                    foreach ($table as $row) {
                                        $options.='<option value="'.$row['MaNCC'].'">'.$row['TenNCC'].'</option>';
                                    }
                                    return $options;
                                }

                            }
                        ?>
                        <div class="option-trademark">
                            <form action="" method="POST">
                                <select name="selectpicker" class="selectpicker" onchange="this.form.submit();">
                                    <option selected>Chọn nhà cung cấp</option>
                                    <!-- <option value="adidas"><a href="?p=search">Adidas</a></option> -->
                                    <?php echo get_option(); ?>
                                </select>
                            </form>
                        </div>

                        <!-- login -->
                        <div class="login">
                            <div class="items">
                                <div>
                                    <a href="login.php">Đăng nhập</a>
                                </div>
                                <div>
                                    <a href="register.php">Đăng ký</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- nav bar -->
                    <?php include("navbar.php"); ?>

                </div>
                <hr>