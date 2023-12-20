<?php
global $dbh;
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!doctype html>
<html lang="en-gb" class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>DU LỊCH VIỆT NAM</title>
  <meta name="description" content="Du lịch VN">
  <meta name="author" content="Nhóm 7 -DCCNTT12.10.11">

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!--  <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/da-slider.css" />
  <!-- Owl Carousel Assets -->
  <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css" />
  <!-- Font Awesome -->
  <!--animate-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
  <link href="font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
 <?php include('includes/header.php'); ?>
 <!--/.header-->
 <div id="#top"></div>
 <section id="home">
  <div class="banner-container">
    <!--   <img src="images/banner-bg.jpg" alt="banner" />-->
    <div class="container banner-content">
      <div id="da-slider" class="da-slider">
        <div class="da-slide">
          <h2>Kế hoạch du lịch</h2>
          <p>Nhận kế hoạch của bạn ngay lập tức.. tận hưởng!!!</p>
          <a href="#" class="da-link">Đọc thêm</a>
          <div class="da-img"></div>
        </div>
        <div class="da-slide">
          <h2>Chuyến tham quan tuyệt vời</h2>
          <p>Chuyến du lịch bạn nhớ suốt đời!!</p>
          <a href="#" class="da-link">Đọc thêm</a>
          <div class="da-img"></div>
        </div>
        <div class="da-slide">
          <h2>Những chuyến du lịch tốt nhất</h2>
          <p>Nhận ưu đãi tốt nhất tại chỗ của chúng tôi</p>
          <a href="#" class="da-link">Đọc thêm</a>
          <div class="da-img"></div>
        </div> 
      </div>
    </div>
  </div>
</section>
<section id="introText">
  <div class="container">
    <div class="text-center adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
      <h1>Chuyến du lịch của tôi mang đến cho bạn một kỳ nghỉ tuyệt vời</h1>
      <p>Khách hàng rất quan trọng, khách hàng sẽ được khách hàng theo đuổi. Đôi khi đó là một điều bất ngờ và nó không thành công. Ngày mai hắn cần quảng cáo rằng giá trời đã khác. Ngày mai hãy mỉm cười trên nỗi đau. Yếu tố Ultricies dành cho trẻ em, có rất nhiều phim hoạt hình của CNN. Khoản thanh toán tiếp theo sẽ chỉ được thực hiện bởi nhân viên . </p>
    </div>
  </div>
</section>
<!--About-->
<section id="aboutUs" class="secPad">
  <div class="container">

    <div class="heading text-center adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
      <!-- Heading -->
      <h2>Thông tin</h2>
      <p>Tại Lorem Ipsum có sẵn, nhưng phần lớn đã bị thay đổi dưới một hình thức nào đó do sự hài hước được tiêm vào.</p>
    </div>
    <div class="row adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
      <div class="col-md-4">
        <img src="images/about.jpg" alt="" class="img-responsive img-thumbnail">
      </div>
      <div class="col-md-8">
        <p>Nhưng để bạn có thể thấy tất cả sai lầm bẩm sinh này của những người buộc tội niềm vui và ca ngợi nỗi đau, mọi nỗi đau đều được yêu thương, theo đuổi và tìm cách đạt được, nhưng bởi vì những lúc như vậy không bao giờ xảy ra khi anh ta tìm kiếm niềm vui lớn lao nào đó thông qua lao động và đau đớn. </p>
        <p>Nhưng để bạn có thể thấy rằng tất cả những sai lầm sinh ra này là niềm vui của những người buộc tội và ca ngợi nỗi đau, tôi sẽ mở ra toàn bộ vấn đề, và chính điều đó đến từ người khám phá ra sự thật, người yêu thích chính nỗi đau. bởi vì nó là nỗi đau, theo đuổi nó, muốn đạt được nó, nhưng bởi vì những lúc như vậy không bao giờ xảy ra nên anh ta phải lao động và đau đớn để tìm kiếm niềm vui lớn lao nào đó. </p>
        <p>Nhưng để bạn có thể thấy rằng tất cả những sai lầm sinh ra này là niềm vui của những người buộc tội và ca ngợi nỗi đau, tôi sẽ mở ra toàn bộ vấn đề, và chính điều đó đến từ người khám phá ra sự thật, người yêu thích chính nỗi đau. bởi vì nó là nỗi đau, theo đuổi nó, muốn đạt được nó, nhưng bởi vì những lúc như vậy không bao giờ xảy ra nên anh ta phải lao động và đau đớn để tìm kiếm niềm vui lớn lao nào đó. </p>
      </div>
    </div>
  </div>   
</section>


