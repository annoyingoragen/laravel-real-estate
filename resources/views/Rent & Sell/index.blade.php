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
              <a href="/Rent & Sell/index" class="page-scroll"
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
                
                @if (Route::has('login'))

                @auth



                @if(count($products)>0)




                @foreach($products as $product)
              
              @if($product->status !=0)
               
              @php 
                $previous_interests=Auth::user()->interested_in;
                $previous_interests=json_decode($previous_interests,true);
                

              @endphp
                        
                              <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                                    <div class="main_card_section">
                                        @php
                                        $product->plotimagetitle=json_decode($product->plotimagetitle,true);
                                        @endphp
                                        @foreach($product->plotimagetitle as $f)
                                        @php $filen=str_replace('"','',$f);@endphp
  
                                        <div class="image_side" style="background: url('{{ asset('storage/photos/'.$f) }}');"></div>
                                       @if ($product->rent_sale=="sale")
                                        <div class="sell">{{$product->rent_sale}}</div>
                                        @else
                                        
                                        <div class="rent">{{$product->rent_sale}}</div>
                                        @endif
                                        @php break @endphp
                                                              @endforeach
                                          <div class="card_text">
                                            <h5 style="margin-left: 20px !important;">
                                              <span style="color: #f3b43f ">Price: {{$product->plotprice}}</span> <br />
                                              <br><br>
                                              Address:<br> {{$product->plotaddress}}<br><br>
                                              
                                              <span style="color: #f3b43f ">Last Date to Apply:<br> {{$product->bookingdate}}</span> <br />
                                            </h5>
                                            
                                            <span class="btn_group">




             @if (Route::has('login'))
         
              @auth
                      @if($previous_interests!=null)
                            @if (!in_array($product->plotimagedockey, $previous_interests))

                                              @if (session('role_id')===1)
                                              
                                            
                                                <a type="button" href="/interestedin/{{$product->plotimagedockey}}/admin/dashboard" class="btn btn-success ">Interested</a>
                                              @else
                                              
                                                <a type="button" href="/interestedin/{{$product->plotimagedockey}}/user/dashboard" class="btn btn-success ">Interested</a>
                                               @endif
                            @else
                                              <a type="button" href="/interestedin/{{$product->plotimagedockey}}/user/dashboard" disabled class="btn btn-success disabled">Processing</a>
                                            
                            @endif
                      @else
                      @if (session('role_id')===1)
                                              
                                            
                      <a type="button" href="/interestedin/{{$product->plotimagedockey}}/admin/dashboard" class="btn btn-success ">Interested</a>
                    @else
                    
                      <a type="button" href="/interestedin/{{$product->plotimagedockey}}/user/dashboard" class="btn btn-success ">Interested</a>
                     @endif   
                      @endif
              @endauth
              @else
                            <a type="button" href="/register" class="btn btn-success ">Interested</a>
              @endif
                                             
              
                                            </span>
                                          </div>
                                      </div>  
                        
                               </div>
            
                                <!-- First Card Row -->
                            @php
                                if($loop->iteration%3==0)
                                {
                                echo("</div>");
                                echo('<div class="row secondRow">');
                                }
                                 @endphp
                              @endif
                              @endforeach
                      
                      <!-- second Card row -->
               </div>        
            </div>
     
      </div>
  
  
      <nav aria-label="">
        <ul style="padding: 15px;
        font-size: 18px; " class="pagination page-link ">
          {{$products->links()}}
          @else
          <p>No plots found</p>
          @endif
  
        </ul>
      </nav>  
















@else

              @if(count($products)>0)




              @foreach($products as $product)
            
            @if($product->status !=0)
                

          
            
                      
                            <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                                  <div class="main_card_section">
                                      @php
                                      $product->plotimagetitle=json_decode($product->plotimagetitle,true);
                                      @endphp
                                      @foreach($product->plotimagetitle as $f)
                                      @php $filen=str_replace('"','',$f);@endphp

                                      <div class="image_side" style="background: url('{{ asset('storage/photos/'.$f) }}');"></div>
                                     @if ($product->rent_sale=="sale")
                                      <div class="sell">{{$product->rent_sale}}</div>
                                      @else
                                      
                                      <div class="rent">{{$product->rent_sale}}</div>
                                      @endif
                                      @php break @endphp
                                                            @endforeach
                                        <div class="card_text">
                                          <h5 style="margin-left: 20px !important;">
                                            <span style="color: #f3b43f ">{{$product->plotprice}}</span> <br />
                                            {{$product->plotaddress}}
                                          </h5>
                                          <p>
                                            8 Bedrooms With Attached Baths drawing Room Dinning Room (2)
                                            tv Lounge (3) kitchen (3) beautiful... more
                                          </p>
                                          <span class="btn_group">
                                            @if (Route::has('login'))
       
            @auth
                                            @if (session('role_id')===1)
                                            
                                          
                                            <a type="button" href="/interestedin/{{$product->plotimagedockey}}/admin/dashboard" class="btn btn-success ">Interested</a>
                                            @else
                                            
                                            <a type="button" href="/interestedin/{{$product->plotimagedockey}}/user/dashboard" class="btn btn-success ">Interested</a>
                                             @endif
                                    @else
                                    <a type="button" href="/register" class="btn btn-success ">Interested</a>
                                    @endif
                                           
                                    @endauth
                                          </span>
                                        </div>
                                    </div>  
                      
                             </div>
          
                              <!-- First Card Row -->
                          @php
                              if($loop->iteration%3==0)
                              {
                              echo("</div>");
                              echo('<div class="row secondRow">');
                              }
                               @endphp
           
                            
                            @endif
                            @endforeach
                    
                    <!-- second Card row -->
             </div>        
          </div>
   
    </div>


    <nav aria-label="">
      <ul style="padding: 15px;
      font-size: 18px; " class="pagination page-link ">
        {{$products->links()}}
        @else
        <p>No plots found</p>
        @endif

      </ul>
    </nav>  
@endif
@endauth


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

