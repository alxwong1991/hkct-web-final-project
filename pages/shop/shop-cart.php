<?php

include('../../php/script.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>assignment2</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../../css/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../css/header.css" />
    <link rel="stylesheet" href="../../css/footer.css" />
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/shop-cart.css" />
    <link rel="stylesheet" href="../../css/Pass.css" />
</head>

<body>

    <?php
    include './header-shop.php';
    ?>

    <!-- <section id="shopping-cart-background-image">
        <div class="container">
            <div class="row">
                <div class="shop-page-title">
                    <h1 style="color: #fff;">DLC CONTENTS</h1>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img class="card-image-size" src="../../assets/image/card-image-02.jpg" alt="">
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <h3>Fitness Watch</h3>
                        <h5>$400.00</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img class="card-image-size" src="../../assets/image/card-image-02.jpg" alt="">
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <h3>Smart Watch</h3>
                        <h5>$500.00</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img class="card-image-size" src="../../assets/image/card-image-02.jpg" alt="">
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <h3>Formal Shoes</h3>
                        <h5>$800.00</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img class="card-image-size" src="../../assets/image/card-image-02.jpg" alt="">
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <h3>Leather Watch</h3>
                        <h5>$600.00</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="product-top">
                        <img class="card-image-size" src="../../assets/image/card-image-02.jpg" alt="">
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <h3>Fitness Watch</h3>
                        <h5>$400.00</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img class="card-image-size" src="../../assets/image/card-image-02.jpg" alt="">
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <h3>Smart Watch</h3>
                        <h5>$500.00</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img class="card-image-size" src="../../assets/image/card-image-02.jpg" alt="">
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <h3>Formal Shoes</h3>
                        <h5>$800.00</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img class="card-image-size" src="../../assets/image/card-image-02.jpg" alt="">
                        <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <h3>Leather Watch</h3>
                        <h5>$600.00</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="cart-header">
                <h1>Cart</h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <span>ITEM</span>
                </div>
                <div class="col-md-4">
                    <span>PRICE</span>
                </div>
                <div class="col-md-4">
                    <span>Quantity</span>
                </div>
            </div>
        </div>


    </section> -->
    <div class="fixbg pix">
        <div class="  barimageshop1">
            <div class="bgl2">


                <div class="spbartxt  row">
                    <div class=" col-12">
                        <h1>Sid Meier's Civilization</h1>
                    </div>
                    <div class="col-12"><br>Created by legendary game designer Sid Meier, Civilization is one of the
                        most influential and
                        successful strategy franchises in video game history, having sold more than 51 million units
                        worldwide. Explore
                        a new land, research technology, conquer your enemies, and go head-to-head with history’s most
                        renowned leaders
                        as you attempt to build the greatest civilization the world has ever known.</div>


                </div>
            </div>

        </div>

        <!--------------------------------------------------------------------------------------------------------- card section  -->
        <!--------------------------------------------------------------------------------------------------------- card 1  -->
        <div class="barimageshopc container-fluid">
            <div class="bgl">


                <div class="spbartxts  row">
                    <div class=" col-12">


                    </div>

                    <div class="col-12"><br>

                    </div>


                </div>
            </div>

        </div>
        <div class="container cards">



            <div class="row">
                <h1 class=" ct mt5 mbb5">Civilization VI Base Game</h1>
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content bgmd">
                        <span class="close">&times;</span>
                        <h1 class=" ct  mbb5 ">席德·梅尔的文明®VI</h1>



                        <div class="modal-body">
                            <div class="barimagesp">
                                <div class="barContent container-fluid">
                                    <div class="anthlogocon col-12 col-md-6">
                                        <div class="card cardbg mbb5">
                                            <div class="card-body  mbb5">

                                                <img class="card-img-top " src="https://images.ctfassets.net/wn7ipiv9ue5v/1TAMjaM5YGA9IEHuEV1Qvx/c962dfe7f7ea6edb02a897cf3fb4cf0e/2KGMKT_CIV6_AG_FOB_NORATING_1__1_.jpg?w=1280&h=&fm=webp&q=" />
                                                <h5 class="card-title cardtxt ">席德·梅尔的文明®VI</h5>
                                                <p class="card-text cardtxt ">HK$69.75
                                                </p><br>
                                                <a href="" class="ct">
                                                    <div class="learnMore Cbutton ">BUY NOW</div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <h3>Sid Meier's Civilization</h3>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-6 col-md-4">

                    <button id="myBtn">
                        <div class="card cardbg">
                            <div class="card-body">

                                <img class="card-img-top " src="https://images.ctfassets.net/wn7ipiv9ue5v/1TAMjaM5YGA9IEHuEV1Qvx/c962dfe7f7ea6edb02a897cf3fb4cf0e/2KGMKT_CIV6_AG_FOB_NORATING_1__1_.jpg?w=1280&h=&fm=webp&q=" />
                                <h5 class="card-title cardtxt">席德·梅尔的文明®VI</h5>
                                <p class="card-text cardtxt">HK$69.75
                                </p>
                                <div class="linkbox">

                                    <div class="logobox shoplogo">
                                        <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_playstation_1.svg" />
                                    </div>
                                    <div class="logobox  ">

                                        <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_xbox_1.svg" />

                                    </div>
                                    <div class="logobox ">

                                        <img class="adlogo" src="https://cdn.2kgames.com/2019/03/29/5c9ea27c7c616epicstore_logo_S_2.png" />

                                    </div>
                                    <div class="logobox ">

                                        <img class="adlogo" src="https://cdn.2kgames.com/2020/05/12/icon_switch_1.svg" />

                                    </div>


                                </div>
                            </div>
                        </div>
                    </button>

                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card cardbg">
                        <div class="card-body">
                            <img class="card-img-top" src="https://images.ctfassets.net/wn7ipiv9ue5v/53LSRifob3DCFeEN3TCxfs/aa27d002ae6d55adc87aa565dd1eb9c0/CVA_D2C_600x850__1_.jpg?w=768&h=&fm=webp&q=" />
                            <h5 class="card-title">席德·梅尔的文明VI 典藏版</h5>
                            <p class="card-text">HK$221.85
                            </p>
                            <div class="linkbox">

                                <div class="logobox shoplogo">
                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_playstation_1.svg" />
                                </div>
                                <div class="logobox  ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_xbox_1.svg" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2019/03/29/5c9ea27c7c616epicstore_logo_S_2.png" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2020/05/12/icon_switch_1.svg" />

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card cardbg">
                        <div class="card-body">
                            <img class="card-img-top" src="https://images.ctfassets.net/wn7ipiv9ue5v/7bsmO1QNCwPj3aR4bP7IBF/12864d5f4a4ecc574aa03e4ebdde4e11/2KGMKT_CIV6_Platinum_Edition_AG_FOB_NR_1.jpg?w=768&h=&fm=webp&q=" />
                            <h5 class="card-title">席德·梅尔的文明VI 白金版</h5>
                            <p class="card-text">HK$148.02
                            </p>
                            <div class="linkbox">

                                <div class="logobox shoplogo">
                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_playstation_1.svg" />
                                </div>
                                <div class="logobox  ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_xbox_1.svg" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2019/03/29/5c9ea27c7c616epicstore_logo_S_2.png" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2020/05/12/icon_switch_1.svg" />

                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!--------------------------------------------------------------------------------------------------------- card 1  ends-->
        <!--------------------------------------------------------------------------------------------------------- card 2  -->
        <div class="barimageshopc container-fluid">
            <div class="bgl">


                <div class="spbartxts  row">
                    <div class=" col-12 ">
                        <h1 class="ct"></h1>
                    </div>

                    <div class="col-12"><br>

                    </div>


                </div>
            </div>

        </div>
        <div class="container cards">



            <div class="row">
                <h1 class=" ct mt5 mbb5">扩展包</h1>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card cardbg">
                        <div class="card-body">
                            <img class="card-img-top" src="https://images.ctfassets.net/wn7ipiv9ue5v/3VjBtSNiUIJnK71glImN76/6d6f2f02e5cce799a5488693cfebafae/Civilization_VI_Gathering_Storm_Box_Art-0?w=768&h=&fm=webp&q=" />
                            <h5 class="card-title">席德·梅尔的文明VI 风云变幻</h5>
                            <p class="card-text">HK$77.50
                            </p>
                            <div class="linkbox">

                                <div class="logobox shoplogo">
                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_playstation_1.svg" />
                                </div>
                                <div class="logobox  ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_xbox_1.svg" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2019/03/29/5c9ea27c7c616epicstore_logo_S_2.png" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2020/05/12/icon_switch_1.svg" />

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card cardbg">
                        <div class="card-body">
                            <a href="../pages/login.html">
                                <img class="card-img-top" src="https://images.ctfassets.net/wn7ipiv9ue5v/6o87PFVe794IUhjQO2za5p/c437dd8afced5d54ae473b8af608b2b5/2KGMKT_CIV6_RISEANDFALL_FOB_NO_RATING_1__1_.jpg?w=768&h=&fm=webp&q=" />
                            </a>
                            <h5 class="card-title">席德·梅尔的文明®VI 迭起兴衰</h5>
                            <p class="card-text">HK$76.56
                            </p>
                            <div class="linkbox">

                                <div class="logobox shoplogo">
                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_playstation_1.svg" />
                                </div>
                                <div class="logobox  ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_xbox_1.svg" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2019/03/29/5c9ea27c7c616epicstore_logo_S_2.png" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2020/05/12/icon_switch_1.svg" />

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card cardbg hid">
                        <div class="card-body">
                            <img class="card-img-top" src="https://images.ctfassets.net/wn7ipiv9ue5v/7bsmO1QNCwPj3aR4bP7IBF/12864d5f4a4ecc574aa03e4ebdde4e11/2KGMKT_CIV6_Platinum_Edition_AG_FOB_NR_1.jpg?w=768&h=&fm=webp&q=" />
                            <h5 class="card-title">席德·梅尔的文明VI 白金版</h5>
                            <p class="card-text">HK$148.02
                            </p>
                            <div class="linkbox">

                                <div class="logobox shoplogo">
                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_playstation_1.svg" />
                                </div>
                                <div class="logobox  ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_xbox_1.svg" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2019/03/29/5c9ea27c7c616epicstore_logo_S_2.png" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2020/05/12/icon_switch_1.svg" />

                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--------------------------------------------------------------------------------------------------------- card 2  ends-->
        <!--------------------------------------------------------------------------------------------------------- card 3  -->
        <div class="barimageshopc container-fluid">
            <div class="bgl">


                <div class="spbartxts  row">
                    <div class=" col-12 ">
                        <h1></h1>
                    </div>

                    <div class="col-12"><br>

                    </div>


                </div>
            </div>

        </div>
        <div class="container cards">



            <div class="row">
                <h1 class=" ct mt5 mbb5">季票和场景包</h1>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card cardbg">
                        <div class="card-body">
                            <img class="card-img-top" src="https://images.ctfassets.net/wn7ipiv9ue5v/75ifTYVSLA9vOdSoqpELif/9cf93e2ea17ce23c4a5c965ee9267ed1/2KGMKT_CIV_VI_CivScenario_Pack_Bundle_D2C_FOB_600x850.jpg?w=768&h=&fm=webp&q=" />
                            <h5 class="card-title">席德·梅尔的文明VI 风云变幻</h5>
                            <p class="card-text">HK$77.50
                            </p>
                            <div class="linkbox">

                                <div class="logobox shoplogo">
                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_playstation_1.svg" />
                                </div>
                                <div class="logobox  ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_xbox_1.svg" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2019/03/29/5c9ea27c7c616epicstore_logo_S_2.png" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2020/05/12/icon_switch_1.svg" />

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card cardbg">
                        <div class="card-body">
                            <a href="../pages/login.html">
                                <img class="card-img-top" src="https://images.ctfassets.net/wn7ipiv9ue5v/84mGXSPAhM5uPB9AlXySx/177713d874055fd1f30abdd017c913a1/2KGMKT_CIV6_FNP_D2C_Agnostic_Boxart_600x850__1_.jpg?w=768&h=&fm=webp&q=" />
                            </a>
                            <h5 class="card-title">席德·梅尔的文明®VI 迭起兴衰</h5>
                            <p class="card-text">HK$76.56
                            </p>
                            <div class="linkbox">

                                <div class="logobox shoplogo">
                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_playstation_1.svg" />
                                </div>
                                <div class="logobox  ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_xbox_1.svg" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2019/03/29/5c9ea27c7c616epicstore_logo_S_2.png" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2020/05/12/icon_switch_1.svg" />

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card cardbg hid">
                        <div class="card-body">
                            <img class="card-img-top" src="https://images.ctfassets.net/wn7ipiv9ue5v/7bsmO1QNCwPj3aR4bP7IBF/12864d5f4a4ecc574aa03e4ebdde4e11/2KGMKT_CIV6_Platinum_Edition_AG_FOB_NR_1.jpg?w=768&h=&fm=webp&q=" />
                            <h5 class="card-title">席德·梅尔的文明VI 白金版</h5>
                            <p class="card-text">HK$148.02
                            </p>
                            <div class="linkbox">

                                <div class="logobox shoplogo">
                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_playstation_1.svg" />
                                </div>
                                <div class="logobox  ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_xbox_1.svg" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2019/03/29/5c9ea27c7c616epicstore_logo_S_2.png" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2020/05/12/icon_switch_1.svg" />

                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--------------------------------------------------------------------------------------------------------- card 3  ends-->
        <!--------------------------------------------------------------------------------------------------------- card 4  -->
        <div class="barimageshopc container-fluid">
            <div class="bgl">


                <div class="spbartxts  row">
                    <div class=" col-12 ">
                        <h1></h1>
                    </div>

                    <div class="col-12"><br>

                    </div>


                </div>
            </div>

        </div>
        <div class="container cards">



            <div class="row">
                <h1 class=" ct mt5 mbb5">过往版本</h1>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card cardbg">
                        <div class="card-body">
                            <img class="card-img-top" src="https://images.ctfassets.net/wn7ipiv9ue5v/5S18IowC3mVZsAU7OYUQ1S/3827e8b941ec2e3bf186b5ae9689d089/2KGMKT_CIV4_AG_FOB_NORATING_1.jpg?w=768&h=&fm=webp&q=" />
                            <h5 class="card-title">席德·梅尔的文明VI 风云变幻</h5>
                            <p class="card-text">HK$77.50
                            </p>
                            <div class="linkbox">

                                <div class="logobox shoplogo">
                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_playstation_1.svg" />
                                </div>
                                <div class="logobox  ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_xbox_1.svg" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2019/03/29/5c9ea27c7c616epicstore_logo_S_2.png" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2020/05/12/icon_switch_1.svg" />

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card cardbg">
                        <div class="card-body">
                            <a href="../pages/login.html">
                                <img class="card-img-top" src="https://images.ctfassets.net/wn7ipiv9ue5v/2ROTJ11e217xt6VmC5F0tq/3f83f5639df2cb3567d69ec49a655c8c/2KGMKT_CIV5_COMPLETE_AG_FOB_NO_RATING_1.jpg?w=768&h=&fm=webp&q=" />
                            </a>
                            <h5 class="card-title">席德·梅尔的文明®VI 迭起兴衰</h5>
                            <p class="card-text">HK$76.56
                            </p>
                            <div class="linkbox">

                                <div class="logobox shoplogo">
                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_playstation_1.svg" />
                                </div>
                                <div class="logobox  ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_xbox_1.svg" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2019/03/29/5c9ea27c7c616epicstore_logo_S_2.png" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2020/05/12/icon_switch_1.svg" />

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card cardbg hid">
                        <div class="card-body">
                            <img class="card-img-top" src="https://images.ctfassets.net/wn7ipiv9ue5v/7bsmO1QNCwPj3aR4bP7IBF/12864d5f4a4ecc574aa03e4ebdde4e11/2KGMKT_CIV6_Platinum_Edition_AG_FOB_NR_1.jpg?w=768&h=&fm=webp&q=" />
                            <h5 class="card-title">席德·梅尔的文明VI 白金版</h5>
                            <p class="card-text">HK$148.02
                            </p>
                            <div class="linkbox">

                                <div class="logobox shoplogo">
                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_playstation_1.svg" />
                                </div>
                                <div class="logobox  ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/web/common/retail/icon_xbox_1.svg" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2019/03/29/5c9ea27c7c616epicstore_logo_S_2.png" />

                                </div>
                                <div class="logobox ">

                                    <img class="adlogo" src="https://cdn.2kgames.com/2020/05/12/icon_switch_1.svg" />

                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>







    </div>
    <?php
    include './footer-shop.php';
    ?>

</body>
<script src="https://use.fontawesome.com/4411da1e28.js"></script>
<script src="../js/bootstrap/popper.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="../js/bootstrap/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../js/script.js"></script>

</html>