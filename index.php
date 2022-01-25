<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Codely MN</title>
  <meta name="description" content="Codely MN | learn easily">
  <meta name="keywords" content="Programm developer and Web developer">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
</head>

<body>
  <?php include "navbar.php" ?>
  <!--Modal box-->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Нэвтрэх</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Codely MN д тавтай морил</p>
            <div class="form-group">
              <form action="./login.php" method="POST">
                <div class="form-group has-feedback">
                  <!----- username -------------->
                  <input class="form-control" placeholder="Email address" name="loginid" type="text" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" placeholder="Password" name="loginpsw" type="password" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" >Намайг сана
                              </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-green btn-block btn-flat">Нэвтрэх</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--/ Modal box-->
  <!--Banner-->
  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec">Codely Mongolia</h2>
            </div>
            <div class="intro-para text-center quote">
              <p class="big-text">Learning Today . . . Leading Tomorrow.</p>
              <p class="small-text">Энэхүү вебсайт нь зөвхөн бүртгэлтэй хэрэглэгчдэд дэмжлэг үзүүлэх юм</p>
              <a href="#footer" class="btn get-quote">Холбогдох</a>
            </div>
            <a href="#feature" class="mouse-hover">
              <div class="mouse"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->
  <!--Feature-->
  <!--/ Testimonial-->
  <!--Courses-->
  <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Курсууд</h2>
          <p>Энэхүү курсууд нь бүрэн агуулга биш бөгөөд<br> MS Teams дээрх хичээлийн нэмэлт агуулгууд юм</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up" style="margin: 10px;">
            <img src="img/html_css.png" class="img-responsive">
            <figcaption>
              <h3>HTML & CSS</h3>
              <p>Hyper text markup language and Cascading style sheet </p>
            </figcaption>
            <a href="./html_css.php"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up" style="margin: 10px;">
            <img src="img/JavaS.png" class="img-responsive">
            <figcaption>
              <h3>Javascript</h3>
              <p>Frontend Programming language</p>
            </figcaption>
            <a href="./js.php"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up" style="margin: 10px;">
            <img src="img/bootstrap.png" class="img-responsive">
            <figcaption>
              <h3>Bootstrap</h3>
              <p>Frontend Popular Framework</p>
            </figcaption>
            <a href="./bootstrap.php"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up" style="margin: 10px;">
            <img src="img/cpp.png" class="img-responsive">
            <figcaption>
              <h3>C++</h3>
              <p>Programming language</p>
            </figcaption>
            <a href="./cpp.php?id=5"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up" style="margin: 10px;">
            <img src="img/java.png" class="img-responsive">
            <figcaption>
              <h3>Java</h3>
              <p>Programming language</p>
            </figcaption>
            <a href="./java.php"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up" style="margin: 10px;">
            <img src="img/linux.png" class="img-responsive">
            <figcaption>
              <h3>Linux</h3>
              <p>Open source OS</p>
            </figcaption>
            <a href="./linux.php"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up" style="margin: 10px;">
            <img src="img/git.png" class="img-responsive">
            <figcaption>
              <h3>Git</h3>
              <p>Version Control System</p>
            </figcaption>
            <a href="./git.php"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up" style="margin: 10px;">
            <img src="img/php.png" class="img-responsive">
            <figcaption>
              <h3>PHP</h3>
              <p>Servers side Programming Language</p>
            </figcaption>
            <a href="./php.php"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up" style="margin: 10px;">
            <img src="img/mysql.png" class="img-responsive">
            <figcaption>
              <h3>Mysql</h3>
              <p>Open-source relational database management system.</p>
            </figcaption>
            <a href="./mysql.php"></a>
          </figure>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Courses-->

  <!--Contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Холбоо барих</h2>
          <p>Та дараах талбаруудыг бөглөн <br> илгээх дарна уу</p>
          <hr class="bottom-line">
        </div>
        <div id="sendmessage">Илгээгдлээ Баярлалаа</div>
        <div id="errormessage"></div>
        <form action="" method="post" role="form" class="contactForm">
          <div class="col-md-6 col-sm-6 col-xs-12 left">
            <div class="form-group">
              <input type="text" name="name" class="form-control form" id="name" placeholder="Таны нэр" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Имэйл хаяг" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Гарчиг" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 right">
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Санал хүсэлт"></textarea>
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-xs-12">
            <!-- Button -->
            <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">Илгээх</button>
          </div>
        </form>

      </div>
    </div>
  </section>
  <!--/ Contact-->
  <!--Footer-->
  <?php include "footer.php" ?>
  <!--/ Footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