<!--Package-->
<section id="packages" class="secPad">
  <div class="container">
    <div class="heading text-center">
      <!-- Heading -->
      <h2>Gói phổ biến nhất</h2>
      <p>Khách hàng rất quan trọng, khách hàng sẽ được chúng tôi theo dõi</p>
    </div>
    <div class="">
      <h3>Danh sách gói tour</h3>
      <?php $sql = "SELECT * from tbltourpackages order by rand() ";
      $query = $dbh->prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      $cnt=1;
      if($query->rowCount() > 0)
      {
        foreach($results as $result)
        { 
          ?>
          <div class="rom-btm">
            <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
              <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
              <h4>Tên vườn quốc gia: <?php echo htmlentities($result->PackageName);?></h4>
              <h6>Loại vườn quốc gia: <?php echo htmlentities($result->PackageType);?></h6>
              <p><b>Vị trí vườn quốc gia:</b> <?php echo htmlentities($result->PackageLocation);?></p>
              <p><b>Đặc trưng</b> <?php echo htmlentities($result->PackageFetures);?></p>
            </div>
            <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
              <h5> <?php echo htmlentities($result->PackagePrice);?> đ</h5>
              <a href="package_details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Chi tiết</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <?php 
        }
      } ?>
    </div>
    <div class="clearfix"></div>   
  </div>
</section>
<!--Quote-->
<section id="quote" class="bg-parlex">
  <div class="parlex-back">
    <div class="container secPad text-center">
      <h2>"Thế giới là một cuốn sách, ai không đi du lịch chỉ đọc được một trang."
      </h2><h3>-Saint Augustine</h3>
    </div>
    <!--/.container-->
  </div>
</section>
<!--Portfolio-->
<section id="portfolio" class="page-section section appear clearfix secPad">
  <div class="container">
    <div class="heading text-center">
      <!-- Heading -->
      <h2>Phòng trưng bày</h2>
      <p>Tại Lorem Ipsum có sẵn, nhưng phần lớn đã bị thay đổi dưới một hình thức nào đó do sự hài hước được tiêm vào.</p>
    </div>
    <div class="row">            
      <div class="col-md-12">
        <div class="row">
          <div class="portfolio-items clearfix papper " id="3" >
            <article class="col-sm-4  isotopeItem webdesign">
              <div class="portfolio-item">
                <img src="images/portfolio/america.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img1.jpg" class="fancybox">                                                
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="images/portfolio/img2.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img2.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>


            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="images/portfolio/img3.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img3.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem print">
              <div class="portfolio-item">
                <img src="images/portfolio/img4.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img4.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="images/portfolio/img5.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img5.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem webdesign">
              <div class="portfolio-item">
                <img src="images/portfolio/img6.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img6.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem print">
              <div class="portfolio-item">
                <img src="images/portfolio/img7.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img7.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="images/portfolio/img8.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img8.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem print">
              <div class="portfolio-item">
                <img src="images/portfolio/img9.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img9.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Liên hệ -->
<section id="contactUs" class="page-section secPad">
  <div class="container">
    <div class="row">
      <div class="heading text-center">
        <!-- Heading -->
        <h2>Hãy giữ liên lạc!</h2>
        <p>Cảm ơn đã ghé xem hồ sơ của tôi. Nếu bạn muốn liên hệ với tôi, vui lòng điền vào mẫu dưới đây.</p>
      </div>
    </div>
    <div class="row mrgn30">
      <div class="col-sm-12 col-md-8">
        <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
        <form name="sentMessage" id="contactForm"  validate>
          <h3>Mâu liên hệ</h3>
          <div class="control-group">
            <div class="controls">
              <input type="text" class="form-control" 
              placeholder="Họ tên" id="name" required
              data-validation-required-message="Vui lòng nhập tên của bạn" />
              <p class="help-block"></p>
            </div>
          </div> 	
          <div class="control-group" style="margin-bottom: 8px;">
            <div class="controls">
              <input type="email" class="form-control" placeholder="Email" 
              id="email" required
              data-validation-required-message="Vui lòng nhập Email của bạn" />
            </div>
          </div> 	

          <div class="control-group" style="margin-bottom: 8px;">
            <div class="controls">
              <textarea rows="10" cols="100" class="form-control" 
              placeholder="Nội dung" id="message" required
              data-validation-required-message="Vui lòng nhập nội dung" minlength="5"
              data-validation-minlength-message="Tối thiểu 5 ký tự"
              maxlength="999" style="resize:none"></textarea>
            </div>
          </div> 		 
          <div id="success"> </div> <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary pull-right">Gửi</button><br />
        </form>
      </div> 

      <!-- signup -->
      <?php include('includes/signup.php');?>     
      <!-- //signu -->
      <!-- signin -->
      <?php include('includes/signin.php');?>     
      <!-- //signin -->
      <div class="col-sm-12 col-md-4">
        <h4>Địa chỉ:</h4>
        <address>
          Trường Đại học Công nghệ Đông Á<br>
          Đường Trịnh Văn Bô<br>
          Nam Từ Niêm ,Hà Nội
          <br>
        </address>
        <h4>Số điện thoại:</h4>
        <address>
          0123456789<br>
        </address>
      </div>
    </div>
  </div>
  <!--/.container-->
</section>
<?php include('includes/footer.php'); ?>

<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>
<script src="js/modernizr-latest.js"></script>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="js/jquery.nav.js" type="text/javascript"></script>
<script src="js/jquery.cslider.js" type="text/javascript"></script>
<script src="contact/contact_me.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
