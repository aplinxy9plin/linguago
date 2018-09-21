<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Favicons -->
    <link rel="shortcut icon" href="#">
    <!-- Page Title -->
    <title>Mylingua</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="css/set1.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css'>
<!-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'> -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body onload="load_mark()">
    <!--============================= HEADER =============================-->
    <div class="dark-bg sticky-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php">Mylingua</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-menu"></span>
            </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                          <ul class="navbar-nav">
                            <li class="nav-item " style="background-color: #ff3a6d">
                                <a class="nav-link" href="schools.php?sort=offline">КУРСЫ ОФФЛАЙН</a>
                            </li><hr>
                            <li class="nav-item " style="background-color: #ff3a6d">
                                <a class="nav-link" href="schools.php?sort=online">КУРСЫ ОНЛАЙН</a>
                            </li><hr>
                            <li class="nav-item " style="background-color: #ff3a6d">
                                <a class="nav-link" href="teachers.php">УРОКИ ПО Skype</a>
                            </li><hr>
                              <li class="nav-item ">
                                  <a class="nav-link" href="#" aria-haspopup="true" aria-expanded="false">8-913-109-26-84</a>
                              </li>
                              <li class="nav-item ">
                                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Заказать обратный звонок</a>
                              </li>
                              <li class="nav-item ">
                                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Р</a>
                              </li>
                              <li class="nav-item ">
                                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RU</a>
                              </li>
                          </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--//END HEADER -->
    <br>
    <style>
      .btext{
        color: black
      }
      .img_travel{
    /* The image used */
    background-image: url("http://www.wsllpaper.com/wp-content/uploads/2013/08/airplane-flying-hd-desktop-wallpaper.jpg");

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: absolute;
    right: 0;
  }
    </style>
    <section>
        <div class="container">
                <div class="col-md-12">
                    <div class="row">
                      <div class="col-sm-7" style="border-right: 1px solid #ddd; top: 10px; padding-right: 100px">
                          <h1>Контакты</h1>
                          <h3>Телефоны для связи со службой клиентской поддержки</h3>
                          Россия: 8 (965) 9883192
                          <h4>Или напиши нам на почту</h4>
                          <a href="#">info@mylingua.online</a>— общие вопросы, служба поддержки
                      </div>
                      <div class="col-sm-5" style="padding-top: 200px">
                        <form>
                          <p>Вы можете написать ваш вопрос здесь, и мы оперативно ответим на него.</p><br>
                          <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Ваше имя</label>
                            <div class="col-10">
                              <input class="form-control" type="text" id="example-text-input">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-search-input" class="col-2 col-form-label">Ваш email</label>
                            <div class="col-10">
                              <input class="form-control" type="search" id="example-search-input">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="example-search-input" class="col-2 col-form-label">Ваш телефон</label>
                            <div class="col-10">
                              <input class="form-control" type="search" id="example-search-input">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="exampleTextarea">Ваш вопрос</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                          </div>
                          <button class="btn btn-lg btn-success">Отправить</button>
                        </form>
                      </div>
                    </div>
                </div>
        </div>
    </section><br><br>
    <!--============================= FOOTER =============================-->
    <footer class="main-block dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <div class="col-md-3" style="display: inline-block">
                    <div class="row">
                      <ul style="list-style: none">
                        <li><h6 style="color: #f8f8f8">О компании</h6></li>
                        <li><a href="about.php" style="color: #f8f8f8; text-decoration: underline;">О нас</a></li>
                        <li><a href="contact.php" style="color: #f8f8f8; text-decoration: underline;">Контакты</a></li>
                        <li><a href="advantages.php" style="color: #f8f8f8; text-decoration: underline;">Наши приемущества</a></li>
                        <li><a href="docs/Условия%20использования%20сайта%20Mylingua.online.docx" style="color: #f8f8f8; text-decoration: underline;">Условия использования сайта</a></li>
                        <li><a href="docs/Политика%20конфиденциальности%20MyLingua.online.docx" style="color: #f8f8f8; text-decoration: underline;">Обработка пресональных данных</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-3" style="display: inline-block">
                    <div class="row">
                      <ul style="list-style: none; color: white">
                        <li><h6 style="color: #f8f8f8">Наши услуги</h6></li>
                        <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Языковые курсы по всему миру</a></li>
                        <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Курсы иностранных языков онлайн</a></li>
                        <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Уроки по Skype</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-3" style="display: inline-block">
                    <div class="row">
                      <ul style="list-style: none">
                        <li><a href="#" class="btn" style="background-color: #ff3a6d; color: #f8f8f8">Внести оплату по карте</a></li><br>
                        <li><a href="add_school.php" style="color: #f8f8f8; text-decoration: underline;">Зарегистрировать школу</a></li>
                        <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Войти</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-2" style="display: inline-block">
                    <div class="row">

                      <div class="copyright">
                          <ul style="margin: 0px 0 0">
                              <li><a href="#"><span class="ti-facebook"></span></a></li>
                              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                              <li><a href="#"><span class="ti-instagram"></span></a></li>
                          </ul>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->
    <!--//END DETAIL -->

    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js'></script>



    <script  src="js/index.js"></script>
</body>

</html>
