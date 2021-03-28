<!DOCTYPE html>
<!-- <html class="no-js" lang="en"> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>Product Single</title>
    <meta content="ThemePunch" name="author">
    <meta content="The Garden theme tempalte" name="description">
    <meta content="The Garden theme template" name="keywords">
    <meta content="width=device-width, initial-scale=1" name="viewport">
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
    <link href="{{ asset('') }}/css/responsive.css" rel="stylesheet"><!-- Zoom slide -->
    <link href="{{ asset('') }}/vendor/slide-zoom/css/jquery.fancybox.css" rel="stylesheet">
    <link href="{{ asset('') }}/vendor/slide-zoom/css/fontello.css" rel="stylesheet"><!-- End zoom slide -->
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
        <section style="margin-top: 100px;margin-bottom: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div style="max-width: 470px">
                            <div class="image-preview-container">
                                <!-- - - - - - - - - - - - - - Image Preview Container - - - - - - - - - - - - - - - - -->
                                <div class="image-preview">
                                    <a data-fancybox="group" data-zoom-image="{{ asset('') }}/images/SingleProduct/Group 1059.png" href="{{ asset('') }}/images/SingleProduct/Group 1059.png"><img alt="" id="zoom-image" src="{{ asset('') }}/images/SingleProduct/Group 1059.png"></a>
                                </div><!--/ .image-preview-->
                                <!-- - - - - - - - - - - - - - End of Image Preview Container - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Thumbnails - - - - - - - - - - - - - - - - -->
                                <div class="carousel-type-2">
                                    <div class="owl-carousel type-small product-thumbs" data-max-items="4" id="thumbnails">
                                        <a class="active" data-image="{{ asset('') }}/images/SingleProduct/Group 1059.png" data-zoom-image="{{ asset('') }}/images/SingleProduct/Group 1059.png" href="#"><img alt="" src="{{ asset('') }}/images/SingleProduct/Tractor-photo-3-897x897.png"></a> <a data-fancybox="group" data-image="{{ asset('') }}/images/SingleProduct/Group 1062.png" data-zoom-image="{{ asset('') }}/images/SingleProduct/Group 1062.png" href="{{ asset('') }}/images/SingleProduct/Group 1062.png"><img alt="" src="{{ asset('') }}/images/SingleProduct/Image 16.png"></a> <a data-fancybox="group" data-image="{{ asset('') }}/images/SingleProduct/Group 1060.png" data-zoom-image="{{ asset('') }}/images/SingleProduct/Group 1060.png" href="{{ asset('') }}/images/SingleProduct/Group 1060.png"><img alt="" src="{{ asset('') }}/images/SingleProduct/Image 17.png"></a> <a data-fancybox="group" data-image="{{ asset('') }}/images/SingleProduct/Group 1061.png" data-zoom-image="{{ asset('') }}/images/SingleProduct/Group 1061.png" href="{{ asset('') }}/images/SingleProduct/Group 1061.png"><img alt="" src="{{ asset('') }}/images/SingleProduct/Image 18.png"></a>
                                    </div>
                                </div><!-- - - - - - - - - - - - - - End of Thumbnails - - - - - - - - - - - - - - - - -->
                            </div><!--/ .image-preview-container -->
                        </div>
                    </div>
                    <div class="col-md-6 clearfix">
                        <div class="mid-product-content media-body">
                            <h3 style="font-size: 35px">Rượu Trius</h3>
                            <p style="color: #000">Mã sản phẩm: LT-CO21173</p>
                            <div class="notable clearfix">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                </ul>
                                <p>(320 đánh giá)</p>
                            </div><!--/notable-->
                            <div class="details-desc" style="margin-top: 0">
                                <p>Rượu Trius hương vị quả mọng màu đỏ và đen bùng nổ trên vòm miệng với một cảm giác mềm mại ngon miệng. Với sự kết hợp hoàn hảo từ các hương trái cây hòa quyện cùng...</p>
                            </div><span class="details-price">$ 59.99</span>
                            <div class="lineAbout" style="width: 100%;height: 1px"></div>
                            <div class="details-button clearfix" style="margin-bottom: 0">
                                <div style="width: 50%;float: left">
                                    <h3>Quantity</h3>
                                    <div class="pd-c-quantity quantity details-next">
                                        <input max="100" min="1" step="1" type="number" value="1">
                                        <div class="quantity-button quantity-down">
                                            <span class="step-next"><i class="la la-angle-down"></i></span>
                                        </div>
                                        <div class="quantity-button quantity-up">
                                            <span class="step-next"><i class="la la-angle-up"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-filter-color" style="width: 50%;float: left">
                                    <h3>Nồng độ:</h3>
                                    <h3>Thể tích:</h3>
                                </div>
                            </div>
                            <div class="lineAbout" style="width: 100%;height: 1px; margin-top: 15px;"></div>
                            <div class="addCart">
                                <ul>
                                    <li><button class="button btn-hover btn-details">ĐẶT HÀNG <i class="la la-shopping-cart" style="font-size: 20px;position: relative;top: 2px;"></i></button></li>
                                    <li style="margin-left: 40px;"><i class="la la-heart-o" style="font-size: 20px;position: relative;top: 2px;"></i> Yêu thích</li>
                                </ul>
                            </div>
                            <div class="category_tag" style="margin-top: 20px">
                                <div class="share-link tags">
                                    <p class="tags-item">Share on:</p>
                                    <ul class="sku-nd">
                                        <li>
                                            <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title=""><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title=""><i class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title=""><i class="fa fa-rss"></i></a>
                                        </li>
                                    </ul>
                                </div><!--/share-link-->
                                <div class="category tags">
                                    <p class="#">Shop ưu tiên xữ lý các đơn đặt hàng Online qua fanpage và qua hotline. Lưu ý: Các khách hàng tỉnh xa ship 3-5 ngày (Vui lòng đặt sớm để Shop kịp xữ lý)</p>
                                    <div class="delivery-box">
                                        Giao hàng toàn quốc. Miễn phí vận chuyển cho đơn hàng nội thành Hà Nội từ 1 triệu đồng.
                                    </div>{{-- <span><a class="sku-nd" href="#" style="font-size: 12px">Uncategorized</a></span> --}}
                                </div><!--/category-->
                            </div><!--/category_tag-->
                        </div><!--/mid-product-content-->
                    </div>
                </div>
            </div>
        </section>
        <section class="tabProduct">
            <div class="container">
                <div class="menuTabPro">
                    <ul class="">
                        <li class="active">
                            <a data-toggle="tab" href="#home">Chi tiết sản phẩm</a>
                        </li>
                        <li>|</li>
                        <li>
                            <a data-toggle="tab" href="#menu1">Hướng dẫn đặt hàng</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade in active tabProText" id="home">
                        <p>Rượu Trius hương vị quả mọng màu đỏ và đen bùng nổ trên vòm miệng với một cảm giác mềm mại ngon miệng. Với sự kết hợp hoàn hảo từ các hương trái cây hòa quyện cùng vị rượu nồng nàn, mang lại cảm giác tươi mát và đầy sức sống cho vị giác của bạn. Hương vị đặc trưng của rượu là vị chua của táo và lê, chín ngọt của mâm xôi và anh đào. Các lớp hương vị phát triển và mở ra, kết thúc tiếp tục với hương vị ngày càng tăng. Kết thúc với hương vị phong phú, độc đáo, thỏa mãn với hương khói thuốc, hạt tiêu và gia vị.</p>
                        <p>Cách uống đặc trưng truyền thống với ly nước đá để riêng là cách uống tốt nhất để đánh giá đầy đủ hương vị đặc biệt của Champagne Louis Roederer. Đó là trải nghiệm chậm rãi, mạnh mẽ và phong phú độ sâu hương vị đa lớp hương. Hương thơm mạnh mẽ đến từ bờ biển phía tâu được cân bằng với gợi ý ngọt ngoài và sâu lắng. Nhấp một ngụm nước đá trước khi bạn nhấp một ngụm sâm panh đầu tiên để chắc rằng vòm họng hoàn toàn được làm mới. Hương vị đầu tiên sẽ tiết lộ sự bùng nổ hương vị trên đầu lưỡi, sau đó lan khắp vòm miệng.</p>
                    </div>
                    <div class="tab-pane fade tabProText" id="menu1">
                        <p>Cách thức đặt hàng</p>
                        <p>Vào form đặt hàng ... hoặc liên hệ qua ...</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-shop-slidebar" style=" padding-top: 60px;">
            <div class="container">
                <div class="text-center">
                    <h3>Sản phẩm cùng loại</h3>
                </div>
                <div class="row">
                    <div class="col-md-3">
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
            </div>
        </section>
    @include('user.footer')    
    </div>
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
    </script> <!-- Zoom slide -->
    <script src="{{ asset('') }}/vendor/slide-zoom/js/jquery.modernizr.js">
    </script> 
    <script src="{{ asset('') }}/vendor/slide-zoom/js/instafeed.min.js">
    </script> 
    <script src="{{ asset('') }}/vendor/slide-zoom/js/elevatezoom.min.js">
    </script> 
    <script src="{{ asset('') }}/vendor/slide-zoom/js/jquery.fancybox.min.js">
    </script> <!-- End zoom slide -->
</body>
</html>