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
  <link rel="stylesheet" href="../css/learnMore.css" />


  <link rel="stylesheet" href="../css/Pass.css" />
</head>

<body>
  <!-- header -->
  <header>
    <div class="container-fluid header topbar">
      <nav class="navbar navbar-expand-md navbar-dark justify-content-start">
        <a href="#" class="navbar-brand">
          <ul>
            <li class="expandLogo" style="display: none">
              <div class="dropdown">
                <button class="dropbtnnp">
                  <p href="index.php" class="linkhover hf civlogo">
                    CIVILIZATION VI
                  </p>
                </button>
                <div class="dropdown-content">
                  <a href="https://civilization.com/civilization-5/" class="linkhover">CIVILIZATION V</a>
                  <a href="#https://civilization.com/civilization-4/" class="linkhover">CIVILIZATION IV</a>
                  <a href="https://civilization.com/civilization-4/" class="linkhover">CIVILIZATION III</a>
                </div>
              </div>
            </li>

            <li class="expandLogo cuslogo">
              <div class="dropdown">
                <button class="dropbtnnp">
                  <a href="../index.php" class="linkhover hf civlogo">CIVILIZATION VI</a>
                </button>
                <div class="dropdown-content">
                  <a href="https://civilization.com/civilization-5/" class="linkhover">CIVILIZATION V</a>
                  <a href="#https://civilization.com/civilization-4/" class="linkhover">CIVILIZATION IV</a>
                  <a href="https://civilization.com/civilization-4/" class="linkhover">CIVILIZATION III</a>
                </div>
              </div>
            </li>
          </ul>

          <div class="clogo hf civlogo" style="color: #dda833">
            CIVILIZATION VI
          </div>
        </a>
        <!-- button of hamburber menu -->
        <button class="navbar-toggler" style="margin-left: 1.5em" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigatioln">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- content of hamburger menu -->

        <div class="collapse navbar-collapse" id="toggleMobileMenu">
          <ul class="navbar-nav ms-auto bars">
            <!-- language drop menu onhover-expand -->
            <li class="exmedia">
              <div class="dropdown">
                <button class="dropbtnnp" style="padding: 10px 6px 0 0">
                  EN-US
                </button>
                <div class="dropdown-content">
                  <a href="#">FR-FR</a>
                  <a href="#">DE-DE</a>
                  <a href="#">EN-AU</a>
                  <a href="#">EN-GB</a>
                </div>
              </div>
            </li>
            <!-- language drop menu onclick-collapse -->
            <li class="clogo">
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle header downb" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <a class="nav-link hf" href="#">
                    <div class="hf">EN-US</div>
                  </a>
                </button>
                <ul class="dropdown-menu header" aria-labelledby="dropdownMenuButton1">
                  <li>
                    <a class="dropdown-item header hf downb" href="#">FR-FR</a>
                  </li>
                  <li>
                    <a class="dropdown-item header hf downb" href="#">DE-DE</a>
                  </li>
                  <li>
                    <a class="dropdown-item header hf downb" href="#">EN-AU</a>
                  </li>
                  <li>
                    <a class="dropdown-item header hf downb" href="#">EN-GB</a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- language drop menu ends-->

            <!-- media drop menu onhover-expand-->
            <li class="exmedia">
              <div class="dropdown">
                <button class="dropbtnnp">
                  <a class="nav-link hf" href="#">
                    <img src="../assets/image/icon_social_gold.svg" alt="icon_social_gold" width="30" height="24" class="d-inline-block align-top" /></a>
                </button>
                <div class="dropdown-content">
                  <a href="#"><img src="../assets/image/icon_youtube_gold.svg" alt="icon_yourube_gold" width="30" height="24" style="padding: 0px 0px 5px" class="d-inline-block align-top header container-fluid" /></a>
                  <a href="#"><img src="../assets/image/icon_twitter_gold.svg" alt="icon_twitter_gold" width="30" height="24" style="padding: 0px 0px 5px" class="d-inline-block align-top header container-fluid" /></a>
                  <a href="#"><img src="../assets/image/icon_facebook_gold.svg" alt="icon_facebook_gold" width="30" height="24" style="padding: 0px 0px 5px" class="d-inline-block align-top header container-fluid" /></a>
                  <a href="#"><img src="../assets/image/icon_instagram_gold.svg" alt="icon_instagram_gold" width="30" height="24" style="padding: 0px 0px 5px" class="d-inline-block align-top header container-fluid" /></a>
                </div>
              </div>
            </li>

            <!-- media drop menu ends-->

            <!-- 2k drop menu onhover-expand-->
            <li class="exmedia">
              <div class="dropdown">
                <button class="dropbtnnp">
                  <a class="nav-link hf" href="#">
                    <img src="../assets/image/icon_2k_gold.svg" alt="icon_2k_gold" width="30" height="24" class="d-inline-block align-top" /></a>
                </button>
                <div class="dropdown-content">
                  <a href="#">2K.com</a>
                  <a href="#">SUPPORT</a>
                  <a href="#">2K FORUM</a>
                  <a href="#">LOGIN/REGISTER</a>
                </div>
              </div>
            </li>
            <!-- 2k drop menu onclick-collapse-->
            <li class="clogo">
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle header downb" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <a class="nav-link hf" href="#">
                    <img src="../assets/image/icon_2k_gold.svg" alt="icon_2k_gold" width="30" height="24" class="d-inline-block align-top" /></a>
                </button>
                <ul class="dropdown-menu header" aria-labelledby="dropdownMenuButton1">
                  <li>
                    <a class="dropdown-item header hf downb" href="#">2K.com</a>
                  </li>
                  <li>
                    <a class="dropdown-item header hf downb" href="#">SUPPORT</a>
                  </li>
                  <li>
                    <a class="dropdown-item header hf downb" href="#">2K FORUM</a>
                  </li>
                  <li>
                    <a class="dropdown-item header hf downb" href="#">LOGIN/REGISTER</a>
                  </li>
                </ul>
              </div>
            </li>

            <!-- 2k drop menu ends-->
          </ul>
          <!-- media collapse bar -->
          <div class="hamedia container-fluid">
            <div class="row">
              <div class="col-3 anthlogo">
                <a href="#">
                  <img src="../assets/image/icon_youtube_gold.svg" alt="icon_yourube_gold" width="30" height="24" style="padding: 0px 0px 0px" class="r" />
                </a>
              </div>
              <div class="col-3 anthlogo">
                <a href="#"><img src="../assets/image/icon_twitter_gold.svg" alt="icon_twitter_gold" width="30" height="24" style="padding: 0px 0px 0px" class="" /></a>
              </div>
              <div class="col-3 anthlogo">
                <a href="#">
                  <img src="../assets/image/icon_facebook_gold.svg" alt="icon_facebook_gold" width="30" height="24" style="padding: 0px 0px 0px" class="" />
                </a>
              </div>
              <div class="col-3 anthlogo">
                <a href="#">
                  <img src="../assets/image/icon_instagram_gold.svg" alt="icon_instagram_gold" width="30" height="24" style="padding: 0px 0px 0px" class="" />
                </a>
              </div>
            </div>
            <!-- media collapse bar ends-->
          </div>
          <!-- hamburger menu ends-->
        </div>
        <div class="shophold order-first order-md-last col-12 col-md-2">
          <div class="col-0 col-md-2"></div>
          <div class="Cbutton col-12 col-md-10"><a>SHOP NOW</a></div>
        </div>
      </nav>
    </div>
  </header>
  <!-- header  ends-->

  <body>
    <div class="bgpass">
      <div class="anthheroContent">
        <div class="anthherologo col-12">
          <img src="https://cdn.2kgames.com/2020/04/30/5eab45ed3dce4logo_civ6nfp_L_1.png" class="pcanthlogo" />
        </div>

        <div class="nfpbar col-12">
          <img src="https://cdn.2kgames.com/2020/05/20/5ec56fa99c7dftype_nfp_L_1.png" alt="lmanthlogo" class="pcanthlogo" />
        </div>


      </div>
    </div>


    <!--                        content area                -->

    <div class="bgimage2">
      <!--                        start edit area                -->
      <!--                        main content box                -->
      <div class=" up">

        <div class=" custrow ">
          <div class=" mx-auto concol ">

            <div class="article-box jw">
              <div class="">
                <div class="mt5">
                  <p class="  mt5 exp">OVERVIEW</p>
                  <p class=" ">Continue your quest to build your greatest empire with the Civilization VI
                    - New Frontier Pass, featuring eight new civilizations and nine new leaders, and a variety of new
                    gameplay content,
                    including six new game modes. Civilization VI is required to play add-on content and some features
                    of the New Frontier
                    Pass require either the Gathering Storm or Rise and Fall expansion to work. Delivering six DLC packs
                    on a bimonthly basis
                    from May 2020 to March 2021, the New Frontier Pass includes:</p>



                </div>
                <!--                        pack1                -->
                <div class="card-wrapper pw">
                  <img class="card-social-icon-twitter passlogo" src="https://cdn.2kgames.com/2020/07/14/5f0d027673f40icon_pack_1.png" alt="" />
                  <p class="card-social-author em8"><b class="pack">PACK 1: MAYA & GRAN COLOMBIA PACK</b><br>
                    <b class="an">Available Now</b>
                  </p>
                  <p class="card-social-timestamp lm mr5"><a href="../pages/Pass1.php"><b>LEARN MORE</b></a></p>


                </div><br>
                <div class="mt5 ml5 mb5">

                  <p class=" ">Adds two new civilizations and leaders, one new game mode*, new City-States, Resources,
                    and Natural Wonders.</p>
                </div>
                <!--                        pack2                -->

                <div class="card-wrapper pw">
                  <img class="card-social-icon-twitter passlogo" src="https://cdn.2kgames.com/2020/07/14/5f0dfd81082e8icon_pack_2.png" alt="" />
                  <p class="card-social-author em8"><b class="pack">PACK 2: ETHIOPIA PACK</b><br>
                    <b class="an">Available Now</b>
                  </p>
                  <p class="card-social-timestamp lm mr5"><b>LEARN MORE</b></p>

                </div><br>
                <div class="mt5 ml5 mb5">

                  <p class=" ">Adds one new civilization and leader, one new game mode**, one new District and two new
                    Buildings.</p>
                </div>
                <!--                        pack3                -->

                <div class="card-wrapper pw">
                  <img class="card-social-icon-twitter passlogo" src="https://cdn.2kgames.com/2020/09/17/5f62c76bbef58icon_pack_3.png" alt="" />
                  <p class="card-social-author em8"><b class="pack">PACK 3: BYZANTIUM & GAUL PACK</b><br>
                    <b class="an">Available Now</b>
                  </p>
                  <p class="card-social-timestamp lm mr5"><b>LEARN MORE</b></p>

                </div><br>
                <div class="mt5 ml5 mb5">

                  <p class=" ">Adds two new civilizations and leaders, one new game mode**, new World Wonders, and one
                    new map.</p>
                </div>
                <!--                        pack4                -->

                <div class="card-wrapper pw">
                  <img class="card-social-icon-twitter passlogo" src="https://cdn.2kgames.com/2020/11/11/5fab342e5501aicon_pack_4.png" alt="" />
                  <p class="card-social-author em8"><b class="pack">PACK 4: BABYLON PACK</b><br>
                    <b class="an">Available Now</b>
                  </p>
                  <p class="card-social-timestamp lm mr5"><b>LEARN MORE</b></p>

                </div><br>
                <div class="mt5 ml5 mb5">

                  <p class=" ">Adds one new civilization and leader, one new game mode, new City-States, and numerous
                    new Great People.</p>
                </div>
                <!--                        pack5                -->

                <div class="card-wrapper pw">
                  <img class="card-social-icon-twitter passlogo" src="https://cdn.2kgames.com/2021/01/26/600f664bcfc6aicon_pack_5.png" alt="" />
                  <p class="card-social-author em8"><b class="pack">PACK 5: VIETNAM & KUBLAI KHAN PACK</b><br>
                    <b class="an">Available Now</b>
                  </p>
                  <p class="card-social-timestamp lm mr5"><b>LEARN MORE</b></p>

                </div><br>
                <div class="mt5 ml5 mb5">

                  <p class=" ">Adds one new civilization and two new leaders***, one new game mode, a new District, and
                    two new Buildings.</p>
                </div>
                <!--                        pack6                -->

                <div class="card-wrapper pw">
                  <img class="card-social-icon-twitter passlogo" src="https://cdn.2kgames.com/2021/03/16/604ffb3e42ff0icon_pack_6.png" alt="" />
                  <p class="card-social-author em8"><b class="pack">PACK 6: PORTUGAL PACK</b><br>
                    <b class="an">Available Now</b>
                  </p>
                  <p class="card-social-timestamp lm mr5"><b>LEARN MORE</b></p>

                </div><br>
                <div class="mt5 ml5 mb5">

                  <p class=" ">Adds one new civilization and leader, one new game mode, new World Wonders, and one new
                    map.

                  </p>
                </div>
                <!--                        pack section ends                -->


                <h5 class=" ct">EXCLUSIVE BONUS:</h5>
                <h5 class=" ct">TEDDY ROOSEVELT AND CATHERINE DE MEDICI PERSONA PACKS</h5>
                <div class="container">
                  <div class="row">
                    <div class="col-6 ">
                      <img class="img-fluid " src="https://cdn.2kgames.com/2020/07/13/5f0c98dd3f4d0leader_civ6_TRpack.jpg" alt="" />
                    </div>
                    <div class="col-6">
                      <img class="img-fluid" src="https://cdn.2kgames.com/2020/07/13/5f0c98bd7cd82leader_civ6_CDMpack.jpg" alt="" />
                    </div>
                  </div>
                </div>






                <div class="article-text mt-3">
                  <p>
                    <span style="font-weight: 400">
                      Two of Civilization VI's leaders are transformed with a new look and new abilities when you lead
                      America and France!
                      “Rough Rider Teddy” excels at keeping the peace on his home continent, and “Magnificence
                      Catherine” can use Luxuries
                      to overwhelm the world with Culture and Tourism. Each Persona Pack contains a brand new take on a
                      favorite leader,
                      with a new leader model and background, new gameplay bonuses, and an updated agenda that reflect
                      the changes to the
                      leader’s personality. The Persona Packs are available exclusively to owners of the New Frontier
                      Pass and will be
                      delivered with the second add-on pack.
                    </span>
                  </p>
                </div>
                <div class="article-text mt-3">
                  <p>
                    <span style="font-weight: 400">
                      *New game mode requires the Gathering Storm expansion to play.
                    </span>
                  </p>
                </div>
                <div class="article-text mt-3">
                  <p>
                    <span style="font-weight: 400">
                      **New game mode requires either the Rise and Fall or Gathering Storm expansions to play.
                    </span>
                  </p>
                </div>
                <div class="article-text mt-3">
                  <p>
                    <span style="font-weight: 400">
                      ***One of the two new leaders requires the Rise and Fall expansion to play.
                    </span>
                  </p>
                </div>

                <div class="article-text mt-3">
                  <p>
                    <span style="font-weight: 400">
                      Game modes can include additional content such as new units, buildings, or improvements and can be
                      turned on or off during game setup to apply significant and dramatic changes to the rules of the
                      game.
                  </p>
                </div>

              </div>
            </div>


          </div>
          <div class=" mx-auto adcol">
            <div class=" bb">
              <div class="mt5">
                <h3 class="hf ct mt5">BUY THE</h3>
                <h5 class="hf ct">NEW FRONTIER PASS</h5>

              </div>
              <div class="article-text mt-3 wf sp">
                <p>
                  <span style="font-weight: 400">
                    <i>Select a platform</i>
                  </span>
                </p>
              </div>
              <div class="linkbox">

                <div class="logobox blue">
                  <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_playstation_1.svg" />
                </div>
                <div class="logobox  green">

                  <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_xbox_1.svg" />

                </div>
                <div class="logobox grey">

                  <img class="adlogo" src="https://cdn.2kgames.com/2019/03/29/5c9ea27c7c616epicstore_logo_S_2.png" />

                </div>
                <div class="logobox red">

                  <img class="adlogo" src="https://cdn.2kgames.com/2020/05/12/icon_switch_1.svg" />

                </div>
                <div class="logobox white">

                  <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_steam_2.svg" />

                </div>

              </div>
              <p class="btad sp tac">Change Region
                <select class="bc-selection-control__select hf dropbtn">
                  <option value="argentina">Argentina</option>
                  <option value="australia">Australia</option>
                  <option value="austria">Austria</option>
                  <option value="belgium">Belgium</option>
                  <option value="belize">Belize</option>
                  <option value="brazil">Brazil</option>
                  <option value="bulgaria">Bulgaria</option>
                  <option value="canada">Canada</option>
                  <option value="chile">Chile</option>
                  <option value="colombia">Colombia</option>
                  <option value="costa-rica">Costa Rica</option>
                  <option value="croatia">Croatia</option>
                  <option value="cyprus">Cyprus</option>
                  <option value="czech-republic">Czech Republic</option>
                  <option value="denmark">Denmark</option>
                  <option value="estonia">Estonia</option>
                  <option value="finland">Finland</option>
                  <option value="france">France</option>
                  <option value="germany">Germany</option>
                  <option value="greece">Greece</option>
                  <option value="hong-kong">Hong Kong</option>
                  <option value="hungary">Hungary</option>
                  <option value="india">India</option>
                  <option value="indonesia">Indonesia</option>
                  <option value="ireland">Ireland</option>
                  <option value="israel">Israel</option>
                  <option value="italy">Italy</option>
                  <option value="japan">Japan</option>
                  <option value="korea">Korea</option>
                  <option value="latvia">Latvia</option>
                  <option value="lithuania">Lithuania</option>
                  <option value="luxembourg">Luxembourg</option>
                  <option value="malaysia">Malaysia</option>
                  <option value="malta">Malta</option>
                  <option value="mexico">Mexico</option>
                  <option value="netherlands">Netherlands</option>
                  <option value="new-zealand">New Zealand</option>
                  <option value="norway">Norway</option>
                  <option value="panama">Panama</option>
                  <option value="peru">Peru</option>
                  <option value="poland">Poland</option>
                  <option value="portugal">Portugal</option>
                  <option value="russia">Russia</option>
                  <option value="saudi-arabia">Saudi Arabia</option>
                  <option value="singapore">Singapore</option>
                  <option value="slovak-republic">Slovak Republic</option>
                  <option value="slovakia">Slovakia</option>
                  <option value="slovenia">Slovenia</option>
                  <option value="south-africa">South Africa</option>
                  <option value="spain">Spain</option>
                  <option value="sweden">Sweden</option>
                  <option value="switzerland">Switzerland</option>
                  <option value="taiwan">Taiwan</option>
                  <option value="thailand">Thailand</option>
                  <option value="uae">UAE</option>
                  <option value="ukraine">Ukraine</option>
                  <option value="united-kingdom">United Kingdom</option>
                  <option selected="" value="united-states">United States</option>
                </select>
              </p>


            </div>
            <div class="card wb">
              <div class="mt5">
                <p class=" ct mt5 exp">GET THE GAME AND THE EXPANSIONS</p>
                <p class=" ct">Civilization VI is required to play add-on content and some features of the New Frontier
                  Pass require either the Gathering Storm or Rise and Fall expansion to work.</p>



              </div>
              <div class="anthherologo col-12">
                <img src="https://cdn.2kgames.com/2019/10/03/5d967fd5bc1adciv6platinum_fob_1.jpg" class="pcanthlogo " />
              </div>
              <div class="mt5">
                <div class="container">
                  <div class="row align-items-center">

                    <a class="ct mt5 col align-self-center">
                      <p class="Cbutton ct">SHOP</p>
                    </a>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!--                        main content box ends               -->
      <!--                        bar area               -->

      <div class="barimageps">
        <div class="barContent container-fluid">
          <div class="anthlogocon col-12">
            <img src="https://cdn.2kgames.com/2020/04/30/5eab45ed3dce4logo_civ6nfp_L_1.png" class="anthlogo m400" />
          </div>
          <div class="box2 col-12">
            <div class="textcon col-12 table">SUBSCRIBE FOR THE LATEST<br> NEWS & UPDATES</div>

            <div class="anthlogocon col-12 buttonps">
              <a href="./pages/learnMore.php">
                <div class="learnMore Cbutton">SUBSCRIBE</div>
              </a>
              <a href="./pages/learnMore.php" class=" ml52">
                <div class="learnMore Cbutton ">LOG IN</div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!--                        bar area  ends             --><br><br>



    </div>






  </body>






  <!-- footer  -->
  <footer id="footer-layout">
    <div class="container">
      <div class="row">
        <div class="col mt-4 footer-left-component d-md-flex flex-row">
          <div class="row">
            <div class="col-md-3">
              <a href="#" class="footer-link link-backdrop reuse-font">2k.com</a>
            </div>
            <div class="col-md-3">
              <a href="#" class="footer-link link-backdrop reuse-font">support</a>
            </div>
            <div class="col-md-3">
              <a href="#" class="footer-link link-backdrop reuse-font">2kforums</a>
            </div>
            <div class="col-md-3">
              <a href="#" class="footer-link link-backdrop reuse-font">newsletter</a>
            </div>
          </div>
        </div>
        <div class="
              col-md
              mt-4
              footer-right-component
              d-md-flex
              flex-row-reverse
            ">
          <div class="row">
            <div class="col-md-3">
              <a class="fa fa-youtube link-backdrop reuse-font" href="#"></a>
            </div>
            <div class="col-md-3">
              <a class="fa fa-twitter link-backdrop reuse-font" href="#"></a>
            </div>
            <div class="col-md-3">
              <a class="fa fa-facebook link-backdrop reuse-font" href="#"></a>
            </div>
            <div class="col-md-3">
              <a class="fa fa-instagram link-backdrop reuse-font" href="#"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md">
          <div class="row">
            <img src="../assets/image/Footer-Image.avif" alt="footer-image" class="footer-image mx-auto" />
          </div>
        </div>
      </div>
      <div class="col d-md-flex justify-content-center">
        <div class="row">
          <ul class="mt-3">
            <li class="links">
              <a class="link-backdrop reuse-font" href="#">privacy policy</a>
            </li>
            <li class="links">
              <a class="link-backdrop reuse-font" href="../pages/terms-conditions.php">terms of service</a>
            </li>
            <li class="links">
              <a class="link-backdrop reuse-font" href="#">cookie policy</a>
            </li>
            <li class="links">
              <a class="link-backdrop reuse-font" href="#">do not sell my personal information</a>
            </li>
            <li class="links">
              <a class="link-backdrop reuse-font" href="#">cookies settings</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row mt-5 copyright-footer">
        <div class="col-md d-flex justify-content-center">
          <p class="copyright reuse-font">
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            All rights reserved | This template is made
            <i class="ion-ios-heart" aria-hidden="true"></i> by Alex & Louie
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer  ends-->
</body>
<script src="https://use.fontawesome.com/4411da1e28.js"></script>
<script src="../js/bootstrap/popper.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="../js/bootstrap/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/script.js"></script>

</html>