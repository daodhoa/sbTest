<!DOCTYPE html>
<!-- <html class="no-js" lang="en"> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>Product List</title>
    <meta content="ThemePunch" name="author">
    <meta content="The Garden theme tempalte" name="description">
    <meta content="The Garden theme template" name="keywords">
    <meta content="width=device-width, initial-scale=1" name="viewport"><!--Icons fonts-->
    <link href="{{ asset('') }}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('') }}/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('') }}/vendor/themify-icons/themify-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:100,100i,200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet"><!--Styles-->
    <link href="{{ asset('') }}/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}/vendor/animsition/dist/css/animsition.min.css" rel="stylesheet">
    <link href="{{ asset('') }}/vendor/animate.css/source/slide_fwd_center/slide_fwd_center.css" rel="stylesheet">
    <link href="{{ asset('') }}/vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('') }}/vendor/css-hamburgers/css/hamburgers.min.css" rel="stylesheet">
    <link href="{{ asset('') }}/vendor/slick/css/slick.css" rel="stylesheet">
    <link href="{{ asset('') }}/vendor/range_filter/css/jquery-ui.css" rel="stylesheet"><!-- Revolution -->
    <link href="{{ asset('') }}/vendor/slider-revolution/css/settings.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('') }}/vendor/slider-revolution/css/layers.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('') }}/vendor/slider-revolution/css/navigation.css" rel="stylesheet" type="text/css"><!--Theme style-->
    <link href="{{ asset('') }}/css/main.css" rel="stylesheet">
    <link href="{{ asset('') }}/css/responsive.css" rel="stylesheet">
