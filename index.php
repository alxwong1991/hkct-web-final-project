<!DOCTYPE html>
<html lang="en">

<head>
  <title>assignment2</title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./css/bootstrap/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/header.css" />
  <link rel="stylesheet" href="./css/footer.css" />
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <?php
  include './header.php';
  ?>

  <!--------------------------------------------------------------------------------------------------------- hero -->
  <div class="bgimage">
    <div class="heroContent">
      <div class="herologo col-12">
        <img src="https://cdn.2kgames.com/2021/09/30/615621f8318f3logo_30civ_d.png" alt="30logo" class="d-inline-block position-relative" />
      </div>
      <div class="heroCelebrate hf col-12 hero30">
        <h2>CELEBRATE 30 YEARS OF CIVILIZATION</h2>
      </div>
      <div class="watchcon col-12">
        <div class="watchButton Cbutton" data-bs-toggle="modal" data-bs-target="#custom-modal">
          WATCH THE TRAILER
        </div>
      </div>

      <!-- youtube modal -->
      <div class="modal fade" id="custom-modal">
        <div class="modal-dialog">
          <div class="modal-content custom-modal-backdrop">
            <div class="modal-header nb">
              <button type="button" class="btn-close ctmclose" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body nb">
              <div class="embed-responsive embed-responsive-16by9 vdcontainer nb">
                <iframe id="modal-youtube" class="
                      embed-responsive-item
                      youtube-video-style
                      responsive-iframe
                      nb
                    " src="https://www.youtube.com/embed/FYTtl8LC_vg" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--------------------------------------------------------------------------------------------------------- hero ends -->

  <!--------------------------------------------------------------------------------------------------------- anthbar -->
  <div class="barimage">
    <div class="barContent container-fluid">
      <div class="anthlogocon col-12 col-md-6">
        <img src="https://cdn.2kgames.com/2021/06/23/60d3789b1b893logo_civ6_anth_shadow.png" class="anthlogo" />
      </div>
      <div class="box2 col-12 col-md-6">
        <div class="textcon col-12 table">AVAILABLE NOW ON PC & CONSOLES</div>

        <div class="anthlogocon col-12">
          <a href="./pages/learnMore.php">
            <div class="learnMore Cbutton">LEARN MORE</div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--------------------------------------------------------------------------------------------------------- anthbar ends -->

  <!--------------------------------------------------------------------------------------------------------- filter menu  -->
  <section class="bg-image">
    <div class="container">
      <div class="row">
        <div class="col mt-3">
          <div class="filter-menu">
            <nav class="navbar navbar-expand-md">
              <ul class="nav">
                <span class="filter-prefix"> filter: </span>
                <li class="filter-links">
                  <a class="filter-link-backdrop reuse-font" href="#">all</a>
                </li>
                <li class="filter-links">
                  <a class="filter-link-backdrop reuse-font" href="#">news</a>
                </li>
                <li class="filter-links">
                  <a class="filter-link-backdrop reuse-font" href="#">media</a>
                </li>
                <li class="filter-links">
                  <a class="filter-link-backdrop reuse-font" href="#">social</a>
                </li>
                <li class="filter-links">
                  <a class="filter-link-backdrop reuse-font" href="#">expansion</a>
                </li>
              </ul>

              <div class="mobile-menu-filter">
                <div class="dropdown">
                  <a href="#" class="nav-link dropdown-toggle dropdown-menu-link" data-bs-toggle="dropdown" role="button">filter</a>
                  <div class="dropdown-menu">
                    <a href="#" class="dropdown-item reuse-font">all</a>
                    <a href="#" class="dropdown-item reuse-font">news</a>
                    <a href="#" class="dropdown-item reuse-font">media</a>
                    <a href="#" class="dropdown-item reuse-font">social</a>
                    <a href="#" class="dropdown-item reuse-font">expansion</a>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!--------------------------------------------------------------------------------------------------------- filter menu ends  -->

    <!--------------------------------------------------------------------------------------------------------- card components  -->
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 mt-3 mb-3 cards-function">
          <a class="card-link reuse-font" href="./pages/news-1.php">
            <div class="card">
              <img class="card-icon" src="./assets/icons/icon_news.avif" alt="card icon" />
              <img src="./assets/image/card-image-01.jpg" alt="" class="card-img-top cardsz" />
              <div class="card-body-small-1">news 1</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mt-3 mb-3 cards-function">
          <a class="card-link reuse-font" href="./pages/news-2.php">
            <div class="card">
              <img class="card-icon" src="./assets/icons/icon_news.avif" alt="card icon" />
              <img src="./assets/image/card-image-02.jpg" alt="" class="card-img-top" />
              <div class="card-body-small-2">news 2</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-12 col-lg-4 mt-3 mb-3 cards-function">
          <a class="card-link reuse-font" href="./pages/news-3.php">
            <div class="card">
              <img class="card-icon" src="./assets/icons/icon_news.avif" alt="card icon" />
              <img src="./assets/image/card-image-03.jpg" alt="" class="card-img-top" />
              <div class="card-body-small-3">news 3</div>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6 mt-3 mb-3 cards-function">
          <a class="card-link reuse-font" href="./pages/news-4.php">
            <div class="card">
              <img class="card-icon" src="./assets/icons/icon_news.avif" alt="card icon" />
              <img src="./assets/image/card-image-02.jpg" alt="" class="card-img-top" />
              <div class="card-body-large-1">news 4</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-6 mt-3 mb-3 cards-function">
          <a class="card-link reuse-font" href="./pages/news-5.php">
            <div class="card">
              <img class="card-icon" src="./assets/icons/icon_news.avif" alt="card icon" />
              <img src="./assets/image/card-image-02.jpg" alt="" class="card-img-top" />
              <div class="card-body-large-2">news 5</div>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 mt-3 mb-3 cards-function-2">
          <a class="card-link reuse-font" href="./pages/news-6.php">
            <div class="card">
              <img class="card-icon" src="./assets/icons/icon_news.avif" alt="card icon" />
              <img src="https://cdn.2kgames.com/2021/05/17/60a1e735dcc90Civ6_Leader_Royale_Thumb.jpg?size=original" alt="" class="card-img-top" />
              <div class="card-body-small-1">news 6</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mt-3 mb-3 cards-function-2">
          <a class="card-link reuse-font" href="./pages/news-7.php">
            <div class="card">
              <img class="card-icon" src="./assets/icons/icon_news.avif" alt="card icon" />
              <img src="https://cdn.2kgames.com/2021/04/19/607d30836fc44AprilUpdate.jpg?size=original" alt="" class="card-img-top" />
              <div class="card-body-small-2">news 7</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-12 col-lg-4 mt-3 mb-3 cards-function-2">
          <a class="card-link reuse-font" href="./pages/news-8.php">
            <div class="card">
              <img class="card-icon" src="./assets/icons/icon_news.avif" alt="card icon" />
              <img src="https://cdn.2kgames.com/2021/03/26/605e5be02ee112KGMKT_CivilizationVI_TITLED_HERO_ART_thm.jpg" alt="" class="card-img-top" />
              <div class="card-body-small-3">news 8</div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6 mt-3 mb-3 cards-function-3">
          <a class="card-link reuse-font" href="./pages/news-9.php">
            <div class="card">
              <img class="card-icon" src="./assets/icons/icon_news.avif" alt="card icon" />
              <img src="https://cdn.2kgames.com/2021/03/25/605bd421c4a902K-Blog-Thumb-1.png?size=original" alt="" class="card-img-top cardsz" />
              <div class="card-body-large-1">news 9</div>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-6 mt-3 mb-3 cards-function-3">
          <a class="card-link reuse-font" href="./pages/news-10.php">
            <div class="card">
              <img class="card-icon" src="./assets/icons/icon_news.avif" alt="card icon" />
              <img src="https://cdn.2kgames.com/civilization.com/2K+Blog+Thumb+FEB.png" alt="" class="card-img-top" />
              <div class="card-body-large-2">news 10</div>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!--------------------------------------------------------------------------------------------------------- card components ends -->

    <!--------------------------------------------------------------------------------------------------------- load more btn  -->
    <div class="container d-flex justify-content-center pb-3">
      <button class="Cbutton load-more-btn">LOAD MORE</button>
    </div>
    <div class="container d-flex justify-content-center pb-3">
      <button class="Cbutton load-more-btn-2">LOAD MORE</button>
    </div>

    <!--------------------------------------------------------------------------------------------------------- carousel  -->
    <div class="carousel">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./assets/image/BGcarousel.avif" class="d-block carousel-image" />
            <div class="carousel-caption d-none d-md-block d-sm-block d-xs-block">
              <h1 class="reuse-font">ABOUT CIVILIZATION VI</h1>
              <p class="carousel-content reuse-font">
                Originally created by legendary game designer Sid Meier,
                Civilization is a turn-based strategy game in which you
                attempt to build an empire to stand the test of time. Become
                Ruler of the World by establishing and leading a civilization
                from the Stone Age to the Information Age. Wage war, conduct
                diplomacy, advance your culture, and go head-to-head with
                history’s greatest leaders as you attempt to build the
                greatest civilization the world has ever known. <br /><br />
                Civilization VI offers new ways to engage with your world:
                cities now physically expand across the map, active research
                in technology and culture unlocks new potential, and competing
                leaders will pursue their own agendas based on their
                historical traits as you race for one of five ways to achieve
                victory in the game.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./assets/image/BGcarousel.avif" class="d-block carousel-image" />
            <div class="carousel-caption d-none d-md-block d-sm-block d-xs-block">
              <h1 class="reuse-font">FEATURES</h1>
              <ul class="font-carousel">
                <li class="font-carousel-style">
                  <strong>EXPANSIVE EMPIRES: </strong>See the marvels of your
                  empire spread across the map like never before. Each city
                  spans multiple tiles so you can custom build your cities to
                  take full advantage of the local terrain.
                </li>
                <li class="font-carousel-style">
                  <strong>ACTIVE RESEARCH: </strong> Unlock boosts that speed
                  your civilization’s progress through history. To advance
                  more quickly, use your units to actively explore, develop
                  your environment, and discover new cultures.
                </li>
                <li class="font-carousel-style">
                  <strong>DYNAMIC DIPLOMACY: </strong> Interactions with other
                  civilizations change over the course of the game, from
                  primitive first interactions where conflict is a fact of
                  life, to late game alliances and negotiations.
                </li>
                <li class="font-carousel-style">
                  <strong>COMBINED ARMS: </strong>Expanding on the “one unit
                  per tile” design, support units can now be embedded with
                  other units, like anti-tank support with infantry, or a
                  warrior with settlers. Similar units can also be combined to
                  form powerful “Corps” units.
                </li>
                <li class="font-carousel-style">
                  <strong>ENHANCED MULTIPLAYER: </strong>
                  In addition to traditional multiplayer modes, cooperate and
                  compete with your friends in a wide variety of situations
                  all designed to be easily completed in a single session.
                </li>
                <li class="font-carousel-style">
                  <strong>A CIV FOR ALL PLAYERS: </strong>
                  Civilization VI provides veteran players new ways to build
                  and tune their civilization for the greatest chance of
                  success. New tutorial systems introduce new players to the
                  underlying concepts so they can easily get started.
                </li>
              </ul>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon custom-carousel-button" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon custom-carousel-button" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>


    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<img class="d-block w-100" src="./assets/image/BGcarousel.avif" alt="First slide">
				<p>hiiii</p>
			  </div>
			  <div class="carousel-item">
				<img class="d-block w-100" src="./assets/image/BGcarousel.avif" alt="Second slide">
				<p>yooo</p>
			  </div>
			  <div class="carousel-item">
				<img class="d-block w-100" src="./assets/image/BGcarousel.avif" alt="Third slide">
				<p>hhhhhhh</p>
			  </div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div> -->
    <!--------------------------------------------------------------------------------------------------------- carousel ends  -->
  </section>

  <?php
  include './footer.php';
  ?>

</body>

<script src="https://use.fontawesome.com/4411da1e28.js"></script>
<script src="./js/bootstrap/popper.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="./js/bootstrap/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./js/script.js"></script>

</html>