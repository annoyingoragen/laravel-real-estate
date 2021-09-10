<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>C.S.M Builders & Developers</title>
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="./imgindex/csm.png" type="image/icon" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../cssindex/bootstrap.css" />
    <link rel="stylesheet" href="../fontsindex/font-awesome/css/font-awesome.css" />
    i
    <link rel="stylesheet" href="../stylerentsell.css" />
    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="../cssindex/style.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="../cssindex/nivo-lightbox/nivo-lightbox.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../cssindex/nivo-lightbox/default.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
      rel="stylesheet"
    />
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation
    ==========================================-->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle collapsed"
            data-toggle="collapse"
            data-target="#bs-example-navbar-collapse-1"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand page-scroll" href="#page-top">
            <img class="brandLogo" src="../imgindex/csm.png" alt="" />
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/index" class="page-scroll">Home</a></li>
            <li><a href="/index#about" class="page-scroll">About</a></li>
            <li>
              <a href="Rent & Sell/index" class="page-scroll"
                >Property</a
              >
            </li>
            <li><a href="/index#portfolio" class="page-scroll">Projects</a></li>

            <li><a href="/index#contact" class="page-scroll">Contact</a></li>
            @if (Route::has('login'))
       
            @auth
                 @if (session('role_id')===1)
                <li>    <a href="{{ url('admin/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a></li>
                 @else
                 <li><a href="{{ url('user/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a></li>
                 @endif
            @else
          <li>  <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>

            @if (Route::has('register'))
           <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
            @endif
            @endauth
        
        @endif
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
    </nav>
    <div class="main-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="main_card_section">
              <div class="image_side" style="background: url('./images/pic8.jpg');"></div>
              <div class="rent">Rent</div>
              <div class="card_text">
                <h5 style="margin-left: 20px !important;">
                  <span style="color: #f3b43f ">48.45LACK</span> <br />
                  G-9, ISLAMABAD
                </h5>
                <p>
                  6 Bedrooms With Attached Baths drawing Room Dinning Room (2)
                  tv Lounge (3) kitchen (3) beautiful... more
                </p>
                <span class="btn_group">
                  <button>EMail</button>
                  <button>More Info</button>
                </span>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="main_card_section">
              <div class="image_side" style="background: url('./images/pic5.jpg');"></div>
              <div class="sell">Sell</div>
              <div class="card_text">
                <h5>
                  <span style="color: #f3b43f">48.45LACK</span> <br />
                  G-9, ISLAMABAD
                </h5>
                <p>
                  6 Bedrooms With Attached Baths drawing Room Dinning Room (2)
                  tv Lounge (3) kitchen (3) beautiful... more
                </p>
                <span class="btn_group">
                  <button>EMail</button>
                  <button>More Info</button>
                </span>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="main_card_section">
              <div class="image_side" style="background: url('./images/pic1.jpg');"></div>
              <div class="rent">Rent</div>
              <div class="card_text">
                <h5>
                  <span style="color: #f3b43f">48.45LACK</span> <br />
                  G-9, ISLAMABAD
                </h5>
                <p>
                  6 Bedrooms With Attached Baths drawing Room Dinning Room (2)
                  tv Lounge (3) kitchen (3) beautiful... more
                </p>
                <span class="btn_group">
                  <button>EMail</button>
                  <button>More Info</button>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- First Card Row -->
        <div class="row secondRow">
          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="main_card_section">
              <div class="image_side" style="background: url('./images/pic4.jpg');"></div>
              <div class="sell">Sell</div>
              <div class="card_text">
                <h5 style="margin-left: 20px !important;">
                  <span style="color: #f3b43f ">48.45LACK</span> <br />
                  G-9, ISLAMABAD
                </h5>
                <p>
                  6 Bedrooms With Attached Baths drawing Room Dinning Room (2)
                  tv Lounge (3) kitchen (3) beautiful... more
                </p>
                <span class="btn_group">
                  <button>EMail</button>
                  <button>More Info</button>
                </span>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="main_card_section">
              <div class="image_side" style="background: url('./images/pic1.jpg');"></div>
              <div class="rent">Rent</div>
              <div class="card_text">
                <h5>
                  <span style="color: #f3b43f">48.45LACK</span> <br />
                  G-9, ISLAMABAD
                </h5>
                <p>
                  6 Bedrooms With Attached Baths drawing Room Dinning Room (2)
                  tv Lounge (3) kitchen (3) beautiful... more
                </p>
                <span class="btn_group">
                  <button>EMail</button>
                  <button>More Info</button>
                </span>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
            <div class="main_card_section">
              <div class="image_side" style="background: url('./images/pic6.jpg');"></div>
              <div class="rent">Rent</div>
              <div class="card_text">
                <h5>
                  <span style="color: #f3b43f">48.45LACK</span> <br />
                  G-9, ISLAMABAD
                </h5>
                <p>
                  6 Bedrooms With Attached Baths drawing Room Dinning Room (2)
                  tv Lounge (3) kitchen (3) beautiful... more
                </p>
                <span class="btn_group">
                  <button>EMail</button>
                  <button>More Info</button>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- second Card row -->
      </div>
   
    </div>
    <nav aria-label="">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="./index.html">Previous</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="./card2.html">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="./card.html">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="./card.html">Next</a>
        </li>
      </ul>
    </nav>  

    <!-- Footer Section -->
    <div id="footer">
      <div class="container text-center">
        <p>&copy; 2021 Design by TechRise</p>
      </div>
    </div>
    <script type="text/javascript" src="jsindex/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="jsindex/bootstrap.js"></script>
    <script type="text/javascript" src="jsindex/SmoothScroll.js"></script>
    <script type="text/javascript" src="jsindex/nivo-lightbox.js"></script>
    <script type="text/javascript" src="jsindex/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="jsindex/contact_me.js"></script>
    <script type="text/javascript" src="jsindex/main.js"></script>
  </body>
</html>
