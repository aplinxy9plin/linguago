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
    <title>LINGUAGO</title>
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
                        <a class="navbar-brand" href="index.php">LINGUAGO</a>
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
    <!--============================= DETAIL =============================-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 responsive-wrap">
                  <div class="offer-box" style="margin-top: 2em;">
                    <div class="row">
                        <div class="col-sm-7" style="border-right: 1px solid #ddd; padding-right: 3em; padding-top: 1em;">
                            <h2>Dear partner,</h2>
                            <p>
                                Welcome to LINGUAGO — an online platform for booking quality language courses and accommodation worldwide.
                                Please fill in the form below. Our administrators will contact you shortly afterwards.
                            </p>
                            <p>
                                Note that you should submit the form only once.
                                You will be able to add more schools or school locations later.
                                Just fill the form with the details of one of them for now.
                            </p>
                            <div class="highlight" style="text-align: center; padding: 1em; font-weight: bold;">
                                <a href="/ru/promote_school/youtube/">See how you can grow with LinguaTrip</a>
                            </div>
                            <p>
                            </p><h4>About LINGUAGO</h4>
                                <ul>
                                    <li>team with 15+ years experience in language travel</li>
                                    <li>500 Startups portfolio company (top Silicon Valley accelerator)</li>
                                    <li>investors and advisors from Google, AirBnb, Twitter, top Chinese agencies</li>
                                    <li>100,000+ students use LinguaTrip monthly to search for language courses abroad</li>
                                </ul>
                            <p></p>
                        </div>
                        <div class="col-sm-5">
                            <form style="padding-left: 2em;" id="regForm" method="POST" action="#">
                                <div class="form-group">
                                    <label for="email" class="control-label">Email</label>
                                    <input name="email" type="text" class="form-control" data-val="true" data-val-required="">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label">Password</label>
                                    <input name="password" type="password" class="form-control" data-val="true" data-val-required="">
                                </div>
                                <div class="form-group">
                                    <label for="schoolName" class="control-label">School name</label>
                                    <input name="schoolName" type="text" class="form-control" data-val="true" data-val-required="">
                                </div>
                                <div class="form-group">
                                    <label for="schoolWebsite" class="control-label">Type School</label>
                                    <div class="checkbox">
                                        <label for="checkbox1" class="form-check-label ">
                                          <input onchange="typeChange('online')" type="checkbox" id="online" name="online" value="option2" class="form-check-input"> Online
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox1" class="form-check-label ">
                                          <input onchange="typeChange('offline')" type="checkbox" id="offline" name="offline" value="option2" class="form-check-input"> Offline
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="personName" class="control-label">Your name</label>
                                    <input name="personName" type="text" class="form-control" data-val="true" data-val-required="">
                                </div>
                                <div class="form-group">
                                    <label for="personPosition" class="control-label">Your position in school</label><br>
                                    <select class="form-control" id="sel1">
                                      <option>Owner</option>
                                      <option>Administrator</option>
                                      <option>Teacher</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="contactPhone" class="control-label">School's phone</label><br>
                                    <input name="contactPhone" type="text" class="form-control telephone" data-val="true" data-val-required="">
                                </div>
                                <div class="form-group">
                                    <label for="contactPhone" class="control-label">Country</label>
                                    <select class="form-control" id="sel1">
                                      <option>Russia</option>
                                      <option>USA</option>
                                      <option>Spain</option>
                                      <option>UK</option>
                                      <option>Germany</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="city" class="control-label">City</label><br>
                                    <input name="city" type="text" class="form-control" data-val="true" data-val-required="">
                                </div>
                                <div class="form-group">
                                    <label for="contactPhone" class="control-label">Language</label><br>
                                    <!-- <select class="form-control" id="sel1">
                                      <option>Russian</option>
                                      <option>English</option>
                                      <option>Spanish</option>
                                      <option>Deutch</option>
                                    </select> -->
                                    <div style="margin-left: 25px">
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Russian</label>
                                      </div><br>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">English</label>
                                      </div><br>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Spanish</label>
                                      </div><br>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Deutch</label>
                                      </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox" style="margin-left: 20px;">
                                        <input onchange="termsCheckbox()" type="checkbox" id="terms">
                                        I have read and agree to the <a href="terms/" target="_blank">Terms &amp; Conditions.</a>
                                    </label>
                                </div>
                                <input type="hidden" id="online_input" value=""><input type="hidden" id="offline_input" value="">
                                <div class="form-group text-center">
                                    <button type="button" onclick="sendReg()" disabled class="btn btn-success bold" style="width: 100%; color: #f8f8f8" id="ok">Register school</button>
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <br>
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
                        <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">О нас</a></li>
                        <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Контакты</a></li>
                        <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Наши приемущества</a></li>
                        <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Условия использования сайта</a></li>
                        <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Обработка пресональных данных</a></li>
                        <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Вакансии</a></li>
                        <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Партнерская программа</a></li>
                        <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Карта сайта</a></li>
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
    <!--//END FOOTER -->
    <?php
      include('bd.php');
      if(isset($_POST['email'])){
        $name = $_POST['schoolName'];
        $result = $mysqli->query("SELECT * FROM schools");
        $array = [];
        $x = false;
        if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            if($name == $row['name']){
              $x = true;
            }
            array_push($array, $row);
          }
        }
        if($x){
          echo "<script>alert('Такая школа уже существует!')</script>";
        }else{
          // success
          $type_school = "";
          if(isset($_POST['online'])){
            $type_school .= "online";
            if(isset($_POST['offline'])){
              $type_school .= ",offline";
            }
          }else{
            $type_school .= "offline";
          }
          $values = "'".$_POST['schoolName']."', '".$type_school."', '".$_POST['country']."', '".$_POST['language']."', '".$_POST['contactPhone']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['personName']."', '".$_POST['personPosition']."', 'Ожидание'";
          $sql = "INSERT INTO `new_school` ( `name`, `type_school`, `country`, `language`, `phone`, `email`, `password`, `person_name`, `position`, `status`) VALUES (".$values.")";
          $result = $mysqli->query($sql);
          echo "<script>alert('success');window.location.href = 'index.php';</script>";
        }
      }
    ?>
    <script>
      function termsCheckbox(){
        if(document.getElementById('terms').checked){
          document.getElementById('ok').disabled = false
        }else{
          document.getElementById('ok').disabled = true
        }
      }
      function sendReg(){
        var countFields = document.getElementsByClassName('form-control').length
        var x = false
        for (var i = 0; i < countFields; i++) {
          if(document.getElementsByClassName('form-control')[i].value == ''){
            alert('You have a empty field');
            x = true
            break;
          }
        }
        if(!x){
          if(document.getElementById('online').checked == true || document.getElementById('offline').checked == true){
            document.getElementById('regForm').submit();
          }else{
            alert("Choose school's type")
          }
        }
      }
    </script>
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
