<?php
  session_start();
?>
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
    <link rel="stylesheet" href="css/style.css">
    <!-- новые стили -->
    <link rel="stylesheet" href="css/styles.v2.0.css">
</head>

<body>
  <button style="display: none" id="first_modal" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
  <button style="display: none" id="callback_a" type="button" class="btn btn-info btn-lg" data-toggle="modal1" data-target="#callback_phone">Open Modal</button>
  <?php
    if(empty($_SESSION['subs']) && empty($_SESSION['login'])){
      echo '<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-body">
             <div id="id-newsletter-signup-modal-contents">
                <div class="modal-background" style="z-index:0"></div>
                <div class="clearfix"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></div>
                <div class="row">
                   <form action="#" class="form col-sm-6" data-ajax="true" data-ajax-loading="#loading" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#id-newsletter-signup-modal-contents" id="form0" method="post" novalidate="novalidate">
                      <div class="header-par">Подпишитесь на нашу рассылку, чтобы первыми узнавать о лучших предложениях школ и получать советы о планировании поездки!</div>
                      <div class="form-block" style="margin-top:2em"><label class="bold">Адрес моей электронной почты</label> <input class="form-control" name="email_subs" data-val="true" data-val-required="" data-val-email=""></div>
                      <div class="button-block" style="margin-top:1em"><button id="newsletter_submit" type="submit" class="btn btn-lg bold btn-success">Подписаться</button></div>
                   </form>
                   <div class="col-sm-5 col-sm-offset-1">
                      <div class="media">
                         <img class="sprites_landing/study.png pull-left media-object" src="data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                         <div class="media-body"><b>Узнайте, как выбрать правильную школу</b> в зависимости от ваших целей</div>
                      </div>
                      <div class="media">
                         <img class="sprites_landing/world.png pull-left media-object" src="data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                         <div class="media-body"><b>Узнайте, нужна ли вам виза</b> и как ее получить</div>
                      </div>
                      <div class="media">
                         <img class="sprites_landing/lock.png pull-left media-object" src="data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                         <div class="media-body"><b>Не волнуйтесь&nbsp;— адрес вашей электронной почты останется в безопасности.</b> Мы никогда не распространяем личные данные, и вы можете отказаться от рассылки в любой момент.</div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
        </div>

        </div>
      </div>';
    }
  ?>
  <!-- Modal -->

  <div class="modal fade" id="callback_phone" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
         <div id="id-newsletter-signup-modal-contents">
            <div class="modal-background" style="z-index:0"></div>
            <div class="clearfix"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></div>
            <div class="row">
               <form action="#" class="form col-sm-6" data-ajax="true" data-ajax-loading="#loading" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#id-newsletter-signup-modal-contents" id="form0" method="post" novalidate="novalidate">
                  <div class="header-par">Введите номер телефона</div>
                  <div class="form-block" style="margin-top:2em"><label class="bold">Электронная почта</label> <input class="form-control" name="email" data-val="true" data-val-required="" data-val-email=""></div>
                  <div class="form-block" style="margin-top:2em"><label class="bold">Номер телефона</label> <input class="form-control" name="phone" data-val="true" data-val-required="" data-val-email=""></div>
                  <div class="button-block" style="margin-top:1em"><button id="newsletter_submit" type="submit" class="btn btn-lg bold btn-success">Заказать звонок</button></div>
               </form>
            </div>
         </div>
      </div>
    </div>

    </div>
  </div>
  <!-- End Modal -->
    <!--============================= HEADER =============================-->
    <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.php"><h2>MyLingua</h2></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-menu"></span>
              </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <?php
                                      if(isset($_SESSION['login'])){
                                        if($_SESSION['rule'] == 'school'){
                                          echo '<li class="nav-item " style="background-color: #ff3a6d">
                                              <a class="nav-link" href="school_profile">ЛИЧНЫЙ КАБИНЕТ</a>
                                          </li><hr>';
                                        }else{
                                          echo '<li class="nav-item " style="background-color: #ff3a6d">
                                              <a class="nav-link" href="profile">ЛИЧНЫЙ КАБИНЕТ</a>
                                          </li><hr>';
                                        }
                                      }
                                    ?>
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
                                        <a href="javascript:callback_b()" class="nav-link" data-toggle="modal" data-target="#callback_phone" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Заказать обратный звонок</a>
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
    </div>
    <!-- SLIDER -->
    <section class="slider d-flex align-items-center">
        <!-- <img src="images/slider.jpg" class="img-fluid" alt="#"> -->
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                    <h1 style="font-size: 4em">ЯЗЫКОВЫЕ КУРСЫ ПО ВСЕМУ МИРУ</h1>
                                    <h5 style="font-size: 2em">ПОЗНАВАЙ МИР ВМЕСТЕ С Mylingua</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10">
                                <form class="form-wrap mt-4" action="schools.php" method="GET">
                                    <div class="btn-group group-search" role="group" aria-label="Выбор">
                                      <div class="dropdown btn-group" role="group" aria-label="Выбор языка">
                                        <button class="btn btn-primary-outline btn-lg dropdown-toggle" type="button" id="language" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Выберите язык
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="language">
                                          <a class="dropdown-item" href="#">Английский</a>
                                          <a class="dropdown-item" href="#">Немецкий</a>
                                          <a class="dropdown-item" href="#">Испанский</a>
                                        </div>
                                        <input type="hidden" class="input-hidden" name="language" />
                                      </div>
                                      <div class="dropdown btn-group" role="group" aria-label="Выбор страны">
                                        <button class="btn btn-primary-outline btn-lg dropdown-toggle" type="button" id="country" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Выберите страну
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="country">
                                          <a class="dropdown-item" href="#">США (5)</a>
                                          <a class="dropdown-item" href="#">Англия (2)</a>
                                        </div>
                                        <input type="hidden" class="input-hidden" name="country" />
                                      </div>
                                      <button type="submit" class="btn btn-primary btn-lg"><span class="icon-magnifier search-icon"></span>НАЙТИ ШКОЛЫ<i class="pe-7s-angle-right"></i></button>
                                    </div>
                                </form>
                                <div class="row counter mt-5">
                                  <div class="col-sm-4 col-xs-12 widget_counter">
                                    <span class="counter-number" data-from="1" data-to="260" data-speed="2000" data-refresh-interval="100">260</span>
                                    <span class="counter-description">школ</span>
                                  </div>
                                  <div class="col-sm-4 col-xs-12 widget_counter">
                                    <span class="counter-number" data-from="1" data-to="120" data-speed="2000" data-refresh-interval="100">120</span>
                                    <span class="counter-description">городов</span>
                                  </div>
                                  <div class="col-sm-4 col-xs-12 widget_counter">
                                    <span class="counter-number" data-from="1" data-to="260" data-speed="2000" data-refresh-interval="100">260</span>
                                    <span class="counter-description">счастливых учеников</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// SLIDER -->
    <!--//END HEADER -->
    <!--============================= FEATURED PLACES =============================-->
    <?php
      include('bd.php');
      if(isset($_POST["email_subs"])){
        $email_subs = $_POST['email_subs'];
        $result2 = $mysqli->query("INSERT INTO subscription (email) VALUES('$email_subs')");
        $_SESSION["subs"] = true;
      }
      $result = $mysqli->query("SELECT * FROM schools");
      $images = "";
      $array = [];
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            array_push($array, $row);
          }
      } else {
          echo "0 results";
      }
      //var_dump(array_unique($array[1]));
      $countrys = [];
      $languages = [];
      foreach ($array as $key) {
        //запилить двумерный массив, типа ["Английский" => "США", "Англия"]
        array_push($countrys, $key["country"]);
        array_push($languages, $key["language"]);
      }
      $x = $countrys[0];
      $y = $languages[0];
      $a = array_unique($countrys);
      $b = array_unique($languages);
      $languages = [];
      $countrys = [];
      foreach ($a as $key) {
        if($key !== NULL){
          array_push($countrys, $key);
        }
      }
      foreach ($b as $key) {
        if($key !== NULL){
          array_push($languages, $key);
        }
      }
      $arr = [];
      foreach ($languages as $key) {

      }
      //$result = $mysqli->query("SELECT * FROM schools WHERE language = ")
    ?>

    <!-- секция с тремя плашками -->
    <?include 'include/help.php';?>
    <!-- секция с шагами -->
    <?include 'include/steps.php';?>
    
    <!--//END ADD LISTING -->
    <section class="main-block light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="styled-heading">
                      <h1 style="color: black">ЛУЧШИЕ ПРЕДЛОЖЕНИЯ</h1>
                    </div>
                </div>
            </div>
            <div class="row">
              <?php
                //var_dump($array);
                for ($i=1; $i < 4; $i++) {
                  echo '<div class="col-md-4 featured-responsive">
                      <div class="featured-place-wrap">
                          <a href="detail.php?name='.$array[$i]["name"].'&id='.$array[$i]["id"].'">
                              <img src="sc/1.jpg" class="img-fluid" alt="#">
                              <span class="featured-rating-green">9.5</span>
                              <div class="featured-title-box">
                                  <h6>'.$array[$i]["name"].'</h6>
                                  <p>'.$array[$i]["language"].', '.$array[$i]["country"].' </p> <span>• </span>
                                  <p>4 Отзыва</p> <span> • </span>
                                  <p><span>$$$</span>$$</p>
                                  <ul>
                                      <li><span class="icon-location-pin"></span>
                                          <p>'.$array[$i]["address"].'</p>
                                      </li>
                                      <li><span class="icon-screen-smartphone"></span>
                                          <p>'.$array[$i]["phone"].'</p>
                                      </li>
                                  </ul>
                                  <div class="bottom-icons">
                                      <div class="open-now">ВЫБРАТЬ</div>
                                      <span class="ti-heart"></span>
                                      <span class="ti-bookmark"></span>
                                  </div>
                              </div>
                          </a>
                      </div>
                  </div>';
                }
              ?>

            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="featured-btn-wrap">
                        <a href="schools.php?language=Английский&country=США" class="btn btn-danger">ПОКАЗАТЬ ВСЕ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="add-listing-wrap">
                        <h2>Выбор миллиона людей</h2>
                        <p>Начни учиться за границей прямо сейчас</p>
                    </div>
                    <center><div class="row mt-50">
                      <div class="col-lg-4">
                          <div class="single-team">
                              <div class="member-img">
                                  <img class="img-fluid mx-auto" src="images/t1.png" alt="">
                              </div>
                              <div class="details"><br>
                                  <h4>Петр Петров</h4>
                                  <p>За 6 недель я встретила только 4 человека, кто говорил на русском.</p>
                                  <p>🇷🇺 О школе <a href="detail.php?name=Kings Лос-Анджелес (Голливуд)&id=2">Kings Лос-Анджелес (Голливуд)</a></p>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="single-team">
                              <div class="member-img">
                                  <img class="img-fluid mx-auto" src="images/t2.png" alt="">
                              </div>
                              <div class="details"><br>
                                  <h4>Иван Иванов</h4>
                                  <p>За 6 недель я встретила только 4 человека, кто говорил на русском.</p>
                                  <p>🇷🇺 О школе <a href="detail.php?name=Kings Лос-Анджелес (Голливуд)&id=2">Kings Лос-Анджелес (Голливуд)</a></p>                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="single-team">
                              <div class="member-img">
                                  <img class="img-fluid mx-auto" src="images/t3.png" alt="">
                              </div>
                              <div class="details"><br>
                                  <h4>Полина Христенко</h4>
                                  <p>За 6 недель я встретила только 4 человека, кто говорил на русском.</p>
                                  <p>🇷🇺 О школе <a href="detail.php?name=Kings Лос-Анджелес (Голливуд)&id=2">Kings Лос-Анджелес (Голливуд)</a></p>                              </div>
                          </div>
                      </div>
                  </div></center>
                </div>
            </div>
            <?php
              if(empty($_SESSION['login'])){
                echo '<div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="featured-btn-wrap">
                            <a href="login/reg.php" class="btn btn-danger">НАЧАТЬ СЕЙЧАС</a>
                        </div>
                    </div>
                </div>';
              }
            ?>
            <!-- <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="featured-btn-wrap">
                        <a href="login/reg.php" class="btn btn-danger">НАЧАТЬ СЕЙЧАС</a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!--//END FEATURED PLACES -->
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
                      <li><a href="schools.php" style="color: #f8f8f8; text-decoration: underline;">Языковые курсы по всему миру</a></li>
                      <li><a href="schools.php?sort=online" style="color: #f8f8f8; text-decoration: underline;">Курсы иностранных языков онлайн</a></li>
                      <li><a href="teachers.php" style="color: #f8f8f8; text-decoration: underline;">Уроки по Skype</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3" style="display: inline-block">
                  <div class="row">
                    <ul style="list-style: none">
                      <li><a href="#" class="btn" style="background-color: #ff3a6d; color: #f8f8f8">Внести оплату по карте</a></li><br>
                      <li><a href="add_school.php" style="color: #f8f8f8; text-decoration: underline;">Зарегистрировать школу</a></li>
                      <?php
                        if(empty($_SESSION['login'])){
                          echo '<li><a href="login" style="color: #f8f8f8; text-decoration: underline;">Войти</a></li>';
                        }
                      ?>
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




    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
      function show_modal(){
        document.getElementById('first_modal').click()
      }
      function callback_b(){
        document.getElementById('callback_a').click()
      }
      function selectChange(){
        var lang = document.getElementById('language').value
        switch (lang) {
          case 'Английский':
            $('#country')
              .find('option')
              .remove()
              .end()
              .append('<option>США (5)</option><option>Англия (2)</option>')
            ;
            break;
          case 'Немецкий':
            $('#country')
              .find('option')
              .remove()
              .end()
              .append('<option>Германия (3)</option>')
            ;
            break;
          case 'Испанский':
            $('#country')
              .find('option')
              .remove()
              .end()
              .append('<option>Испания (4)</option>')
            ;
            break;
          default:

        }
      }
      $(window).scroll(function() {
          // 100 = The point you would like to fade the nav in.

          if ($(window).scrollTop() > 100) {

              $('.fixed').addClass('is-sticky');

          } else {

              $('.fixed').removeClass('is-sticky');

          };
      });
      // dropdown click
      $(".dropdown .dropdown-menu .dropdown-item").click(function(){
        var selText = $(this).text();
        $(this).parents('.dropdown').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
        $(this).parents('.dropdown').find('.input-hidden').val(selText);
      });
    </script>
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?158"></script>
    <script>
        (function(d, w, c) {
            w.ChatraID = 'DKqt52HCcPkgvRoRS';
            var s = d.createElement('script');
            w[c] = w[c] || function() {
                (w[c].q = w[c].q || []).push(arguments);
            };
            s.async = true;
            s.src = 'https://call.chatra.io/chatra.js';
            if (d.head) d.head.appendChild(s);
        })(document, window, 'Chatra');
    </script>
</body>

</html>
