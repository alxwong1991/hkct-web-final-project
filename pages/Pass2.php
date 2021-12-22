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
                  <p class=" ">This new content pack introduces Lady Six Sky as the leader of the Maya and Simón Bolívar
                    as the leader of
                    Gran Colombia. The Maya can build prosperous city centers early in the game, supported by
                    surrounding Farms and
                    Plantations and protected by their unique Hul’che. Gran Colombia focuses on fast armies boosted by
                    Simon Bolivar’s
                    powerful Comandante Generals.</p>


                </div>
                <!--                        pack1                -->
                <div class="container">
                  <div class="row align-items-center"><img src="https://cdn.2kgames.com/2020/05/01/5eab6b39879dcicon_maya_1.png" class="m40 align-self-center tsa" /></div>
                </div>

                <div class="card-wrapper pw1">
                  <img class="card-social-icon-twitter passlogo tsb" src="https://cdn.2kgames.com/2020/05/01/5eab6b39879dcicon_maya_1.png" alt="" />
                  <p class="card-social-author em8"><b class="pack1">Includes the Maya civilization with Lady Six Sky,
                      the Hul’che unique
                      unit, and the Observatory unique district.</b>

                  </p>



                </div><br>
                <div class=" ml5 mb5">

                  <p class="">
                  <ul class="lif">
                    <li><b>Civ Unique Ability</b>
                      : The “Mayab” ability gives Maya housing and production bonuses from Farms, and Amenity bonus for
                      Luxury resources
                      adjacent to the City Center. Settling adjacent to Coasts or Fresh Water does not provide housing
                      bonuses.</li>
                    <li><b>Leader Unique Ability</b>
                      : Lady Six Sky’s “Ix Mutal Ajaw” ability lets the Maya gain yield bonuses to non-capital cities,
                      and a combat bonus
                      to units, within six tiles of the capital.</li>
                    <li><b>Unique Unit</b>
                      : The Hul’che, a stronger replacement for the Archer and receives bonus combat strength when
                      attacking wounded units.</li>
                    <li><b>Unique District</b>
                      : The Observatory replaces the Campus and adds a minor adjacency bonus with Farms and a major
                      adjacency bonus with Plantations.</li>

                  </ul><br>
                  </p>
                </div>
                <div class="container mb50">
                  <div class="row">
                    <div class="col-4 "><button id="myBtn">
                        <img class="img-fluid " src="https://img.youtube.com/vi/lQVk0s3rQh0/maxresdefault.jpg" alt="" /></button>
                    </div>
                    <div class="col-4"><button id="myBtn">
                        <img class="img-fluid" src="https://cdn.2kgames.com/2020/05/15/5ebdeb40b4bfbscreen_civ6_Maya_22_1.jpg" alt="" /></button>
                    </div>
                    <div class="col-4"><button id="myBtn">
                        <img class="img-fluid" src="https://cdn.2kgames.com/2020/05/15/5ebdeb3defecfscreen_civ6_Maya_04_1.jpg" alt="" /></button>
                    </div>
                  </div>
                </div>
                <div id="myModal" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Some text in the Modal..</p>
                  </div>

                </div>
                <!--                        pack2                -->
                <div class="container">
                  <div class="row align-items-center"><img src="https://cdn.2kgames.com/2020/05/01/5eab6b38f3305icon_grancolombia_1.png" class="m40 align-self-center tsa" /></div>
                </div>

                <div class="card-wrapper pw1">
                  <img class="card-social-icon-twitter passlogo tsb" src="https://cdn.2kgames.com/2020/05/01/5eab6b38f3305icon_grancolombia_1.png" alt="" />
                  <p class="card-social-author em8"><b class="pack1">Also includes the Gran Colombia civilization with
                      Simón Bolívar,
                      the Llanero and Comandante General unique units, and the Hacienda unique improvement.</b>

                  </p>



                </div><br>
                <div class=" ml5 mb5">

                  <p class="">
                  <ul class="lif">
                    <li><b>Civ Unique Ability</b>
                      : With the “Ejercito Patriota” ability, Gran Colombia receives a movement bonus to all units, and
                      promoting a unit does not end the unit’s turn.</li>
                    <li><b>Leader Unique Ability</b>
                      : Simón Bolívar has the “Campana Admirable” ability, granting a Comandante General when entering a
                      new Era.</li>
                    <li><b>Unique Unit</b>
                      : Gran Colombia features two unique units
                      <ul>
                        <li>The Comandante General is a Great General with unique abilities, including Passive and
                          Retire effects.</li>
                        <li>The Llanero replaces the Cavalry. It requires less maintenance, receives a combat bonus for
                          every adjacent Llanero
                          and fully heals when in range of a Comandante General that activates.</li>
                      </ul>

                    </li>
                    <li><b>Unique Improvement</b>
                      : The Hacienda provides Production, Gold and Housing bonuses, and a Food bonus for each adjacent
                      Plantation. Plantations and Haciendas receive Production bonuses for adjacent Haciendas.</li>

                  </ul><br>
                  </p>
                </div>
                <div class="container mb50">
                  <div class="row">
                    <div class="col-4 "><button id="myBtn">
                        <img class="img-fluid " src="https://img.youtube.com/vi/5qKSQ1nvbDs/maxresdefault.jpg" alt="" /></button>
                    </div>
                    <div class="col-4"><button id="myBtn">
                        <img class="img-fluid" src="https://cdn.2kgames.com/2020/05/15/5ebdeb3a6cb56screen_civ6_Colombia-Llanero_04_1.jpg" alt="" /></button>
                    </div>
                    <div class="col-4"><button id="myBtn">
                        <img class="img-fluid" src="https://cdn.2kgames.com/2020/05/15/5ebdeb3299cd4screen_civ6_Colombia-Comandante_01_1.jpg" alt="" /></button>
                    </div>
                  </div>
                </div>
                <div id="myModal" class="modal">
                  <!-- Modal content -->
                  <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Some text in the Modal..</p>
                  </div>

                </div>
                <!--                        pack3                -->


                <div class="card-wrapper pw1">

                  <p class="card-social-author em8"><b class="pack1">New “Apocalypse” Game Mode</b>- Requires the
                    Gathering Storm expansion to play

                  </p>



                </div><br>
                <div class=" ml5 mb5">

                  <p class="">
                  <ul class="lif">
                    <li>Adds Forest Fires and Meteor Showers as disaster types to all games.</li>
                    <li>An optional, specialized game mode with exclusive rule changes:
                      <ul>
                        <li>New disasters: Comet Impact and Solar Flares.</li>
                        <li>Larger versions of existing disasters.</li>
                        <li>New military unit: Soothsayer, a Support unit that can trigger natural disasters at the
                          player’s command.</li>
                        <li>New scored competition: Sacrifice units to volcanoes. Requires Soothsayers to use their
                          unique action on friendly units near a volcano.</li>
                        <li>The world enters an apocalyptic state when climate change reaches its maximum level.</li>

                      </ul>
                    </li>
                  </ul><br>
                  </p>
                </div>
                <div class="container mb50">
                  <div class="row">
                    <div class="col-4 "><button id="myBtn">
                        <img class="img-fluid " src="https://cdn.2kgames.com/2020/05/15/5ebdeb2eac417screen_civ6_Apocalypse_Soothsayer_1.jpg" alt="" /></button>
                    </div>
                    <div class="col-4"><button id="myBtn">
                        <img class="img-fluid" src="https://cdn.2kgames.com/2020/05/15/5ebdeb29e6356screen_civ6_Apocalypse_Solar-Flare_1.jpg" alt="" /></button>
                    </div>
                    <div class="col-4"><button id="myBtn">
                        <img class="img-fluid" src="https://cdn.2kgames.com/2020/05/15/5ebdeb273ef02screen_civ6_Apocalypse_Comet_1.jpg" alt="" /></button>
                    </div>
                  </div>
                </div>
                <div id="myModal" class="modal">-->

                  <!-- Modal content -->
                  <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Some text in the Modal..</p>
                  </div>

                </div>
                <!--                        pack section ends                -->














                <div class="article-text mt-3">
                  <p>
                    <span style="font-weight: 400">
                      <b>Also includes six new City-States, two new Resources and three new Natural Wonders.</b>
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

      <div class="barimagepss">
        <div class="barContent container-fluid">
          <div class="anthlogocon col-12">
            <img src="https://cdn.2kgames.com/2020/04/30/5eab45ed3dce4logo_civ6nfp_L_1.png" class="anthlogo m400 mt51" />
          </div>
          <div class="col-12 ct mt52 ">
            <img src="https://cdn.2kgames.com/2020/07/14/5f0d027673f40icon_pack_1.png" class="btlogo passlogo2 ct" />
            <img src="https://cdn.2kgames.com/2020/07/14/5f0dfd81082e8icon_pack_2.png" class="btlogo passlogo2 ct" />
            <img src="https://cdn.2kgames.com/2020/09/17/5f62c76bbef58icon_pack_3.png" class="btlogo passlogo2 ct" />
            <img src="https://cdn.2kgames.com/2020/11/11/5fab342e5501aicon_pack_4.png" class="btlogo passlogo2 ct" />
            <img src="https://cdn.2kgames.com/2021/01/26/600f664bcfc6aicon_pack_5.png" class="btlogo passlogo2 ct" />
            <img src="https://cdn.2kgames.com/2021/03/16/604ffb3e42ff0icon_pack_6.png" class="btlogo passlogo2 ct" />

          </div>
          <div class="mt5 wf pack1 mt5">


            <p class=" ct mt5 exp tal">Continue your quest to build your greatest empire with the Civilization VI - New
              Frontier Pass, featuring eight new civilizations and nine new leaders, and a variety of new gameplay
              content, including six new game modes. Delivering six DLC packs on a bimonthly basis from May 2020 to
              March 2021.</p>



          </div>
          <div class="box2 col-12">


            <div class="anthlogocon col-12 buttonps mt5">
              <a href="./pages/learnMore.php">
                <div class="learnMore Cbutton">LEARN MORE</div>
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