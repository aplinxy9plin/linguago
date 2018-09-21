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
                                Welcome to Mylingua — an online platform for booking quality language courses and accommodation worldwide.
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
                            </p><h4>About Mylingua</h4>
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
                                    <label for="languages" class="control-label"></label>
                                    <input name="languages" type="hidden" id="lang_hidden" class="form-control" data-val="true" data-val-required="">
                                </div>
                                <div class="form-group">
                                    <label for="personPosition" class="control-label">Your position in school</label><br>
                                    <select class="form-control" name="personPosition">
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
                                    <select class="form-control" name="country">
                                      <option value="United States">United States</option>
                                    	<option value="United Kingdom">United Kingdom</option>
                                    	<option value="Afghanistan">Afghanistan</option>
                                    	<option value="Albania">Albania</option>
                                    	<option value="Algeria">Algeria</option>
                                    	<option value="American Samoa">American Samoa</option>
                                    	<option value="Andorra">Andorra</option>
                                    	<option value="Angola">Angola</option>
                                    	<option value="Anguilla">Anguilla</option>
                                    	<option value="Antarctica">Antarctica</option>
                                    	<option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    	<option value="Argentina">Argentina</option>
                                    	<option value="Armenia">Armenia</option>
                                    	<option value="Aruba">Aruba</option>
                                    	<option value="Australia">Australia</option>
                                    	<option value="Austria">Austria</option>
                                    	<option value="Azerbaijan">Azerbaijan</option>
                                    	<option value="Bahamas">Bahamas</option>
                                    	<option value="Bahrain">Bahrain</option>
                                    	<option value="Bangladesh">Bangladesh</option>
                                    	<option value="Barbados">Barbados</option>
                                    	<option value="Belarus">Belarus</option>
                                    	<option value="Belgium">Belgium</option>
                                    	<option value="Belize">Belize</option>
                                    	<option value="Benin">Benin</option>
                                    	<option value="Bermuda">Bermuda</option>
                                    	<option value="Bhutan">Bhutan</option>
                                    	<option value="Bolivia">Bolivia</option>
                                    	<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    	<option value="Botswana">Botswana</option>
                                    	<option value="Bouvet Island">Bouvet Island</option>
                                    	<option value="Brazil">Brazil</option>
                                    	<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    	<option value="Brunei Darussalam">Brunei Darussalam</option>
                                    	<option value="Bulgaria">Bulgaria</option>
                                    	<option value="Burkina Faso">Burkina Faso</option>
                                    	<option value="Burundi">Burundi</option>
                                    	<option value="Cambodia">Cambodia</option>
                                    	<option value="Cameroon">Cameroon</option>
                                    	<option value="Canada">Canada</option>
                                    	<option value="Cape Verde">Cape Verde</option>
                                    	<option value="Cayman Islands">Cayman Islands</option>
                                    	<option value="Central African Republic">Central African Republic</option>
                                    	<option value="Chad">Chad</option>
                                    	<option value="Chile">Chile</option>
                                    	<option value="China">China</option>
                                    	<option value="Christmas Island">Christmas Island</option>
                                    	<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    	<option value="Colombia">Colombia</option>
                                    	<option value="Comoros">Comoros</option>
                                    	<option value="Congo">Congo</option>
                                    	<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                    	<option value="Cook Islands">Cook Islands</option>
                                    	<option value="Costa Rica">Costa Rica</option>
                                    	<option value="Cote D'ivoire">Cote D'ivoire</option>
                                    	<option value="Croatia">Croatia</option>
                                    	<option value="Cuba">Cuba</option>
                                    	<option value="Cyprus">Cyprus</option>
                                    	<option value="Czech Republic">Czech Republic</option>
                                    	<option value="Denmark">Denmark</option>
                                    	<option value="Djibouti">Djibouti</option>
                                    	<option value="Dominica">Dominica</option>
                                    	<option value="Dominican Republic">Dominican Republic</option>
                                    	<option value="Ecuador">Ecuador</option>
                                    	<option value="Egypt">Egypt</option>
                                    	<option value="El Salvador">El Salvador</option>
                                    	<option value="Equatorial Guinea">Equatorial Guinea</option>
                                    	<option value="Eritrea">Eritrea</option>
                                    	<option value="Estonia">Estonia</option>
                                    	<option value="Ethiopia">Ethiopia</option>
                                    	<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    	<option value="Faroe Islands">Faroe Islands</option>
                                    	<option value="Fiji">Fiji</option>
                                    	<option value="Finland">Finland</option>
                                    	<option value="France">France</option>
                                    	<option value="French Guiana">French Guiana</option>
                                    	<option value="French Polynesia">French Polynesia</option>
                                    	<option value="French Southern Territories">French Southern Territories</option>
                                    	<option value="Gabon">Gabon</option>
                                    	<option value="Gambia">Gambia</option>
                                    	<option value="Georgia">Georgia</option>
                                    	<option value="Germany">Germany</option>
                                    	<option value="Ghana">Ghana</option>
                                    	<option value="Gibraltar">Gibraltar</option>
                                    	<option value="Greece">Greece</option>
                                    	<option value="Greenland">Greenland</option>
                                    	<option value="Grenada">Grenada</option>
                                    	<option value="Guadeloupe">Guadeloupe</option>
                                    	<option value="Guam">Guam</option>
                                    	<option value="Guatemala">Guatemala</option>
                                    	<option value="Guinea">Guinea</option>
                                    	<option value="Guinea-bissau">Guinea-bissau</option>
                                    	<option value="Guyana">Guyana</option>
                                    	<option value="Haiti">Haiti</option>
                                    	<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                    	<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    	<option value="Honduras">Honduras</option>
                                    	<option value="Hong Kong">Hong Kong</option>
                                    	<option value="Hungary">Hungary</option>
                                    	<option value="Iceland">Iceland</option>
                                    	<option value="India">India</option>
                                    	<option value="Indonesia">Indonesia</option>
                                    	<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    	<option value="Iraq">Iraq</option>
                                    	<option value="Ireland">Ireland</option>
                                    	<option value="Israel">Israel</option>
                                    	<option value="Italy">Italy</option>
                                    	<option value="Jamaica">Jamaica</option>
                                    	<option value="Japan">Japan</option>
                                    	<option value="Jordan">Jordan</option>
                                    	<option value="Kazakhstan">Kazakhstan</option>
                                    	<option value="Kenya">Kenya</option>
                                    	<option value="Kiribati">Kiribati</option>
                                    	<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                    	<option value="Korea, Republic of">Korea, Republic of</option>
                                    	<option value="Kuwait">Kuwait</option>
                                    	<option value="Kyrgyzstan">Kyrgyzstan</option>
                                    	<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                    	<option value="Latvia">Latvia</option>
                                    	<option value="Lebanon">Lebanon</option>
                                    	<option value="Lesotho">Lesotho</option>
                                    	<option value="Liberia">Liberia</option>
                                    	<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    	<option value="Liechtenstein">Liechtenstein</option>
                                    	<option value="Lithuania">Lithuania</option>
                                    	<option value="Luxembourg">Luxembourg</option>
                                    	<option value="Macao">Macao</option>
                                    	<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                    	<option value="Madagascar">Madagascar</option>
                                    	<option value="Malawi">Malawi</option>
                                    	<option value="Malaysia">Malaysia</option>
                                    	<option value="Maldives">Maldives</option>
                                    	<option value="Mali">Mali</option>
                                    	<option value="Malta">Malta</option>
                                    	<option value="Marshall Islands">Marshall Islands</option>
                                    	<option value="Martinique">Martinique</option>
                                    	<option value="Mauritania">Mauritania</option>
                                    	<option value="Mauritius">Mauritius</option>
                                    	<option value="Mayotte">Mayotte</option>
                                    	<option value="Mexico">Mexico</option>
                                    	<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                    	<option value="Moldova, Republic of">Moldova, Republic of</option>
                                    	<option value="Monaco">Monaco</option>
                                    	<option value="Mongolia">Mongolia</option>
                                    	<option value="Montserrat">Montserrat</option>
                                    	<option value="Morocco">Morocco</option>
                                    	<option value="Mozambique">Mozambique</option>
                                    	<option value="Myanmar">Myanmar</option>
                                    	<option value="Namibia">Namibia</option>
                                    	<option value="Nauru">Nauru</option>
                                    	<option value="Nepal">Nepal</option>
                                    	<option value="Netherlands">Netherlands</option>
                                    	<option value="Netherlands Antilles">Netherlands Antilles</option>
                                    	<option value="New Caledonia">New Caledonia</option>
                                    	<option value="New Zealand">New Zealand</option>
                                    	<option value="Nicaragua">Nicaragua</option>
                                    	<option value="Niger">Niger</option>
                                    	<option value="Nigeria">Nigeria</option>
                                    	<option value="Niue">Niue</option>
                                    	<option value="Norfolk Island">Norfolk Island</option>
                                    	<option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    	<option value="Norway">Norway</option>
                                    	<option value="Oman">Oman</option>
                                    	<option value="Pakistan">Pakistan</option>
                                    	<option value="Palau">Palau</option>
                                    	<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                    	<option value="Panama">Panama</option>
                                    	<option value="Papua New Guinea">Papua New Guinea</option>
                                    	<option value="Paraguay">Paraguay</option>
                                    	<option value="Peru">Peru</option>
                                    	<option value="Philippines">Philippines</option>
                                    	<option value="Pitcairn">Pitcairn</option>
                                    	<option value="Poland">Poland</option>
                                    	<option value="Portugal">Portugal</option>
                                    	<option value="Puerto Rico">Puerto Rico</option>
                                    	<option value="Qatar">Qatar</option>
                                    	<option value="Reunion">Reunion</option>
                                    	<option value="Romania">Romania</option>
                                    	<option value="Russian Federation">Russian Federation</option>
                                    	<option value="Rwanda">Rwanda</option>
                                    	<option value="Saint Helena">Saint Helena</option>
                                    	<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    	<option value="Saint Lucia">Saint Lucia</option>
                                    	<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    	<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                    	<option value="Samoa">Samoa</option>
                                    	<option value="San Marino">San Marino</option>
                                    	<option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    	<option value="Saudi Arabia">Saudi Arabia</option>
                                    	<option value="Senegal">Senegal</option>
                                    	<option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                    	<option value="Seychelles">Seychelles</option>
                                    	<option value="Sierra Leone">Sierra Leone</option>
                                    	<option value="Singapore">Singapore</option>
                                    	<option value="Slovakia">Slovakia</option>
                                    	<option value="Slovenia">Slovenia</option>
                                    	<option value="Solomon Islands">Solomon Islands</option>
                                    	<option value="Somalia">Somalia</option>
                                    	<option value="South Africa">South Africa</option>
                                    	<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                    	<option value="Spain">Spain</option>
                                    	<option value="Sri Lanka">Sri Lanka</option>
                                    	<option value="Sudan">Sudan</option>
                                    	<option value="Suriname">Suriname</option>
                                    	<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    	<option value="Swaziland">Swaziland</option>
                                    	<option value="Sweden">Sweden</option>
                                    	<option value="Switzerland">Switzerland</option>
                                    	<option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    	<option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                    	<option value="Tajikistan">Tajikistan</option>
                                    	<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    	<option value="Thailand">Thailand</option>
                                    	<option value="Timor-leste">Timor-leste</option>
                                    	<option value="Togo">Togo</option>
                                    	<option value="Tokelau">Tokelau</option>
                                    	<option value="Tonga">Tonga</option>
                                    	<option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    	<option value="Tunisia">Tunisia</option>
                                    	<option value="Turkey">Turkey</option>
                                    	<option value="Turkmenistan">Turkmenistan</option>
                                    	<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    	<option value="Tuvalu">Tuvalu</option>
                                    	<option value="Uganda">Uganda</option>
                                    	<option value="Ukraine">Ukraine</option>
                                    	<option value="United Arab Emirates">United Arab Emirates</option>
                                    	<option value="United Kingdom">United Kingdom</option>
                                    	<option value="United States">United States</option>
                                    	<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    	<option value="Uruguay">Uruguay</option>
                                    	<option value="Uzbekistan">Uzbekistan</option>
                                    	<option value="Vanuatu">Vanuatu</option>
                                    	<option value="Venezuela">Venezuela</option>
                                    	<option value="Viet Nam">Viet Nam</option>
                                    	<option value="Virgin Islands, British">Virgin Islands, British</option>
                                    	<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    	<option value="Wallis and Futuna">Wallis and Futuna</option>
                                    	<option value="Western Sahara">Western Sahara</option>
                                    	<option value="Yemen">Yemen</option>
                                    	<option value="Zambia">Zambia</option>
                                    	<option value="Zimbabwe">Zimbabwe</option>
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
                                        <input onchange="add_lang('Russian', 1)" name="russian_lang" class="form-check-input lang_b" type="checkbox" id="lang_1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Russian</label>
                                      </div><br>
                                      <div class="form-check form-check-inline">
                                        <input onchange="add_lang('English', 2)" name="english_lang" class="form-check-input lang_b" type="checkbox" id="lang_2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">English</label>
                                      </div><br>
                                      <div class="form-check form-check-inline">
                                        <input onchange="add_lang('Spanish', 3)" name="spanish_lang" class="form-check-input lang_b" type="checkbox" id="lang_3" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Spanish</label>
                                      </div><br>
                                      <div class="form-check form-check-inline">
                                        <input onchange="add_lang('Deutch', 4)" name="deutch_lang" class="form-check-input lang_b" type="checkbox" id="lang_4" value="option2">
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
          $values = "'".$_POST['schoolName']."', '".$type_school."', '".$_POST['country']."', '".$_POST['languages']."', '".$_POST['contactPhone']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['personName']."', '".$_POST['personPosition']."', 'Ожидание', '".$_POST['city']."'";
          $sql = "INSERT INTO `new_school` ( `name`, `type_school`, `country`, `language`, `phone`, `email`, `password`, `person_name`, `position`, `status`, `city`) VALUES (".$values.")";
          $result = $mysqli->query($sql);
          echo "<script>alert('Спассибо за регистрацию. Дальнейшие инструкции на почте.');window.location.href = 'index.php';</script>";
        }
      }
    ?>
    <script>
      var languages = [];
      function add_lang(lang, id){
        // alert(123)
        if(document.getElementById('lang_'+id).checked){
          // alert(languages)
          if(languages[0] !== undefined){
            var ch = true;
            for (var i = 0; i < languages.length; i++) {
              if(languages[i] == lang){
                ch = false
              }
            }
            if(ch){
              languages.push(lang)
            }
          }else{
            languages.push(lang)
            // alert(languages)
          }
        }else{
          // document.getElementById('lang_'+id).splice(2, 1)
          for (var i = 0; i < languages.length; i++) {
            if(lang == languages[i]){
              languages.splice(i, 1)
            }
          }
        }
        console.log(languages);
      }
      function termsCheckbox(){
        if(document.getElementById('terms').checked){
          document.getElementById('ok').disabled = false
        }else{
          document.getElementById('ok').disabled = true
        }
      }
      function sendReg(){
        var check = true;
        var counter = 1;
        for (var i = 1; i < 5; i++) {
          if(document.getElementById('lang_'+i).checked == false){
            counter += 1
          }
        }
        if(counter !== 4){
          var lang_string = languages.join(',')
          console.log(lang_string);
          document.getElementById('lang_hidden').value = lang_string
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
              // document.getElementById('regForm').submit();
            }else{
              alert("Choose school's type")
            }
          }
        }else{
          alert('Choose just one, or more language for teaching')
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
