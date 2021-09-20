<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('USER Dashboard') }}
        </h2>
    </x-slot>
 

 <!-- Stylesheet
 ================================================== -->
 

<div class="py-12">
    <div class="main-section">
      <div class="container">
        <div class="row">
          @php 
           $previous_interests=Auth::user()->interested_in;
           $previous_interests=json_decode($previous_interests,true);
          @endphp
               
          @if($previous_interests!=null)
      
                  @if(count($products)>0)

                    @foreach($products as $product)
                
                      @if($product->status !=0)
                      @if (in_array($product->plotimagedockey, $previous_interests))
                                <div class="col-sm-12 col-md-4 col-lg-12 col-12">
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

                              @if (!in_array($product->plotimagedockey, $previous_interests))

                                                @if (session('role_id')===1)
                                                
                                              
                                                  <a type="button" href="/interestedin/{{$product->plotimagedockey}}/admin/dashboard" class="btn btn-success ">Interested</a>
                                                @else
                                                
                                                  <a type="button" href="/interestedin/{{$product->plotimagedockey}}/user/dashboard" class="btn btn-success ">Interested</a>
                                                @endif
                              @else
                                                <a type="button" href="/interestedin/{{$product->plotimagedockey}}/user/dashboard" class="btn btn-success disabled" >Processing</a>
                                              
                              @endif           
                
                                              </span>
                                            </div>
                                        </div>  
                          
                                </div>

                                  <!-- First Card Row -->
                              @php
                                  
                                  {
                                  echo("</div>");
                                  echo('<div class="row secondRow">');
                                  }
                                  @endphp
                    @endif
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
empty


@endif
 

</x-app-layout>
