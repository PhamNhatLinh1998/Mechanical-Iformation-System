<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8">
    <title>BHPassIO</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  </head>
  <body>
    <header class="header mb-5">
      <div id="top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offer mb-3 mb-lg-0"><div class = "time">
<script> 
						  dayName = new Array ("Chủ nhật","Thứ hai","Thứ ba","Thứ tư","Thứ năm","Thứ sáu","Thứ bảy") 
						  monName = new Array ("1","2","3","4","5","6","7","8","9","10","11","12") 
						  now = new Date 
						  document.write("<font color=#FF6600><b>"+now.getHours()+ ":" +now.getMinutes()+ " phút -  " +dayName[now.getDay()]+ ", " +now.getDate()+ "-" +monName[now.getMonth()]+ "-" +now.getFullYear()+ "</b></font>")                                     
</script>

</div></div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
                <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Đăng Nhập</a></li>
                <li class="list-inline-item"><a href="register.php">Đăng Kí</a></li>
                <li class="list-inline-item"><a href="contact.php">Liên Hệ</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Đăng Nhập</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form action="customer-orders.php" method="post">
                  <div class="form-group">
                    <input id="email-modal" type="text" placeholder="Địa Chỉ Email" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password-modal" type="password" placeholder="Mật Khẩu" class="form-control">
                  </div>
                  <p class="text-center">
                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Đăng Nhập</button>
                  </p>
                </form>
                <p class="text-center text-muted">Bạn Chưa Có Tài Khoản?</p>
                <p class="text-center text-muted"><a href="register.php"><strong>Đăng Kí Nhanh ! </strong></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="sanpham.php" class="navbar-brand home"><img src="img/logo1.jpg" alt="Obaju logo" class="d-none d-md-inline-block"><img src="img/logo-small.png" alt="Obaju logo" class="d-inline-block d-md-none"></a>
          
          <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a href="sanpham.php" class="nav-link active">Trang Chủ</a></li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Máy móc cơ khí<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5><a href="matna.php" style="text-decoration:none" >Máy móc cơ khí</a></h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="matna.php" class="nav-link">Nhật Bản</a></li>
                          <li class="nav-item"><a href="matna.php" class="nav-link">Hàn Quốc</a></li>
                          
                        </ul>
                      </div>
                      
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
            <div class="navbar-buttons d-flex justify-content-end">
              <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only"></span><i class="fa fa-search"></i></a>
              <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="basket.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span>Sản Phẩm Trong Giỏ</span></a></div>
            </div>
          </div>
        </div>
      </nav>
      <div id="search" class="collapse">
        <div class="container">
          <form role="search" class="ml-auto">
            <div class="input-group">
              <input type="text" placeholder="Search" class="form-control">
              <div class="input-group-append">
                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </header>
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="main-slider" class="owl-carousel owl-theme">
                <div class="item"><img src="img/bia2.jpg" alt="" class="img-fluid"></div>
                <div class="item"><img src="img/bia3.jpg" alt="" class="img-fluid"></div>
                <div class="item"><img src="img/bia1.jpg" alt="" class="img-fluid"></div>
                <div class="item"><img src="img/bia2.jpg" alt="" class="img-fluid"></div>
              </div>
            </div>
          </div>
        </div>
        <div id="advantages">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <h3><strong>Phục Vụ Chuyên Nghiệp</strong></h3>
                  <p class="mb-0">Tư vấn nhiệt tình, là sự lựa chọn hoàn hảo của người tiêu dùng.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <h3><strong>Giá Tốt</strong></h3>
                  <p class="mb-0">Giá thành hợp lý, phù hợp với tiêu chí người tiêu dùng, giao hàng và lắp đặt tận nơi tận nơi. Cam kết giá cả không thay đổi.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <h3><strong>100% Hàng Chính Hãng</strong></h3>
                  <p class="mb-0">Cam kết bán hàng chính hãng. Luôn phục vụ cho quý khách những sản phẩm chất lượng.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="hot">
          <div class="box py-4">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-0">Sản Phẩm Nổi Bật</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="product-slider owl-carousel owl-theme">
              <div class="item">
                <div class="product">
					<a href="sanpham.php"><img src="img/may1.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="sanpham.php">Máy bào mini</a></h3>
                    <p class="price"> 
                      <del></del>1.4000.000đ
					  
                    </p>
                  </div>	
                </div>
              </div>
              <div class="item">
                <div class="product">
                  <a href="sanpham.php"><img src="img/may2.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="sanpham.php">Máy gia công thanh cái DHY401 </a></h3>
                    <p class="price"> 
                      <del></del>36.000.000đ
					  
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product">
                  <a href="sanpham.php"><img src="img/may3.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="sanpham.php">Bộ máy công cụ gia công 6 trong 1</a></h3>
                    <p class="price"> 
                      <del></del>4.500.000đ
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product">
                  <a href="sanpham.php"><img src="img/may1.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="sanpham.php">Máy bào mini</a></h3>
                    <p class="price"> 
                      <del></del>1.4000.000đ
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="product">
                  <a href="sanpham.php" ><img src="img/may2.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="sanpham.php">Máy gia công thanh cái DHY401 </a></h3>
                    <p class="price"> 
                      <del></del>36.000.000đ
                    </p>
                  </div>
				</div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
					<a href="sanpham.php"><img src="img/may3.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="sanpham.php">Bộ máy công cụ gia công 6 trong 1</a></h3>
                    <p class="price"> 
                      <del></del>4.500.000đ
                    </p>
                  </div>
                </div>
                <!-- /.product-->
              </div>
              
              
              <!-- /.product-slider-->
            </div>
            <!-- /.container-->
          </div>
          <!-- /#hot-->
          <!-- *** HOT END ***-->
        </div>
        <!--
        *** GET INSPIRED ***
        _________________________________________________________
        -->
        <div class="container">
          <div class="col-md-12">
            <div class="box slideshow">
              <h3>SỰ LỰA CHỌN HOÀN HẢO</h3>
              <p class="lead">Sản Phẩm Làm Nên Thương Hiệu</p>
              <div id="get-inspired" class="owl-carousel owl-theme">
                <div class="item"><a href="#"><img src="img/biaduoi1.jpg" alt="Get inspired" class="img-fluid"></a></div>
                <div class="item"><a href="#"><img src="img/biaduoi2.jpg" alt="Get inspired" class="img-fluid"></a></div>
                
              </div>
            </div>
          </div>
        </div>
        <!-- *** GET INSPIRED END ***-->
        <!-- -->
        

        <div class="container">
          <div class="col-md-12">
            <div id="blog-homepage" class="row">
              <div class="col-sm-6">
                <div class="post">
                  <h4>Thương Hiệu</h4>
                  <hr>
                  <p class="intro">Trong những năm qua, mục tiêu của chúng tôi là cải tiến thiết bị ngày càng chuyên nghiệp và trở thành sản phẩm hạng nhất, dịch vụ xuất sắc và đổi mới hàng đầu, để đạt được chuyên môn hóa sản phẩm, chuyên môn kỹ thuật, dịch vụ chuyên nghiệp và chuyên môn hóa nhóm. 
