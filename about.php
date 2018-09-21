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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 responsive-wrap">
                  <div class="offer-box">
                    <div class="row">
                        <div class="col-sm-7" style="border-right: 1px solid #ddd; padding-right: 3em; padding-top: 1em;">
                            <h1 style="color: black">О нас</h1>
                            <p class="btext"><b style="font-size: 3em;">My lingua </b> - онлайн-сервис для поиска языковых курсов по всему миру, языковых курсов онлайн, а также для поиска идеального преподавателя для частных уроков по скайп! Каждый месяц мы помогаем более чем 100 000 студентам осуществить свою мечту - сделать изучение иностранного языка эффективным и комфортным!  При поиске языковых курсов за рубежом, мы не только помогаем найти языковые курсы по всему миру, но и подбираем проживание и консультируем по всем вопросам для получения визы.</p><br>
                            <h4 class="btext">Наш сервис поможет вам :</h4>
                            <ul class="btext">
                              <li>выбрать языковую школу,курс,а также проживание и забронировать все это онлайн по низкой цене.</li>
                              <li>выбрать онлайн курс для изучения языка с помощью нашей геймифицированной платформы.</li>
                              <li>найти идеального преподавателя, или преподавателя носителя для изучения любого языка!</li>
                            </ul>
                            <h4>Команда</h4>
                            <p style="font-size: 1.3em">Сервис создается надежной командой, которая трудится ради наших клиентов и ценит доверие каждого! Мы поможем вам найти ваш идеальную школу и курс! </p>
                            <h4>Наша цель</h4>
                            <p class="btext">Мы создаем сервис, где мы соединяем языковые школы, онлайн курсы, частных преподавателей и потенциальных студентов, которые могут забронировать курс или  преподавателя всего за 1 минуту! Это позволит вам быстро и легко найти подходящим вам курс, не заполнять анкет и не тратить время в банке для перевода оплаты за курс. Более того, наш сервис предлагает специальные цены, различные акции и скидки.</p>
                            <h3>Служба поддержки клиентов</h3>
                            <ul>
                              <li><h4>Россия 8-965-988-31-92</h4></li>
                              <li><h4><a href="#">info@mylingua.online</a> — общие вопросы, служба поддержки</h4></li>
                              <li>Юридический адрес:<ul><li></li></ul></li>
                              <li>Банковские реквизиты:<ul><li></li></ul></li>
                            </ul>
                            <h4>Остались вопросы?</h4>
                            <p style="font-size: 1.3em">Мы ответим с удовольствием на любой интересующий вас вопрос на странице <a href="#">ВКонтакте</a>.Вы также можете <a href="#">заказать обратный звонок</a>.</p>
                        </div>
                        <div class="col-sm-5 img_travel">
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <!--//END DETAIL -->
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
                        <li><a href="docs/politic.docx" style="color: #f8f8f8; text-decoration: underline;">Обработка пресональных данных</a></li>
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
                        <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Консультации по оформлению виз</a></li>
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
