<!DOCTYPE html>
<html lang="en">

<head>
  <title>assignment2</title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/news-04.css" />
  <link rel="stylesheet" href="../css/loginReg.css" />
</head>

<body>

  <?php
  include './header-pages.php';
  ?>

  <!-- body  -->
  <!-- content -->
  <!--------------------------------------------------------------------------------------------------------- hero -->
  <div class="bglr">
    <div class="regContent">
      <div class="herologo col-12">
        <img src="https://cdn.2kgames.com/web/civilization.com/images/civilization-6/civ6_logo_large.png" alt="30logo" class="d-inline-block position-relative m100" />
      </div>
    </div>
    <div class="regContent2">
      <div class="herologo col-12">
        <div class="textcon col-12 table">
          <div class="textconex1">JOIN THE NEWSLETTER</div>
          <!-- <div class="textconex2">Already have account?<a class="red" href="../pages/login.php"> Log in </a>to manage your newsletter
            subscriptions.
          </div> -->
          <div class="textconex2">
            Already have account?<a class="red" href="./login-register/login.php">
              Log in </a>to manage your newsletter subscriptions.
          </div>
        </div>
      </div>

      <!-- alex -->
      <div class="container d-flex justify-content-center">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="signup-form">
              <form action="" class="mt-3 mb-5 p-3 bg-transparent">
                <div class="row">
                  <div class="mb-3 col-md-12">
                    <input type="text" name="email" class="form-control" placeholder="Email Address" />
                  </div>
                  <div class="mb-3 mt-3 col-md-6">
                    <select name="dob-month" class="form-select" required="required">
                      <option value disabled selected class="option-placeholder">
                        Birth Month
                      </option>
                      <option value="1">January</option>
                      <option value="2">February</option>
                      <option value="3">March</option>
                      <option value="4">April</option>
                      <option value="5">May</option>
                      <option value="6">June</option>
                      <option value="7">July</option>
                      <option value="8">August</option>
                      <option value="9">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12">December</option>
                    </select>
                  </div>
                  <div class="mb-3 mt-3 col-md-6">
                    <select name="dob-year" class="form-select year-of-birth" required="required">
                      <option value disabled selected class="option-placeholder">
                        Birth Year
                      </option>
                      <option value="year-1940">1940</option>
                      <option value="year-1941">1941</option>
                      <option value="year-1942">1942</option>
                      <option value="year-1943">1943</option>
                      <option value="year-1944">1944</option>
                      <option value="year-1945">1945</option>
                      <option value="year-1946">1946</option>
                      <option value="year-1947">1947</option>
                      <option value="year-1948">1948</option>
                      <option value="year-1949">1949</option>
                      <option value="year-1950">1950</option>
                      <option value="year-1951">1951</option>
                      <option value="year-1952">1952</option>
                      <option value="year-1953">1953</option>
                      <option value="year-1954">1954</option>
                      <option value="year-1955">1955</option>
                      <option value="year-1956">1956</option>
                      <option value="year-1957">1957</option>
                      <option value="year-1958">1958</option>
                      <option value="year-1959">1959</option>
                      <option value="year-1960">1960</option>
                      <option value="year-1961">1961</option>
                      <option value="year-1962">1962</option>
                      <option value="year-1963">1963</option>
                      <option value="year-1964">1964</option>
                      <option value="year-1965">1965</option>
                      <option value="year-1966">1966</option>
                      <option value="year-1967">1967</option>
                      <option value="year-1968">1968</option>
                      <option value="year-1969">1969</option>
                      <option value="year-1970">1970</option>
                      <option value="year-1971">1971</option>
                      <option value="year-1972">1972</option>
                      <option value="year-1973">1973</option>
                      <option value="year-1974">1974</option>
                      <option value="year-1975">1975</option>
                      <option value="year-1976">1976</option>
                      <option value="year-1977">1977</option>
                      <option value="year-1978">1978</option>
                      <option value="year-1979">1979</option>
                      <option value="year-1980">1980</option>
                      <option value="year-1981">1981</option>
                      <option value="year-1982">1982</option>
                      <option value="year-1983">1983</option>
                      <option value="year-1984">1984</option>
                      <option value="year-1985">1985</option>
                      <option value="year-1986">1986</option>
                      <option value="year-1987">1987</option>
                      <option value="year-1988">1988</option>
                      <option value="year-1989">1989</option>
                      <option value="year-1990">1990</option>
                      <option value="year-1991">1991</option>
                      <option value="year-1992">1992</option>
                      <option value="year-1993">1993</option>
                      <option value="year-1994">1994</option>
                      <option value="year-1995">1995</option>
                      <option value="year-1996">1996</option>
                      <option value="year-1997">1997</option>
                      <option value="year-1998">1998</option>
                      <option value="year-1999">1999</option>
                      <option value="year-2000">2000</option>
                      <option value="year-2001">2001</option>
                      <option value="year-2002">2002</option>
                      <option value="year-2003">2003</option>
                      <option value="year-2004">2004</option>
                      <option value="year-2005">2005</option>
                      <option value="year-2006">2006</option>
                      <option value="year-2007">2007</option>
                      <option value="year-2008">2008</option>
                      <option value="year-2009">2009</option>
                      <option value="year-2010">2010</option>
                      <option value="year-2011">2011</option>
                      <option value="year-2012">2012</option>
                      <option value="year-2013">2013</option>
                      <option value="year-2014">2014</option>
                      <option value="year-2015">2015</option>
                      <option value="year-2016">2016</option>
                      <option value="year-2017">2017</option>
                      <option value="year-2018">2018</option>
                      <option value="year-2019">2019</option>
                      <option value="year-2020">2020</option>
                      <option value="year-2021">2021</option>
                    </select>
                  </div>

                  <div class="mb-3 mt-3 col-md-12">
                    <select name="country" class="form-select" required="required">
                      <option value disabled selected class="option-placeholder">
                        Region
                      </option>
                      <option value="Afganistan">Afghanistan</option>
                      <option value="Albania">Albania</option>
                      <option value="Algeria">Algeria</option>
                      <option value="American Samoa">American Samoa</option>
                      <option value="Andorra">Andorra</option>
                      <option value="Angola">Angola</option>
                      <option value="Anguilla">Anguilla</option>
                      <option value="Antigua & Barbuda">
                        Antigua & Barbuda
                      </option>
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
                      <option value="Bonaire">Bonaire</option>
                      <option value="Bosnia & Herzegovina">
                        Bosnia & Herzegovina
                      </option>
                      <option value="Botswana">Botswana</option>
                      <option value="Brazil">Brazil</option>
                      <option value="British Indian Ocean Ter">
                        British Indian Ocean Ter
                      </option>
                      <option value="Brunei">Brunei</option>
                      <option value="Bulgaria">Bulgaria</option>
                      <option value="Burkina Faso">Burkina Faso</option>
                      <option value="Burundi">Burundi</option>
                      <option value="Cambodia">Cambodia</option>
                      <option value="Cameroon">Cameroon</option>
                      <option value="Canada">Canada</option>
                      <option value="Canary Islands">Canary Islands</option>
                      <option value="Cape Verde">Cape Verde</option>
                      <option value="Cayman Islands">Cayman Islands</option>
                      <option value="Central African Republic">
                        Central African Republic
                      </option>
                      <option value="Chad">Chad</option>
                      <option value="Channel Islands">Channel Islands</option>
                      <option value="Chile">Chile</option>
                      <option value="China">China</option>
                      <option value="Christmas Island">Christmas Island</option>
                      <option value="Cocos Island">Cocos Island</option>
                      <option value="Colombia">Colombia</option>
                      <option value="Comoros">Comoros</option>
                      <option value="Congo">Congo</option>
                      <option value="Cook Islands">Cook Islands</option>
                      <option value="Costa Rica">Costa Rica</option>
                      <option value="Cote DIvoire">Cote DIvoire</option>
                      <option value="Croatia">Croatia</option>
                      <option value="Cuba">Cuba</option>
                      <option value="Curaco">Curacao</option>
                      <option value="Cyprus">Cyprus</option>
                      <option value="Czech Republic">Czech Republic</option>
                      <option value="Denmark">Denmark</option>
                      <option value="Djibouti">Djibouti</option>
                      <option value="Dominica">Dominica</option>
                      <option value="Dominican Republic">
                        Dominican Republic
                      </option>
                      <option value="East Timor">East Timor</option>
                      <option value="Ecuador">Ecuador</option>
                      <option value="Egypt">Egypt</option>
                      <option value="El Salvador">El Salvador</option>
                      <option value="Equatorial Guinea">
                        Equatorial Guinea
                      </option>
                      <option value="Eritrea">Eritrea</option>
                      <option value="Estonia">Estonia</option>
                      <option value="Ethiopia">Ethiopia</option>
                      <option value="Falkland Islands">Falkland Islands</option>
                      <option value="Faroe Islands">Faroe Islands</option>
                      <option value="Fiji">Fiji</option>
                      <option value="Finland">Finland</option>
                      <option value="France">France</option>
                      <option value="French Guiana">French Guiana</option>
                      <option value="French Polynesia">French Polynesia</option>
                      <option value="French Southern Ter">
                        French Southern Ter
                      </option>
                      <option value="Gabon">Gabon</option>
                      <option value="Gambia">Gambia</option>
                      <option value="Georgia">Georgia</option>
                      <option value="Germany">Germany</option>
                      <option value="Ghana">Ghana</option>
                      <option value="Gibraltar">Gibraltar</option>
                      <option value="Great Britain">Great Britain</option>
                      <option value="Greece">Greece</option>
                      <option value="Greenland">Greenland</option>
                      <option value="Grenada">Grenada</option>
                      <option value="Guadeloupe">Guadeloupe</option>
                      <option value="Guam">Guam</option>
                      <option value="Guatemala">Guatemala</option>
                      <option value="Guinea">Guinea</option>
                      <option value="Guyana">Guyana</option>
                      <option value="Haiti">Haiti</option>
                      <option value="Hawaii">Hawaii</option>
                      <option value="Honduras">Honduras</option>
                      <option value="Hong Kong">Hong Kong</option>
                      <option value="Hungary">Hungary</option>
                      <option value="Iceland">Iceland</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="India">India</option>
                      <option value="Iran">Iran</option>
                      <option value="Iraq">Iraq</option>
                      <option value="Ireland">Ireland</option>
                      <option value="Isle of Man">Isle of Man</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Jamaica">Jamaica</option>
                      <option value="Japan">Japan</option>
                      <option value="Jordan">Jordan</option>
                      <option value="Kazakhstan">Kazakhstan</option>
                      <option value="Kenya">Kenya</option>
                      <option value="Kiribati">Kiribati</option>
                      <option value="Korea North">Korea North</option>
                      <option value="Korea Sout">Korea South</option>
                      <option value="Kuwait">Kuwait</option>
                      <option value="Kyrgyzstan">Kyrgyzstan</option>
                      <option value="Laos">Laos</option>
                      <option value="Latvia">Latvia</option>
                      <option value="Lebanon">Lebanon</option>
                      <option value="Lesotho">Lesotho</option>
                      <option value="Liberia">Liberia</option>
                      <option value="Libya">Libya</option>
                      <option value="Liechtenstein">Liechtenstein</option>
                      <option value="Lithuania">Lithuania</option>
                      <option value="Luxembourg">Luxembourg</option>
                      <option value="Macau">Macau</option>
                      <option value="Macedonia">Macedonia</option>
                      <option value="Madagascar">Madagascar</option>
                      <option value="Malaysia">Malaysia</option>
                      <option value="Malawi">Malawi</option>
                      <option value="Maldives">Maldives</option>
                      <option value="Mali">Mali</option>
                      <option value="Malta">Malta</option>
                      <option value="Marshall Islands">Marshall Islands</option>
                      <option value="Martinique">Martinique</option>
                      <option value="Mauritania">Mauritania</option>
                      <option value="Mauritius">Mauritius</option>
                      <option value="Mayotte">Mayotte</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Midway Islands">Midway Islands</option>
                      <option value="Moldova">Moldova</option>
                      <option value="Monaco">Monaco</option>
                      <option value="Mongolia">Mongolia</option>
                      <option value="Montserrat">Montserrat</option>
                      <option value="Morocco">Morocco</option>
                      <option value="Mozambique">Mozambique</option>
                      <option value="Myanmar">Myanmar</option>
                      <option value="Nambia">Nambia</option>
                      <option value="Nauru">Nauru</option>
                      <option value="Nepal">Nepal</option>
                      <option value="Netherland Antilles">
                        Netherland Antilles
                      </option>
                      <option value="Netherlands">
                        Netherlands (Holland, Europe)
                      </option>
                      <option value="Nevis">Nevis</option>
                      <option value="New Caledonia">New Caledonia</option>
                      <option value="New Zealand">New Zealand</option>
                      <option value="Nicaragua">Nicaragua</option>
                      <option value="Niger">Niger</option>
                      <option value="Nigeria">Nigeria</option>
                      <option value="Niue">Niue</option>
                      <option value="Norfolk Island">Norfolk Island</option>
                      <option value="Norway">Norway</option>
                      <option value="Oman">Oman</option>
                      <option value="Pakistan">Pakistan</option>
                      <option value="Palau Island">Palau Island</option>
                      <option value="Palestine">Palestine</option>
                      <option value="Panama">Panama</option>
                      <option value="Papua New Guinea">Papua New Guinea</option>
                      <option value="Paraguay">Paraguay</option>
                      <option value="Peru">Peru</option>
                      <option value="Phillipines">Philippines</option>
                      <option value="Pitcairn Island">Pitcairn Island</option>
                      <option value="Poland">Poland</option>
                      <option value="Portugal">Portugal</option>
                      <option value="Puerto Rico">Puerto Rico</option>
                      <option value="Qatar">Qatar</option>
                      <option value="Republic of Montenegro">
                        Republic of Montenegro
                      </option>
                      <option value="Republic of Serbia">
                        Republic of Serbia
                      </option>
                      <option value="Reunion">Reunion</option>
                      <option value="Romania">Romania</option>
                      <option value="Russia">Russia</option>
                      <option value="Rwanda">Rwanda</option>
                      <option value="St Barthelemy">St Barthelemy</option>
                      <option value="St Eustatius">St Eustatius</option>
                      <option value="St Helena">St Helena</option>
                      <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                      <option value="St Lucia">St Lucia</option>
                      <option value="St Maarten">St Maarten</option>
                      <option value="St Pierre & Miquelon">
                        St Pierre & Miquelon
                      </option>
                      <option value="St Vincent & Grenadines">
                        St Vincent & Grenadines
                      </option>
                      <option value="Saipan">Saipan</option>
                      <option value="Samoa">Samoa</option>
                      <option value="Samoa American">Samoa American</option>
                      <option value="San Marino">San Marino</option>
                      <option value="Sao Tome & Principe">
                        Sao Tome & Principe
                      </option>
                      <option value="Saudi Arabia">Saudi Arabia</option>
                      <option value="Senegal">Senegal</option>
                      <option value="Seychelles">Seychelles</option>
                      <option value="Sierra Leone">Sierra Leone</option>
                      <option value="Singapore">Singapore</option>
                      <option value="Slovakia">Slovakia</option>
                      <option value="Slovenia">Slovenia</option>
                      <option value="Solomon Islands">Solomon Islands</option>
                      <option value="Somalia">Somalia</option>
                      <option value="South Africa">South Africa</option>
                      <option value="Spain">Spain</option>
                      <option value="Sri Lanka">Sri Lanka</option>
                      <option value="Sudan">Sudan</option>
                      <option value="Suriname">Suriname</option>
                      <option value="Swaziland">Swaziland</option>
                      <option value="Sweden">Sweden</option>
                      <option value="Switzerland">Switzerland</option>
                      <option value="Syria">Syria</option>
                      <option value="Tahiti">Tahiti</option>
                      <option value="Taiwan">Taiwan</option>
                      <option value="Tajikistan">Tajikistan</option>
                      <option value="Tanzania">Tanzania</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Togo">Togo</option>
                      <option value="Tokelau">Tokelau</option>
                      <option value="Tonga">Tonga</option>
                      <option value="Trinidad & Tobago">
                        Trinidad & Tobago
                      </option>
                      <option value="Tunisia">Tunisia</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Turkmenistan">Turkmenistan</option>
                      <option value="Turks & Caicos Is">
                        Turks & Caicos Is
                      </option>
                      <option value="Tuvalu">Tuvalu</option>
                      <option value="Uganda">Uganda</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Erimates">
                        United Arab Emirates
                      </option>
                      <option value="United States of America">
                        United States of America
                      </option>
                      <option value="Uraguay">Uruguay</option>
                      <option value="Uzbekistan">Uzbekistan</option>
                      <option value="Vanuatu">Vanuatu</option>
                      <option value="Vatican City State">
                        Vatican City State
                      </option>
                      <option value="Venezuela">Venezuela</option>
                      <option value="Vietnam">Vietnam</option>
                      <option value="Virgin Islands (Brit)">
                        Virgin Islands (Brit)
                      </option>
                      <option value="Virgin Islands (USA)">
                        Virgin Islands (USA)
                      </option>
                      <option value="Wake Island">Wake Island</option>
                      <option value="Wallis & Futana Is">
                        Wallis & Futana Is
                      </option>
                      <option value="Yemen">Yemen</option>
                      <option value="Zaire">Zaire</option>
                      <option value="Zambia">Zambia</option>
                      <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                  </div>
                  <div class="form-check newsletter-checkbox">
                    <input class="form-check-input" type="checkbox" onclick="myFunction()" />
                    <p style="color: #fff">
                      I have read and understand the
                      <a class="reuse-font" href="https://www.take2games.com/privacy/" onmouseover="this.style.color='#fff'" onmouseleave="this.style.color='#dda833'">Privacy Policy</a>
                    </p>
                  </div>
                  <div class="newsletter-submit-btn">
                    <button id="custom-tick" class="Cbutton newsletter-submit-btn-style">
                      SUBMIT
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <script>

      </script>
      <!-- alex -->

    </div>
  </div>

  <?php
  include './footer-pages.php';
  ?>

</body>
<script src="https://use.fontawesome.com/4411da1e28.js"></script>
<script src="../js/bootstrap/popper.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="../js/bootstrap/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/script.js"></script>

</html>