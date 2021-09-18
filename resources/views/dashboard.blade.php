<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('USER Dashboard') }}
        </h2>
    </x-slot>
 
 <link rel="stylesheet" href="../stylerentsell.css" />
 <!-- Stylesheet
 ================================================== -->
 

<div class="py-12">

    <div class="main-section">
        <div class="container">
          <div class="row">
            
            <div class="col-sm-12 col-md-4 col-lg-12 col-12">
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
      
          </div>
          <!-- First Card Row -->
          <div class="row secondRow">
            <div class="col-sm-12 col-md-4 col-lg-12 col-12">
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
                    
                    <button>Interested</button>
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
    </div>

</x-app-layout>