☞ Sản phẩm của chúng tôi rất phổ biến ở Nhật Bản và cả ở nước ngoài với chất lượng hàng đầu và dịch vụ tốt nhất được công nhận bởi khách hàng.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="post">
                  <h4>Các dòng máy cơ khí hiện tại do PhucLinh đang cung cấp</h4>
                  <hr>
                  <p class="intro">
				  <ul>
				  <li>Nhật Bản</li>
				  <li>Hàn Quốc</li>
				  <br>
				  <br>
				  <br>
				  <br>

				  </ul>
				  </p>
                </div>
              </div>
            </div>
            <!-- /#blog-homepage-->
          </div>
        </div>
        <!-- /.container-->
        <!-- *** BLOG HOMEPAGE END ***-->
      </div>
    </div>
    	<div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Trang</h4>
            <ul class="list-unstyled">
              <li><a href="sanpham.php">Trang Chủ</a></li>
              <li><a href="contact.php">Liên Hệ Chúng Tôi</a></li>
            </ul>
            <hr>
            <h4 class="mb-3">Người Dùng</h4>
            <ul class="list-unstyled">
              <li><a href="#" data-toggle="modal" data-target="#login-modal">Đăng Nhập</a></li>
              <li><a href="register.php">Đăng Kí</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Danh Sách Sản Phẩm </h4>
            <h5>Các dòng máy cơ khí</h5>
            <ul class="list-unstyled">
              <li><a href="cokhi.php">Nhật Bản</a></li>
              <li><a href="cokhi.php">Hàn Quốc</a></li>
			  
            </ul>
            
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Địa Chỉ</h4>
            <p>Hoàng Anh Gia Lai 3<br>Nguyễn Hữu Thọ<br>Quận 7<br>TP.Hồ Chí Minh<br><strong>Việt Nam</strong></p><a href="contact.php"></a>
            <hr class="d-block d-md-none">
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Có gì mới</h4>
            <p class="text-muted">Sản Phẩm Mới Cập Nhật Hằng Ngày.</p>
            <form>
              <div class="input-group">
                <input type="text" class="form-control"><span class="input-group-append">
                  <button type="button" class="btn btn-outline-secondary">Tìm Kiếm Sản Phẩm</button></span>
              </div>
            </form>
            <hr>
            <h4 class="mb-3">Liên Hệ Khác</h4>
            <p class="social"><a href="#" class="facebook external"><i class="fa fa-facebook"></i></a>
			<a href="#" class="instagram external"><i class="fa fa-instagram"></i></a>
			<a href="#" class="gplus external"><i class="fa fa-google-plus"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-2 mb-lg-0">
            <p class="text-center text-lg-left">©2018 BHPassIO.</p>
          </div>
        </div>
      </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</php>