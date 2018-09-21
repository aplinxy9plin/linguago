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
    <link rel="stylesheet" href="css/style.css">
</head>

<body onload="load_mark(); leng = document.getElementById('country').length; changeContryOnLoad()">
    <!--============================= DETAIL =============================-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 responsive-wrap">
                    <div class="row detail-checkbox-wrap">
                        <div class="col-sm-12">
                          <div >
                            <h5 style="font-size: 1.1em" id="js_lang">Язык</h5>
                            <select name="language" id="language" class="btn-group1" onchange="selectChange('language')" style="width: 150px; height: 40px; box-shadow: none">
                              <option id="js_ru">Английский</option>
                              <option id="js_de">Немецкий</option>
                              <option id="js_sp">Испанский</option>
                            </select>
                          </div><br>
                          <div>
                            <h5 style="font-size: 1.1em" id="js_country">Страна</h5>
                            <select name="country" id="country" class="btn-group1" onchange="selectChange('country')" style="width: 150px; height: 40px;">
                              <option id="js_usa">США (5)</option>
                              <option id="js_eng">Англия (2)</option>
                            </select>
                          </div><br>
                          <!-- <input id="datepicker" width="276" /> -->
                          <div  >
                            <h5 style="font-size: 1.1em" id="js_city">Город</h5>
                            <select name="city" id="city" class="btn-group1" style="width: 150px; height: 40px;">
                              <option>All</option>
                              <option>Немецкий</option>
                              <option>Испанский</option>
                            </select>
                          </div>
                          <div  >
                            <h5 style="font-size: 1.1em" id="js_sort">Сортировать</h5>
                            <select onchange="getPrice()" name="sort" id="sort_b" class="btn-group1" style="width: 150px; height: 40px;">
                              <option>По оценке</option>
                              <option>Сначала дешевые</option>
                              <option>Сначала дорогие</option>
                            </select>
                          </div>
                        </div>
                        <div  class="col-sm-12">
                          <div class="form-inline" style="margin-top:0.5em; ">
                            <h5 style="font-size: 1.1em" id="js_cont">Длительность</h5>
                            <input type="number" class="form-control valid" min="1" value="2" name="Weeks" style="width:4em" data-val="true" data-val-required="">
                             <p id="js_weeks">недели</p>
                           </div>
                          <!-- <div  >
                            <h5 style="font-size: 1.1em">Длительность</h5>
                            <select name="continue" id="country" class="btn-group1" style="width: 150px; height: 40px;">
                              <option>2 недели</option>
                              <option>3 недели</option>
                            </select>
                          </div> -->
                        <!-- <?php
                        $sort = "all";
                        if(isset($_GET['sort'])){
                          $sort = $_GET['sort'];
                          if($sort == 'offline'){
                            echo `echo '
                              <div style=" padding-left: 20px" >
                                <h5 style="font-size: 1.1em" id="js_date">Дата начала курса</h5>
                                <select name="date_start" id="language" class="btn-group1" style="width: 150px; height: 40px;">
                                  <option>1.09.2018</option>
                                  <option>8.09.2018</option>
                                  <option>16.09.2018</option>
                                </select>
                              </div>
                              <div style=" padding-left: 20px;" >
                                <h5 style="font-size: 1.1em" id="js_living">Проживание</h5>
                                <select name="living" id="city" class="btn-group1" style="width: 150px; height: 40px;">
                                  <option id="js_living1">Принимающая семья</option>
                                  <option id="js_living2">Резиденция</option>
                                  <option id="js_living3">Апартаменты</option>
                                  <option id="js_living4">Студенческая квартира</option>
                                  <option id="js_living5">Без проживания</option>
                                </select>
                              </div>
                              <div style=" padding-left: 20px;" >
                                <h5 style="font-size: 1.1em"></h5>
                                <button style="width: 180px; height: 40px; background-color: #F8F8F8" class="btn" onclick="more_search()" id="js_more_search">Расширенный поиск</button>
                              </div>
                            </div>';`;
                          }else{
                            echo '<div style=" padding-left: 20px"><h5 style="font-size: 1.1em">Тип курса</h5>
                            <select name="continue" id="cources" class="btn-group1" style="width: 150px; height: 40px;">
                              <option>Детский</option>
                              <option>3 недели</option>
                            </select></div>';
                          }
                        }else{
                          $sort = 'all';
                          echo `echo '
                            <div style=" padding-left: 20px" >
                              <h5 style="font-size: 1.1em" id="js_date">Дата начала курса</h5>
                              <select name="date_start" id="language" class="btn-group1" style="width: 150px; height: 40px;">
                                <option>1.09.2018</option>
                                <option>8.09.2018</option>
                                <option>16.09.2018</option>
                              </select>
                            </div>
                            <div style=" padding-left: 20px;" >
                              <h5 style="font-size: 1.1em" id="js_living">Проживание</h5>
                              <select name="living" id="city" class="btn-group1" style="width: 150px; height: 40px;">
                                <option id="js_living1">Принимающая семья</option>
                                <option id="js_living2">Резиденция</option>
                                <option id="js_living3">Апартаменты</option>
                                <option id="js_living4">Студенческая квартира</option>
                                <option id="js_living5">Без проживания</option>
                              </select>
                            </div>
                            <div style=" padding-left: 20px;" >
                              <h5 style="font-size: 1.1em"></h5>
                              <button style="width: 180px; height: 40px; background-color: #F8F8F8" class="btn" onclick="more_search()">Расширенный поиск</button>
                            </div>
                          </div>';`;
                        }
                        ?> -->
                        <div style="display: none; margin-top: 20px;" id="more_search">
                          <div>
                            <div style=" padding-left: 20px;" >
                              <h5 style="font-size: 1.1em">Тип курса</h5>
                              <select name="continue" id="cources" class="btn-group1" style="width: 150px; height: 40px;">
                                <option>Детский</option>
                                <option>3 недели</option>
                              </select>
                            </div>
                            <div style=" padding-left: 20px;" >
                              <h5 style="font-size: 1.1em">Кол-во часов в неделю</h5>
                              <select name="continue" id="hours" class="btn-group1" style="width: 150px; height: 40px;">
                                <option>Менее 15 часов</option>
                                <option>15-20 часов</option>
                                <option>20-25 часов</option>
                                <option>Более 25 часов</option>
                              </select>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="light-bg detail-options-wrap" style="width: 100%">
                      <?php
                        include('bd.php');
                        $result = $mysqli->query("SELECT * FROM schools");
                        $array = [];
                        $x = 0;
                        if(isset($_GET['sort'])){
                          $sort = $_GET['sort'];
                        }else{
                          $sort = 'all';
                        }
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $tmp = explode(",", $row['type_school']);
                                switch ($sort) {
                                  case 'online':
                                    if($tmp[0] == 'online'){
                                      array_push($array, $row);
                                    }
                                    break;
                                  case 'offline':
                                    if($tmp[0] == 'offline' || $tmp[1] == 'offline'){
                                      array_push($array, $row);
                                    }
                                    break;
                                  default:
                                    array_push($array, $row);
                                    break;
                                }
                            }
                        } else {
                            echo "0 results";
                        }
                        if(empty($_GET['language'])){
                          $js_array = '[';
                          $count = 0;
                          foreach ($array as $key) {
                            if($count < 4){
                              $js_array .= '"'.$key["address"].'",';
                            }
                            $count++;
                            $image = explode(",", $key["image"]);
                            echo '<div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                                <div class="featured-place-wrap">
                                    <a href="detail.php?name='.$key["name"].'&id='.$key["id"].'">
                                        <img src="'.$image[0].'" alt="#">
                                        <span class="featured-rating-green ">'.$key["reviews"].'</span>
                                        <div class="featured-title-box">
                                            <h6>'.$key["name"].'</h6>
                                            <p>'.$key["country"].' </p> <span>• </span>
                                            <p>3 Reviews</p>
                                            <ul>
                                                <li><span class="icon-location-pin"></span>
                                                    <p>'.$key["address"].'</p>
                                                </li>
                                                <li><span class="icon-screen-smartphone"></span>
                                                    <p>'.$key["phone"].'</p>
                                                </li>
                                                <li>
                                                  <h4><span>$</span>'.$key["price"].' рублей</h4>
                                                </li>

                                            </ul>
                                            <div class="bottom-icons">
                                                <div class="closed-now">ВЫБРАТЬ</div>
                                                <span class="ti-heart"></span>
                                                <span class="ti-bookmark"></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>';
                          }
                          $js_array = substr($js_array, 0, -1);

                          $js_array .= ']';
                          echo "<script>function myMap(array, country) {
                              var maplat = $('#map').data('lat');
                              var maplon = $('#map').data('lon');
                              var mapzoom = $('#map').data('zoom');
                              // Styles a map in night mode.
                              var map = new google.maps.Map(document.getElementById('map'), {
                                  center: {lat: -34.397, lng: 150.644},
                                  zoom: 2,
                                  scrollwheel: false
                              });
                              var geocoder = new google.maps.Geocoder();
                              if(country !== undefined){
                                //alert(country)
                                // Set Center by country
                                geocoder.geocode({'address': country}, function(results, status) {
                                  if (status === 'OK') {
                                    map.setCenter(results[0].geometry.location);
                                  }else{
                                    alert('Geocode was not successful for the following reason: ' + status);
                                  }
                                });
                              }
                              for (var i = 0; i < array.length; i++) {
                                var address = array[i];
                                geocoder.geocode({'address': address}, function(results, status) {
                                  if (status === 'OK') {
                                    //map.setCenter(results[0].geometry.location);
                                    var marker = new google.maps.Marker({
                                      map: map,
                                      position: results[0].geometry.location
                                    });
                                  }else{
                                    alert('Geocode was not successful for the following reason: ' + status);
                                  }
                                });
                              }
                          }
                          function load_mark(){
                            myMap(".$js_array.", 'Russia');
                          }
                          </script>";
                        }else{
                          $language = $_GET['language'];
                          $country = $surname = preg_replace("/[^А-Яа-яЁё]/u","", $_GET['country']);
                          $lat_array = '[';
                          $lng_array = '[';
                          $js_array = '[';
                          foreach ($array as $key) {
                            //echo $key['country'];
                            if($key["language"] == $language && $key["country"] == $country){
                              //echo "string";
                              //672х414
                              $js_array .= '"'.$key["address"].'",';
                              $image = explode(",", $key["image"]);
                              echo '<div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                                  <div class="featured-place-wrap">
                                      <a href="detail.php?name='.$key["name"].'&id='.$key["id"].'">
                                          <img src="'.$image[0].'" alt="#">
                                          <span class="featured-rating-green ">'.$key["reviews"].'</span>
                                          <div class="featured-title-box">
                                              <h6>'.$key["name"].'</h6>
                                              <p>'.$key["country"].' </p> <span>• </span>
                                              <p>3 Reviews</p>
                                              <ul>
                                                  <li><span class="icon-location-pin"></span>
                                                      <p>'.$key["address"].'</p>
                                                  </li>
                                                  <li><span class="icon-screen-smartphone"></span>
                                                      <p>'.$key["phone"].'</p>
                                                  </li>
                                                  <li>
                                                    <h4><span>$</span>'.$key["price"].' рублей</h4>
                                                  </li>

                                              </ul>
                                              <div class="bottom-icons">
                                                  <div class="closed-now">ВЫБРАТЬ</div>
                                                  <span class="ti-heart"></span>
                                                  <span class="ti-bookmark"></span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                              </div>';
                            }
                          }
                          $js_array = substr($js_array, 0, -1);
                          $js_array .= ']';
                          //echo $js_array;
                          echo "<script>function myMap(array, country) {
                              var maplat = $('#map').data('lat');
                              var maplon = $('#map').data('lon');
                              var mapzoom = $('#map').data('zoom');
                              // Styles a map in night mode.
                              var map = new google.maps.Map(document.getElementById('map'), {
                                  center: {lat: -34.397, lng: 150.644},
                                  zoom: 4,
                                  scrollwheel: false
                              });
                              var geocoder = new google.maps.Geocoder();
                              if(country !== undefined){
                                //alert(country)
                                // Set Center by country
                                geocoder.geocode({'address': country}, function(results, status) {
                                  if (status === 'OK') {
                                    map.setCenter(results[0].geometry.location);
                                  }else{
                                    alert('Geocode was not successful for the following reason: ' + status);
                                  }
                                });
                              }
                              for (var i = 0; i < array.length; i++) {
                                var address = array[i];
                                geocoder.geocode({'address': address}, function(results, status) {
                                  if (status === 'OK') {
                                    //map.setCenter(results[0].geometry.location);
                                    var marker = new google.maps.Marker({
                                      map: map,
                                      position: results[0].geometry.location
                                    });
                                  }else{
                                    alert('Geocode was not successful for the following reason: ' + status);
                                  }
                                });
                              }
                          }
                          function load_mark(){
                            myMap(".$js_array.", '".$country."');
                          }
                          </script>";
                          //$string = str_replace(' ', '+', $string);
                          //file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=%D0%A1%D0%B0%D0%BD%D0%BA%D1%82-%D0%BF%D0%B5%D1%82%D0%B5%D1%80%D0%B1%D1%83%D1%80%D0%B3?api_key=AIzaSyC1r-q9h62dDi84nMG3s0-C6MRG7u495E8')
                          /*$address = 'Chennai, India';
                          $url = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=".urlencode($address)."&sensor=false");
                          $response = json_decode($url);
                            
                          if ($response->status == 'OK') {
                              $latitude = $response->results[0]->geometry->location->lat;
                              $longitude = $response->results[0]->geometry->location->lng;
                              echo 'Latitude: ' . $latitude;
                              echo '<br />';
                              echo 'Longitude: ' . $longitude;
                          } else {
                              echo $response->status;
                        }*/
                          //echo "";
                          //var_dump($array[13]);
                        }
                      ?>
                    </div>
                </div>
                <div class="col-md-5 responsive-wrap map-wrap">
                    <div class="map-fix">
                        <!-- data-toggle="affix" -->
                        <!-- Google map will appear here! Edit the Latitude, Longitude and Zoom Level below using data-attr-*  -->
                        <div id="map" data-lat="40.674" data-lon="-73.945" data-zoom="14"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="#" id="changePage"></a>
    <!--//END DETAIL -->




    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <script>
      <?php
        echo "var sort = '" . $sort . "';\n";
      ?>
      var prices = [];
      var c = document.getElementsByClassName("featured-place-wrap").length
      function getPrice(){
        prices = [];
        for(var i = 0; i < document.getElementsByClassName("featured-place-wrap").length; i++){
            prices.push(parseInt(document.getElementsByClassName("featured-place-wrap")[i].children[0].innerText.split('$').pop().split(' рублей').shift()))
        }
        prices = prices.sort((a, b) => a - b);
        changeSort()
      }
      function chromeOuterHTML(oldElem, outerhtml){
        var el = document.createElement('div');
        el.innerHTML = outerhtml;
        var parentNode = oldElem.parentNode;
        var range = document.createRange();
                range.selectNodeContents(el);
                var documentFragment = range.extractContents();
                    setTimeout(function () {
                        parentNode.insertBefore(documentFragment, oldElem);
                        parentNode.removeChild(oldElem);
            }, 1);
      }
      function compareNumbers(a, b) {
        return a - b;
      }
      function changeSort(){
        if(document.getElementById('sort_b').value == 'Сначала дешевые'){
          var c = document.getElementsByClassName("featured-place-wrap").length;
          for(var i = 0; i < c; i++){
            for (var j = 0; j < c; j++) {
              if($('.featured-place-wrap')[i].children[0].innerText.split('$').pop().split(' рублей').shift() == prices[j]){
                console.log('yolo yolo');
                chromeOuterHTML($('.featured-place-wrap')[j], $('.featured-place-wrap')[i].outerHTML)
              }
            }
          }
        }else if (document.getElementById('sort_b').value == 'Сначала дорогие') {
          var p = []
          for (var i = 0; i < prices.length; i++) {
            p.push(prices[prices.length-1-i]);
          }
          prices = p
          var c = document.getElementsByClassName("featured-place-wrap").length;
          for(var i = 0; i < c; i++){
            for (var j = 0; j < c; j++) {
              if($('.featured-place-wrap')[i].children[0].innerText.split('$').pop().split(' рублей').shift() == prices[j]){
                chromeOuterHTML($('.featured-place-wrap')[j], $('.featured-place-wrap')[i].outerHTML)
              }
            }
          }
        }else{
          // By marks
        }
      }
      function more_search(){
        if(document.getElementById('more_search').style.display == "none"){
          document.getElementById('more_search').style.display = "block"
        }else{
          document.getElementById('more_search').style.display = "none"
        }
      }
      //alert(sort)
      function selectChange(type){
        if(type == 'language'){
          var lang = document.getElementById('language').value
          switch (lang) {
            case 'Английский':
              $('#country')
                .find('option')
                .remove()
                .end()
                .append('<option>США (5)</option><option>Англия (2)</option>')
              ;
              var str = document.getElementById('country').value;
              var regexp = /[А-яа-я]/gi;
              var matches = str.match(regexp);
              document.getElementById('changePage').href = "ios_schools.php?language=Английский&country=" + matches.join('') + "&sort=" + sort;
              document.getElementById('changePage').click();
              break;
            case 'Немецкий':
              $('#country')
                .find('option')
                .remove()
                .end()
                .append('<option>Германия (3)</option>')
              ;
              var str = document.getElementById('country').value;
              var regexp = /[А-яа-я]/gi;
              var matches = str.match(regexp);
              document.getElementById('changePage').href = "ios_schools.php?language=Немецкий&country=" + matches.join('') + "&sort=" + sort;
              document.getElementById('changePage').click();
              break;
            case 'Испанский':
              $('#country')
                .find('option')
                .remove()
                .end()
                .append('<option>Испания (4)</option>')
              ;
              var str = document.getElementById('country').value;
              var regexp = /[А-яа-я]/gi;
              var matches = str.match(regexp);
              document.getElementById('changePage').href = "ios_schools.php?language=Испанский&country=" + matches.join('') + "&sort=" + sort;
              document.getElementById('changePage').click();
              break;
            default:

          }
        }else{
          var lang = document.getElementById('language').value
          document.getElementById('changePage').href = "ios_schools.php?language="+lang+"&country=" + document.getElementById('country').value + "&sort=" + sort;
          document.getElementById('changePage').click();
        }
      }
      function selectChangeOnLoad(lang){
        //var lang = document.getElementById('language').value
        switch (lang) {
          case 'Английский':
            $('#country')
              .find('option')
              .remove()
              .end()
              .append('<option id="js_usa">США (5)</option><option id="js_eng">Англия (2)</option>')
            ;
            break;
          case 'Немецкий':
            $('#country')
              .find('option')
              .remove()
              .end()
              .append('<option id="js_de_c">Германия (3)</option>')
            ;
            break;
          case 'Испанский':
            $('#country')
              .find('option')
              .remove()
              .end()
              .append('<option id="js_sp_c">Испания (4)</option>')
            ;
            break;
          default:

        }
      }
      function changeContry(){

      }
      var leng = '0';
      <?php
        if(isset($_GET['country'])){
          echo "var country = '".$_GET['country']."';\n";
        }else{
          echo "var country = '0';\n";
        }
      ?>
      function changeContryOnLoad(){
        if(country !== '0'){
          var regexp = /[А-яа-я]/gi;
          var matches = country.match(regexp);
          country = matches.join('')
          var ar = [];
          for (var i = 0; i < leng; i++) {
            ar.push(document.getElementById('country').options[i].value)
          }
          for (var i = 0; i < ar.length; i++) {
            var str = ar[i];
            var regexp = /[А-яа-я]/gi;
            var matches = str.match(regexp);
            var match = matches.join('')
            console.log(match);
            if(country == match){
              document.getElementById('country').value = ar[i]
            }
          }
        }
      }

      $.getJSON("localize/ru.json", function(data) {
          $('')
          // console.log(data);
      });

      <?php
        if(isset($language)){
          echo "selectChangeOnLoad('".$language."');\n";
          echo "document.getElementById('language').value = '".$language."';\n";
        }
      ?>
        $(".map-icon").click(function() {
            $(".map-fix").toggle();
        });
    </script>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    <script>
        // Want to customize colors? go to snazzymaps.com

    </script>
    <!-- Map JS (Please change the API key below. Read documentation for more info) -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?v=3.exp&callback=myMap&key=AIzaSyCy5byxzoigmevVSNOlQe0HSabmpxOsNOU&sensor=false"></script>
</body>

</html>
