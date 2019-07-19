<!DOCTYPE html>
</body>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfume</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/swiper.min.css">
    <!-- page -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <!-- main -->
    <main id="main">

        <!-- main 1 -->
        <div class="main-1 m-container">
            <!-- banner advertisement -->
            <div class="bannerAdvertisement">
                <section class="advertisement">
                    <div class="ba-qc">
                        <img src="./assets/img/banner-qc.jpg" alt="">
                    </div>
                    <div class="ba-qc">
                        <img src="./assets/img/banner-qc-2.jpg" alt="">
                    </div>
                    <div class="ba-qc">
                        <img src="./assets/img/banner-qc-3.jpg" alt="">
                    </div>
                </section>
            </div>

            <!-- product -->
            <div class="boxProduct">

                <!-- combo -->
                <section class="product-1 product-combo">

                    <div class="pr-container">

                        <div class="row-1 title">
                            <div class="bg-tt-1 bg-tt-1-form">
                                <h2>ĐĂNG KÝ KHÁCH HÀNG</h2>
                            </div>
                        </div>
                        <!-- bỏ display: flex .row2 -->
                        <div class="row-2 row-2-form box-product">
                            <!-- FORM -->


                            <form>
                                <!-- NAME -->
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Họ và Tên</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Viết hoa không dấu">
                                    </div>
                                </div>
                                <!-- GENDER -->
                                <fieldset class="form-group">
                                    <div class="row">
                                        <legend class="col-form-label col-sm-2 pt-0">Giới tính</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" value="male" checked>
                                                <label class="form-check-label" for="inlineRadio1">NAM</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" value="fmale">
                                                <label class="form-check-label" for="inlineRadio1">NỮ</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- CODE CERTIFICATE-->
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Mã số CMND</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="0920xxx">
                                    </div>
                                </div>
                                <!-- PICTURE UPLOAD -->
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Ảnh CMND</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" multiple>
                                    </div>
                                </div>
                                <!-- BIRTHDAY -->
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Ngày sinh<i class="fas fa-signal-slash    "></i></label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" placeholder="Viết hoa không dấu">
                                    </div>
                                </div>
                                <!-- PHONE -->
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Số ĐT</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="091xxx">
                                    </div>
                                </div>
                                <!-- EMAIL -->
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="abc@gmai.com">
                                    </div>
                                </div>
                                <!--REGISTER ADDRESS ALWAY -->
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Địa chỉ TT</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="92 Nguyễn Trãi...">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputState">Phường</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState">Quận</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState">Thành phố</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--ADDRESS NOW -->
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Địa chỉ Hiện tại</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="92 Nguyễn Trãi...">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputState">Phường</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState">Quận</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState">Thành phố</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- OTHER INFOMATION -->
                                <div class="form-group row">
                                    <div class="col-sm-2">Thông tin khác</div>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            <label class="form-check-label" for="gridCheck1">
                                                Người bảo trợ
                                            </label>
                                            <div class="collapse" id="collapseExample">
                                                <div class="card card-body">
                                                    <form>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <input type="text" class="form-control" placeholder="Mã số người bảo trợ">
                                                            </div>
                                                            <div class="col">
                                                                <input type="text" class="form-control" placeholder="Tên người bảo trợ">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <p>
                                                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                  Link with href
                                                </a>
                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                  Button with data-target
                                                </button>
                                              </p>
                                              <div class="collapse" id="collapseExample">
                                                <div class="card card-body">
                                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                </div>
                                              </div> -->
                                </div>
                                <!-- BUTTON SEND -->
                                <div class="form-group row">
                                    <div class="col-sm-12 col-sm-custom">
                                        <button type="submit" class="btn btn-warning">ĐĂNG KÝ</button>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM -->
                        </div>

                    </div>

                </section>
            </div>
        </div>

    </main>

    <!-- js -->
    <script src="./assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="./assets/js/swiper.min.js"></script>
    <script src="./assets/js/custome.js"></script>
</body>

</html>