</head>
<body>
    <div class="page-loader">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
    <div class="the-garden">
        <div class="search">
            <input class="ip-search" placeholder="Search for..." type="text">
        </div>
        @include('user.header')
        <section class="page-shop-slidebar" style=" padding-top: 60px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-push-3">
                        <div class="">
                            <h3 style="font-size: 18px;font-weight: bold;margin-top: 30px;margin-bottom: 10px">Rượu vang</h3><select class="sort-by" name="sort-by">
                                <option value="0">
                                    Mặc định
                                </option>
                                <option value="1">
                                    Giá từ thấp đến cao
                                </option>
                                <option value="2">
                                    Giá từ cao đến thấp
                                </option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="productG">
                                    <div class="sizeImg" style="width: 100%;float: none">
                                        <img alt="product1" class="img-responsive" src="{{ asset('') }}/images/Product/2S1.png">
                                        <div class="arrIcon"></div>
                                        <div class="box-posi">
                                            HOT
                                        </div>
                                        <div class="arrIcon2">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="la la-shopping-cart"></i></a>
                                                </li>
                                                <li style="margin-left: 6px;margin-right: 6px;">
                                                    <a href="SingleProduct.html"><i class="la la-eye"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="la la-heart-o"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sizeImgCalc" style="width: 100%;float: none;padding-left: 0;padding-bottom: 7px;">
                                        <h3>Truck</h3>
                                        <h4>$260.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="paginate">
                            <ul>
                                <li>
                                    <a href="#">Previous</a>
                                </li>
                                <li>
                                    <a href="#">
                                    <div style="width: 30px;height: 30px;background: #c19876;color: #fff;text-align: center;padding-top: 8px">
                                        1
                                    </div></a>
                                </li>
                                <li>
                                    <a href="#">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-pull-9">
                        <div class=" slideSort">
                            <h3 class="slider-left-title">DANH MỤC 1</h3>
                            <ul class="slide-left-list">
                                <li>
                                    <a href="#">Sản phẩm mới</a>
                                </li>
                                <li>
                                    <a href="#">Sản phẩm hot</a>
                                </li>
                                <li>
                                    <a href="#">Xu hướng</a>
                                </li>
                                <li>
                                    <a href="#">Khuyến mãi</a>
                                </li>
                            </ul>
                        </div>
                        <div class="lineAbout" style="width: 100%;height: 1px"></div>
                        <div class=" slideSort">
                            <h3 class="slider-left-title">DANH MỤC 2</h3>
                            <ul class="slide-left-list">
                                <li>
                                    <a href="#">Hộp quà</a>
                                </li>
                                <li>
                                    <a href="#">Bánh kẹo</a>
                                </li>
                                <li>
                                    <a href="#">Phụ kiện</a>
                                </li>
                                <li>
                                    <a href="#">...</a>
                                </li>
                                <li>
                                    <a href="#">...</a>
                                </li>
                            </ul>
                        </div>
                        <div class="lineAbout" style="width: 100%;height: 1px"></div>
                        <div class="sidebar-filter-color">
                            <h3 class="slider-left-title">THÔNG TIN THÊM</h3>
                            <h3 class="slider-left-title" style="font-size: 16px;margin-top: 15px;margin-bottom: 15px;font-family: Roboto;">Giá</h3>
                            <div class="sidebar-box">
                                <div class="custom-checkbox">
                                    <div class="btn-group style-checkbox" data-toggle="buttons">
                                        <label class="btn btn-success default"><input checked type="checkbox"> <span class="glyphicon glyphicon-ok"></span></label>
                                    </div>
                                    <p>0 - 500.000đ</p>
                                </div>
                                <div class="custom-checkbox">
                                    <div class="btn-group style-checkbox" data-toggle="buttons">
                                        <label class="btn btn-success default"><input checked type="checkbox"> <span class="glyphicon glyphicon-ok"></span></label>
                                    </div>
                                    <p>500.000đ - 1.000.000đ</p>
                                </div>
                                <div class="custom-checkbox">
                                    <div class="btn-group style-checkbox" data-toggle="buttons">
                                        <label class="btn btn-success default"><input checked type="checkbox"> <span class="glyphicon glyphicon-ok"></span></label>
                                    </div>
                                    <p>1.000.000đ - 2.000.000đ</p>
                                </div>
                                <div class="custom-checkbox">
                                    <div class="btn-group style-checkbox" data-toggle="buttons">
                                        <label class="btn btn-success default"><input checked type="checkbox"> <span class="glyphicon glyphicon-ok"></span></label>
                                    </div>
                                    <p>2.000.000đ - 3.000.000đ</p>
                                </div>
                                <div class="custom-checkbox">
                                    <div class="btn-group style-checkbox" data-toggle="buttons">
                                        <label class="btn btn-success default"><input checked type="checkbox"> <span class="glyphicon glyphicon-ok"></span></label>
                                    </div>
                                    <p>Trên 3.000.000đ</p>
                                </div>
                            </div>
                            <h3 class="slider-left-title" style="font-size: 16px;margin-top: 15px;margin-bottom: 15px;font-family: Roboto;">Nồng độ</h3>
                            <div class="sidebar-box">
                                <div class="custom-checkbox">
                                    <div class="btn-group style-checkbox" data-toggle="buttons">
                                        <label class="btn btn-success default"><input checked type="checkbox"> <span class="glyphicon glyphicon-ok"></span></label>
                                    </div>
                                    <p>35% - 40%</p>
                                </div>
                                <div class="custom-checkbox">
                                    <div class="btn-group style-checkbox" data-toggle="buttons">
                                        <label class="btn btn-success default"><input checked type="checkbox"> <span class="glyphicon glyphicon-ok"></span></label>
                                    </div>
                                    <p>40% - 45%</p>
                                </div>
                                <div class="custom-checkbox">
                                    <div class="btn-group style-checkbox" data-toggle="buttons">
                                        <label class="btn btn-success default"><input checked type="checkbox"> <span class="glyphicon glyphicon-ok"></span></label>
                                    </div>
                                    <p>45% - 50%</p>
                                </div>
                            </div>
                        </div>
                        <div class="lineAbout" style="width: 100%;height: 1px; margin-top: 0;"></div>
                        <div class="box-slider-left slideNewproduct slideNewproduct2">
                            <h3 class="slider-left-title">KHUYẾN MÃI</h3>
                            <div class="box-slideNewproduct">
                                <div class="slideNewproduct-item slideNewproduct-img">
                                    <a href="#"><img alt="product1" class="img-responsive" src="{{ asset('') }}/images/Product/1P5.jpg"></a>
                                </div>
                                <div class="slideNewproduct-item slideNewproduct-text">
                                    <h5><a href="#">Trailer</a></h5>
                                    <p class="slideProduct-price">$32.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('user.footer')
    <script src="{{ asset('') }}/vendor/jquery/dist/jquery.min.js">
    </script> 
    <script src="{{ asset('') }}/vendor/bootstrap/dist/js/bootstrap.min.js">
    </script> 
    <script src="{{ asset('') }}/vendor/jquery_easing/jquery.easing.min.js">
    </script> 
    <script src="{{ asset('') }}/vendor/owl-carousel/js/owl.carousel.js">
    </script> 
    <script src="{{ asset('') }}/vendor/slick/js/slick.js">
    </script> 
    <script src="{{ asset('') }}/vendor/isotope/js/isotope.js">
    </script> 
    <script src="{{ asset('') }}/vendor/isotope/js/imagesloaded.pkgd.js">
    </script> 
    <script src="{{ asset('') }}/vendor/range_filter/js/jquery-ui.js">
    </script> 
    <script src="{{ asset('') }}/vendor/slider-revolution/js/jquery.themepunch.tools.min.js" type="text/javascript">
    </script> 
    <script src="{{ asset('') }}/vendor/slider-revolution/js/jquery.themepunch.revolution.min.js" type="text/javascript">
    </script> 
    <script src="{{ asset('') }}/vendor/slider-revolution/js/revolution.extension.actions.min.js" type="text/javascript">
    </script> 
    <script src="{{ asset('') }}/vendor/slider-revolution/js/revolution.extension.carousel.min.js" type="text/javascript">
    </script> 
    <script src="{{ asset('') }}/vendor/slider-revolution/js/revolution.extension.kenburn.min.js" type="text/javascript">
    </script> 
    <script src="{{ asset('') }}/vendor/slider-revolution/js/revolution.extension.layeranimation.min.js" type="text/javascript">
    </script> 
    <script src="{{ asset('') }}/vendor/slider-revolution/js/revolution.extension.migration.min.js" type="text/javascript">
    </script> 
    <script src="{{ asset('') }}/vendor/slider-revolution/js/revolution.extension.navigation.min.js" type="text/javascript">
    </script> 
    <script src="{{ asset('') }}/vendor/slider-revolution/js/revolution.extension.parallax.min.js" type="text/javascript">
    </script> 
    <script src="{{ asset('') }}/vendor/slider-revolution/js/revolution.extension.slideanims.min.js" type="text/javascript">
    </script> 
    <script src="{{ asset('') }}/vendor/slider-revolution/js/revolution.extension.video.min.js" type="text/javascript">
    </script> 
    <script src="{{ asset('') }}/script/main.js">
    </script>
</body>
</html>